@extends('layouts.main')

@section('content')

<section class="home" id="#home">
    <div class="home-text">
        <span>shop now</span>
        <h1>New arrival of <br> Fresh Products</h1>
        <a href="#" class="btn">Shop Now</a>
    </div>
    <div class="home-img">
        <img src="{{asset('images/header.jpg')}}" alt="">
    </div>
</section>
<!-- home end-->
<section style="margin-top:100px;" class="new" id="new">
    <div class="heading">
        <h1>New <span>Arrival</span> </h1>
    </div>
    <!--heading end-->
    <div class="swiper new-arrival">
        <div class="swiper-wrapper ">
            <div class="swiper-slide box">
                <img src="{{asset('images/product1.webp')}}" alt="">
                <div class="content">
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <!--content-->
            </div>
            <!--slider box end-->
            <div class="swiper-slide box">
                <img src="{{asset('images/product2.webp')}}" alt="">
                <div class="content">
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <!--content-->
            </div>
            <!--slider box end-->
            <div class="swiper-slide box">
                <img src="{{asset('images/product4.webp')}}" alt="">
                <div class="content">
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <!--content-->
            </div>
            <!--slider box end-->
            <div class="swiper-slide box">
                <img src="{{asset('images/product6.webp')}}" alt="">
                <div class="content">
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <!--content-->
            </div>
            <!--slider box end-->
            <div class="swiper-slide box">
                <img src="{{asset('images/product11.webp')}}" alt="">
                <div class="content">
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <!--content-->
            </div>
            <!--slider box end-->
            <div class="swiper-slide box">
                <img src="{{asset('images/product13.webp')}}" alt="">
                <div class="content">
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <!--content-->
            </div>
            <!--slider box end-->
            <div class="swiper-slide box">
                <img src="{{asset('images/product3.webp')}}" alt="">
                <div class="content">
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <!--content-->
            </div>
            <!--slider box end-->
            <div class="swiper-slide box">
                <img src="{{asset('images/product15.webp')}}" alt="">
                <div class="content">
                    <a href="#" class="btn">Buy Now</a>
                </div>
                <!--content-->
            </div>
            <!--slider box end-->
        </div>
        <!--swiper-wrapper-->
    </div>
    <!--swiper new-arrival-->
</section>
<!--new arrival end-->

<!--products-->
<section class="products" id="products">
    <div class="heading">
        <h1>Our <span>Products</span> </h1>
    </div>
    <div class="product-container">
        <div class="box">
            <img src="{{asset('images/product1.webp')}}" alt="">
            <div class="content">
                <h2>T-shirt</h2>

                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <span>50$</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('images/product2.webp')}}" alt="">
            <div class="content">
                <h2>T-shirt</h2>

                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <span>50$</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>
        <div class="box">
            <img src="{{asset('images/product3.webp')}}" alt="">
            <div class="content">
                <h2>T-shirt</h2>

                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <span>50$</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>
        <div class="box">
            <img src="{{asset('images/product4.webp')}}" alt="">
            <div class="content">
                <h2>T-shirt</h2>

                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <span>50$</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>
        <div class="box">
            <img src="{{asset('images/product5.webp')}}" alt="">
            <div class="content">
                <h2>T-shirt</h2>

                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <span>50$</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>
        <div class="box">
            <img src="{{asset('images/product6.webp')}}" alt="">
            <div class="content">
                <h2>T-shirt</h2>

                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <span>50$</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>
        <div class="box">
            <img src="{{asset('images/product9.webp')}}" alt="">
            <div class="content">
                <h2>T-shirt</h2>

                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <span>50$</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>
        <div class="box">
            <img src="{{asset('images/product11.webp')}}" alt="">
            <div class="content">
                <h2>T-shirt</h2>

                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>
                <span>50$</span>
                <i class='bx bx-cart-alt'></i>
            </div>
        </div>
    </div>
</section>
<!--products end-->
<!--reviews-->
<section class="review" id="review">
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
<!--footer-->
<section class="footer">
    <div class="footer-box">
        <h2>Stella</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At iste atque nisi in ipsa. Veniam!</p>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook' ></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-tiktok'></i></a>
            <a href="#"><i class='bx bxl-instagram' ></i></a>
        </div>
    </div>
    <div class="footer-box">
        <h3>Support</h3>
        <li><a href="#">Product</a></li>
        <li><a href="#">Help & support</a></li>
        <li><a href="#">Return Policy</a></li>
        <li><a href="#">Terms of us</a></li>
        <li><a href="#">FAQ</a></li>
    </div>

    <div class="footer-box">
        <h3>Our Branches</h3>
        <li><a href="#">Egypt</a></li>
        <li><a href="#">Canda</a></li>
        <li><a href="#">Japan</a></li>
        <li><a href="#">untited states</a></li>
        <li><a href="#">India</a></li>
    </div>
    <div class="footer-box">
        <h3>payment method</h3>
        <div class="payment">
            <img src="{{asset('images/veza.png')}}" alt="">
            <img src="{{asset('images/mastercardpng.png')}}" alt="">
            <img src="{{asset('images/Paypalpng.png')}}" alt="">
        </div>
    </div>
</section>
<!--copyright-->
<div class="copyright">
    <p>© Copyright AymanandBothina. All Rights Reserved</p>
</div>
@endsection