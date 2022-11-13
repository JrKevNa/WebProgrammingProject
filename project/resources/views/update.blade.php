@extends('Master.master')

@section('title', 'Update')

@section('content')

<link rel="stylesheet" href="/css/updateStyle.css">

<form method="post" action="/ask" enctype="multipart/form-data">
    <div class="form-background">

    <div class="form-content">
    <div class="form-row text-white">
        <div class="mb-3">
            <label for="validationServer01">Title</label>
            <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Mark" required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>

        <div class="mb-3">
            <label for="validationServer02">Author</label>
            <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Otto" required>
        </div>
    </div>

    <div class="form-row text-white">
          <div class="mb-3">
              <label for="validationServer03">Motivation</label>
              <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Put motivation for you to keep reading this manga" required>
          </div>

          <div class="mb-3">
            <label for="validationServer03">Chapter</label>
            <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="At what chapter do you read now" required>
          </div>
        
          <div class="mb-3">
            <label for="file" class="form-label">Input Manga Cover</label>
            <input name="image" class="form-control" type="file" id="file" accept="image/*">
            {{-- Input image, name = "image" --}}
        </div>
    </div>

    <button class="btn btn-primary" type="submit">Update Manga</button>
    </div>

  </form>
</div>
@endsection