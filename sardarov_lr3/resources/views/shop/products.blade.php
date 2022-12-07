@extends('layout')

@section('title')
    Сообщение
@endsection

@section('content')
    <div class="goods">
        @foreach($product as $product)
        <div class="product-item">
            <a href="#popup{{$product->id}}" class="item1Link popup-link">
                <div class="itemImage">
                    <img src="{{ $product->image }}" alt="">
                </div>
                <div class="itemRating">
                    <div class="stars1"></div>
                    <span>14</span>
                </div>
                <div class="itemTitle">
                    {{ $product->name }}
                </div>
                <div class="itemPrice">{{ $product->price }}</div>
            </a>
            <a href="../html/one_item.html"><div class="buyButton"><button>Купить</button></div></a>
        </div>
        @endforeach
        @if(count($product) == 0)
            Категория пуста.
        @endif

    </div>
@endsection
