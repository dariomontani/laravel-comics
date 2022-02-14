@extends('guest.layout.base')

@section('documentTitle')
    DC
@endsection

@section('content')
    <main>
        <div class="jumbo">

        </div>
        <div class="container-cards">
            @foreach ($comics as $comic)
            <div class="card">
                <div class="box-image">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </div>
                <a href="{{ route('product', $comic['id']) }}">{{ $comic['title'] }}</a>
            </div>
            @endforeach
        </div>
        <div class="button-box">
            <button>LOAD MORE</button>
        </div>
    </main>
@endsection