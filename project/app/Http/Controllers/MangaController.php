<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $manga = DB::table('manga')->select()->where('Finished', 0)->get();
        return view('home', compact('manga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'Title' => 'required',
            'Author' => 'nullable',
            'Motivation' => 'required',
            'Chapter' => 'numeric',
            'Image' => 'mimes:jpg, jpeg, png|image|max:11000'
        ]);

        if($validator->fails())
        {
            //return redirect()->back()->withErrors($validator);
            return redirect()->back()->withErrors($validator);
        }

        $fileName = time().$request->file('Image')->getClientOriginalName();
        if($request->hasFile("Image"))
        {
            $path = $request->file('Image')->storeAs('uploads', $fileName, 'public');
        }
        else
        {
            $path = null;
        }
        
        $validator = $validator->validated();
        DB::table('manga')->insert([
            'Title' => $validator['Title'],
            'Author' => $validator['Author'],
            'Motivation' => $validator['Motivation'],
            'Chapter' => $validator['Chapter'],
            'Image' => '/storage/'.$path,
        ]);

        return redirect()->route('Home');

        //return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $q = DB::table('manga')->where('Id', $id)
            ->first();
        return view('view', compact('q'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
