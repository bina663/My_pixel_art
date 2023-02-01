@extends('layout.main')

@section('title','Upload')

@section('content')
<form action="/upload/send" method="post" enctype="multipart/form-data">
  @csrf
    <h3 class="display-4">Upload Image</h3>
  <div class="mb-3 mt-4">
    <input type="text" class="form-control" name="title" aria-describedby="Title" placeholder="Image title..." required>
  </div>
  <div class="mb-3 mt-4">
    <input type="text" class="form-control" name="description" aria-describedby="Description" placeholder="Image description..." required>
  </div>
  <div class="mb-3 mt-4">
    <input type="file" class="form-control" name="file" aria-describedby="File" required>
  </div>
  <button type="submit" class="btn btn-success mt-4">Submit</button>
</form>
@endsection