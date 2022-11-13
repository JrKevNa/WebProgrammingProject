@extends('template.master')

@section('title', "View")

@section('content')
    <div class="container mt-5">
        <h1 class="h1"> {{ $m->Title }} </h1>
        <h5 class="h5"> {{ $m->Author }} </h5>
        <h6 class="h6"> {{ $m->Mativation }}</h6>
        <img class="img-fluid" src="(Image Source)" alt="Question Image" />
    </div>
@endsection
