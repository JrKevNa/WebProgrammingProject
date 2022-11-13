@extends('Master.master')

@section('title', 'Home Page')

@section('content')

    <link rel="stylesheet" href="/css/homeStyle.css">

    <div class="title_screen">
        <h1> Your unfinished manga </h1>
    </div>

    <div class="container">
        @foreach($manga as $m)

            <div class="card card border-light text-white bg-dark mb-3 card-style" style="max-width: 560px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        @if($m->Image)
                        <img src="{{ asset($m->Image)}}" class="card-img" alt="..">
                        @else
                        <img src="https://www.mangaread.org/wp-content/uploads/WP-manga/data/manga_5e234fd6e54bf/476f3a127128920cce155275bea2c512/3.jpg" class="card-img" alt="..">
                        @endif
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">{{ $m->Title }}</h4>

                            <h6 class="card-text">Author: {{ $m->Author }}</h6>

                            <p class="card-text">{{ $m->Motivation }}</p>
                            <p class="card-text"><small class="text-muted">Current chapter: {{ $m->Chapter }}</small></p>

                            {{-- <form action="show/{{ $m->Id }}">
                                <button class="btn btn-outline-primary" type="submit">View</button>
                            </form> --}}
                            <a href="#" class="btn btn-primary">View</a>
                            {{-- <form action="">
                                <button class="btn btn-outline-primary" type="submit">Update</button>
                            </form> --}}
                            <a href="#" class="btn btn-primary text-white bg-info border-info">Update</a>
                            <a href="#" class="btn btn-primary bg-danger border-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            
        @endforeach
    </div>

@endsection