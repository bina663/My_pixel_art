@extends('layout.main')

@section('title','Upload')

@section('content')
    @foreach($gallery as $file)
        <div class="card m-2" style="width: 18rem;">
            <img src="/imagens/gallery/{{$file['file']}}" class="card-img-top" alt="...">
            <form action="/upload/like" method="post">
                @csrf
                <div class="card-body">
                    <h5 class="card-title">{{ $file['title']}}</h5>
                    <p class="card-text">{{ $file['description']}}</p>
                    <a class="icon heart" href="#"><img src="/imagens/icons/heart.svg" alt="heart"></a>
                    <a class="icon" href="#"><img src="/imagens/icons/trash.svg" alt="trash"></a>
                </div>
            </form>
            
        </div>
    @endforeach
    
@endsection