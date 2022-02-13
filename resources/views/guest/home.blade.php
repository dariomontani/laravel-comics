@extends('guest.layout.base')

@section('documentTitle')
    DC
@endsection

@section('content')
    <main>
        <h1>HOME</h1>
        @foreach ($comics as $comic)
        <div class="container-cards">
            <div class="card">
                <img src="{{ $comic['thumb'] }}" alt="">
                <h3>{{ $comic['title'] }}</h3>
            </div>
        </div>
        @endforeach
    </main>
@endsection