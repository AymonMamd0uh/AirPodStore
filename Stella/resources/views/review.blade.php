@extends('layouts.main')
@section('content')
<section style="margin-top:100px;" class="review" id="review">
    <div class="heading">
        <h1>Our <span>customer's</span> </h1>
    </div>
    <div class="review-container">
        <div class="box">
            <img src="{{asset('images/custom1 .jpg')}}" alt="">
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half' ></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum nostrum excepturi rem consectetur qui omnis.</p>
            <h2>Will Smith</h2>
        </div>

        <div class="box">
            <img src="{{asset('images/custom2.jpg')}}" alt="">
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half' ></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum nostrum excepturi rem consectetur qui omnis.</p>
            <h2>Will Smith</h2>
        </div>

        <div class="box">
            <img src="{{asset('images/custom3.jpg')}}" alt="">
            <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half' ></i>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum nostrum excepturi rem consectetur qui omnis.</p>
            <h2>Will Smith</h2>
        </div>
    </div>
</section>
    
@endsection