@extends('Master.master')

@section('title', 'Insert')

@section('content')

<link rel="stylesheet" href="/css/insertStyle.css">

<form method="post" action="/insert" enctype="multipart/form-data">
            {{--                                            --}}
            {{-- remember to use @csrf for method="post"    --}}
            {{--                                            --}}
  @csrf
    <div class="form-background">

    <div class="form-content">
    <div class="form-row text-white">
        <div class="mb-3">
            <label for="validationServer01">Title</label>
            <input type="text" name="Title" class="form-control" id="Title" placeholder="Enter manga title" value="" required>
        </div>

        <div class="mb-3">
            <label for="validationServer02">Author</label>
            <input type="text" name="Author" class="form-control" id="Author" placeholder="Enter manga author" value="">
        </div>
    </div>

    <div class="form-row text-white">
          <div class="mb-3">
              <label for="validationServer03">Motivation</label>
              <input type="text" name="Motivation" class="form-control" id="Motivation" placeholder="Put motivation for you to keep reading this manga" required>
          </div>

          <div class="mb-3">
            <label for="validationServer03">Chapter</label>
            <input type="text" name="Chapter" class="form-control" id="Chapter" placeholder="At what chapter do you read now" required>
          </div>
        
          <div class="mb-3">
            <label for="file" class="form-label">Input Manga Cover</label>
            <input name="Image" class="form-control @error('Image') is-invalid @enderror" type="file" id="Image" accept="image/*">
            {{-- Input image, name = "image" --}}
            <div class="invalid-feedback">
              Image must be in: jpg, jpeg, or png file
            </div>
          </div>
    </div>

    <button class="btn btn-primary" type="submit">Insert Manga</button>
    </div>

    <div class="form-img">
      <img src="https://cdn.quotesgram.com/img/34/56/1550093765-how_you_finish_poster_edited-1.jpg" width="70%">
    </div>
  </div>
</form>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
    </ul>
</div>
@endif


@endsection
