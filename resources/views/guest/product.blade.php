@extends('guest.layout.base')

@section('documentTitle')

@endsection

@section('content')
{{-- @dd($product) --}}
    <main>
        <div class="blueLine">

        </div>

        <div class="center">
            <div class="left">
                <h2>{{$product['title']}}</h2>
                <div class="greenLine">
                    <div class="greenLeft">
                        <p>U.S Price: {{$product['price']}}</p>
                        <p>AVAILABLE</p>
                    </div>
                    <div class="greenRight">
                        <p>Check Availability</p>
                    </div>
                </div>
                <div class="description">
                    <p>{{$product['description']}}</p>
                </div>
            </div>
            <div class="right">
                <img src="{{ $product['thumb'] }}" alt="">
            </div>
        </div>

        <div class="bottomMain">
            <div class="leftBottom">
                <h3>Talent</h3>
                <p>Art by: </p>
                <p>Written by: </p>
            </div>
            <div class="rightBottom">
                <h3>Specs</h3>
                <p>Series: {{$product['series']}}</p>
                <p>U.S: Price: {{$product['price']}}</p>
                <p>On Sale Date: {{$product['sale_date']}}</p>
            </div>
        </div>
    </main>
@endsection