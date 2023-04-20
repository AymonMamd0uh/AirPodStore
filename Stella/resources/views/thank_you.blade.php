@extends('layouts.main')

@section('content')
    <section>
        <div class="container mt-5 my-3 py-5">
            <h4>Thank YOu</h4>


                @if (Session::has('order_id') && Session::get('order_id') !== null)
                    <h4 style="color: blue" class="my-5">Order ID: {{ Session::get('order_id') }}</h4>

                    <p>Plaese Keep this ID save to maintain delivery rights</p>
                @endif
        </div>
    </section>


    @endsection