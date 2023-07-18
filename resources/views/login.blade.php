@extends('layout.main')

@section('title','Upload')

@section('content')
  <form action="/login" method="post" class="form">
    @csrf
      <h2>Login</h2>
      <div>
        <input type="text" placeholder="Login" name="login">
      </div>
      <div>
        <input type="password" placeholder="password" name="password">
      </div>
      <div>
        <input type="submit" value="Login">
      </div>
      @if(session('message'))
        <p class="message-error">{{ session('message') }}</p>
      @endif
  </form>
@endsection