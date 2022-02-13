@extends('guest.layout.base')

@section('documentTitle')
    COMICS
@endsection

@section('content')
<h1>COMICS</h1>
    {{-- <main>
        @foreach ($comics as $comic)
        <div>
            <h1>{{$comic['title']}}</h1>
            <p>{{$comic['description']}}</p>
            <p>{{$comic['price']}}</p> 
            <p>{{$comic['series']}}</p>
            <p>{{$comic['sale_date']}}</p>
            <p>{{$comic['type']}}</p>
            <p>{{$comic['artists']}}</p>
            <p>{{$comic['writers']}}</p>
        </div>
        @endforeach
    </main> --}}
@endsection