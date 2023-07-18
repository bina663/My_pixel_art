<?
  $auth = false;
    if(isset($_COOKIE["auth"]) && $_COOKIE["auth"] == true ){
        $auth = $_COOKIE["auth"];
  }
?>

@extends('layout.main')

@section('title','Upload')

@section('content')
  <form action="/upload/send" method="post" enctype="multipart/form-data" class="form">
    @csrf
    <h2>Upload</h2>
    <div>
      <input type="text" class="form-control" name="title" aria-describedby="Title" placeholder="Image title..." required>
    </div>
    <div>
      <input type="file" class="form-control" name="file" aria-describedby="File" required>
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>
@endsection