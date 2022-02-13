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
                <p>{{ $comic['title'] }}</p>
            </div>
            @endforeach
        </div>
        <div class="button-box">
            <button>LOAD MORE</button>
        </div>
    </main>
@endsection