<?php
    require(resource_path('core/index.php'));
?>

@extends('layout.main')

@section('title','Upload')

@section('content')
    
    <div class="container-card">
    @foreach($gallery as $file)
        <div class="card" style="width: 18rem;">
            <img src="/imagens/gallery/{{$file['file']}}" class="card-img" alt="...">
            <div>
                @csrf
                <div class="card-text">
                    <h2 class="card-title">{{ $file['title']}}</h2>
                    <?php $formattedDate = date("d-m-Y", strtotime($file['created_at'])); ?>
                    <p class="card-text">{{ $formattedDate}}</p>
                </div>
                <div class="card-action">
                    <form action="/like/{{ $file['id']}}" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn text-gray  heart">
                            <span>
                                @if($file['like'] == 0)
                                    <i class="ion-ios-heart-outline"></i>
                                    <p>{{ $file['like']}}
                                @else
                                    <i class="ion-ios-heart"></i>
                                    <p>{{ $file['like']}}</p>
                                @endif
                            </span>
                           
                        </button>
                    </form>
                    @if($auth)
                        <form action="/delete/{{ $file['id']}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn text-gray trash">
                                Deletar
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection