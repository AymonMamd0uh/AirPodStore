@extends('layouts.main')

@section('content')
<section style="margin-top:100px;" class="new" id="new">
    <div class="heading">
        <h1>New <span>Arrival</span> </h1>
    </div>
    <!--heading end-->
    <div class="swiper new-arrival">
        <div class="swiper-wrapper ">
            @foreach ($arrival as $arrival)
                    <div class="swiper-slide box">
                <img src="{{asset('images/' .$arrival->image)}}" alt="">
                <div class="content">
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <!--content-->
            </div>
            <!--slider box end-->        
            @endforeach


        </div>
        <!--swiper-wrapper-->
    </div>
    <!--swiper new-arrival-->
</section>
@endsection