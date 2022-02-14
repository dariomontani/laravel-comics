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
                <div class="artBy">
                    <div class="first">
                        <p>Art by:</p>
                    </div>
                    <div class="second">
                        @foreach ($product['artists'] as $item)
                        <p class="lightblue">{{$item}},</p>
                        @endforeach
                    </div>
                </div>
                <div class="written">
                    <div class="first">
                        <p>Written by:</p>
                    </div>
                    <div class="second">
                        @foreach ($product['writers'] as $item)
                        <p class="lightblue">{{$item}},</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="rightBottom">
                <h3>Specs</h3>
                <div class="series">
                    <p>Series:</p>
                    <p class="lightblue">{{$product['series']}}</p>
                </div>
                <div class="price">
                    <p>U.S: Price:</p>
                    <p>{{$product['price']}}</p>
                </div>
                <div class="date">
                    <p>On Sale Date:</p>
                    <p>{{$product['sale_date']}}</p>
                </div>
            </div>
        </div>
    </main>
@endsection