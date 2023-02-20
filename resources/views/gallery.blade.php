@extends('layout.main')

@section('title','Upload')

@section('content')
    

    @foreach($gallery as $file)
        <div class="card m-2" style="width: 18rem;">
            <img src="/imagens/gallery/{{$file['file']}}" class="card-img-top" alt="...">
            <div>
                @csrf
                <div class="card-body">
                    <h5 class="card-title">{{ $file['title']}}</h5>
                    <p class="card-text">{{ $file['description']}}</p>
                    <form action="/like/{{ $file['id']}}" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn text-gray  heart">
                            @if($file['like'] == 0)
                                <i class="ion-ios-heart-outline"><p>{{ $file['like']}}</p></i>
                            @else
                                <i class="ion-ios-heart"><p>{{ $file['like']}}</p></i>
                            @endif
                        </button>
                    </form>
                    <form action="/delete/{{ $file['id']}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn text-gray trash">
                            <i class="ion-trash-a"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    
@endsection