<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('manga', function (Blueprint $table) {
            $table->id("Id");
            $table->string("Title");
            $table->string("Author")->nullable();
            $table->longText("Motivation");
            $table->integer("Chapter");
            $table->string("Image")->nullable();
            $table->timestamp("LastVisited")->useCurrent();
            $table->boolean('Finished')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('manga');
    }
};
