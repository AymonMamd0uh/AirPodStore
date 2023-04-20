@extends('layouts.main')

@section('content')
<section style="margin-top: 100px;"  class="products" id="products">
    <div class="heading">
        <h1>Our <span>Products</span> </h1>
    </div>
    <div class="product-container">

        @foreach ($products as $product)
        <div class="box">
            <img src="{{asset('images/' .$product->image)}}" alt="">
            <div class="content">
                <h2>{{$product->name}}</h2>

                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <span>{{$product->price}}$</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>
        @endforeach










    </div>
</section>
@endsection