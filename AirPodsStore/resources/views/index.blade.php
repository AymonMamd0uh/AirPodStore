@extends('layouts.main')

@section('content')

  <!-- Header Start-->
  <div id="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="header-content">
                    <h2><span>AirPods</span> is the best <span>Landing Page</span> to showcause your product</h2>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Android and iOS Support</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span> Strong audio performance</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Active Noise Cancellation</li>
                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Dual beamforming microphones.</li>
                    </ul>
                    <a class="btn" href="{{route('products')}}">Buy Now</a>
                </div>
            </div>
            <div class="col-md-5">
                <div class="header-img">
                    <img src="{{asset('images/header.jpg')}}" alt="Product Image" width="300" height="300">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End-->

           <!-- Feature Start-->
           <div id="feature">
            <div class="container">
                <div class="section-header">
                    <h2>Product Features</h2>
                    <p>
                        AirPods Advanced Features and Settings You Need to Know
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="product-feature">
                            <div class="product-content">
                                <h2>Stronger noise cancellation</h2>
                                <p>it's better at hearing voices, and blocks out harsh "high decibel" noise that you don't want to hear</p>
                            </div>
                            <div class="product-icon">
                                <i class="fa fa-lightbulb"></i>
                            </div>
                        </div>
                        <div class="product-feature">
                            <div class="product-content">
                                <h2>Longer battery life </h2>
                                <p>The original AirPods Pro had four hours of listening time, and the case had 24 hours</p>
                            </div>
                            <div class="product-icon">
                                <i class="fa-solid fa-battery-full"></i>
                            </div>
                        </div>
                        <div class="product-feature">
                            <div class="product-content">
                                <h2>Easy to operate</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit egestas</p>
                            </div>
                            <div class="product-icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-img">
                            <img src="{{asset('images/header.jpg')}}" alt="Product Image">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-feature">
                            <div class="product-icon">
                                <i class="fa-solid fa-volume-high"></i>
                            </div>
                            <div class="product-content">
                                <h2>You can change the volume with touch controls</h2>
                                <p> even when you're away from your phone. Just swipe up on a sensor to raise the volume, and down to soften it</p>
                            </div>
                        </div>
                        <div class="product-feature">
                            <div class="product-icon">
                                <i class="fa-solid fa-hourglass-end"></i>
                            </div>
                            <div class="product-content">
                                <h2>20 hrs</h2>
                                <p>Up to 6 hours of listening time with a single charge</p>
                            </div>
                        </div>
                        <div class="product-feature">
                            <div class="product-icon">
                                <i class="fa fa-crown"></i>
                            </div>
                            <div class="product-content">
                                <h2>sensor</h2>
                                <p>Skin detection sensor helps prevent audio starting inadvertently</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->

        <!-- Process Start-->
        <div id="process">
            <div class="container">
                <div class="section-header">
                    <h2>How It Works</h2>
                    <p>
                        Start by connecting your AirPods to your iPhone, iPad, or other device and make sure the volume level is right for you
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="process-col">
                            <i class="fa fa-plug"></i>
                            <h2>Pair your AirPods</h2>
                            <p>
                                You can pair AirPods with your Apple devices to listen to music, movies, messages, and more
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="process-col">
                            <i class="fa-solid fa-headphones-simple"></i>
                            <h2>Listen with a spres</h2>
                            <p>
                                With just a tap or a press, pause and resume video playback, skip music tracks, and more
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="process-col">
                            <i class="fa fa-check"></i>
                            <h2>Use Siri</h2>
                            <p>
                                Use Siri with your AirPods and devices to find information, play music, accept or decline incoming calls
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process End-->
        
        
        <!-- Products Start -->
        <div id="products">
            <div class="container">
                <div class="section-header">
                    <h2>Get Your Products</h2>
                    <p>
                        We break down the key differences between the entry-level AirPods, AirPods 3, AirPods Pro (1st-Gen) and the brand-new AirPods Pro (2nd-Gen).
                </div>
                <div class="row align-items-center">
                    @foreach ($products as $product)
                        <div class="col-md-3">
                            <div class="product-single">
                                <div class="product-img">
                                    <img src="{{ asset('images/' . $product->image) }}" alt="Product Image">
                                </div>
                                <div class="product-content">
    
                                    <h2>
                                        <a href="{{ route('single_product', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                    </h2>
                                    @if ($product->sale_price != null)
                                        <h3>${{ $product->sale_price }}</h3>
                                        <h3 style="text-decoration: line-through">${{ $product->price }}</h3>
                                    @else
                                        <h3>${{ $product->price }}</h3>
                                    @endif
    
    
                                    <form method="POST" action="{{ route('add_to_cart') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                        <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="image" value="{{ $product->image }}">
                                        <input type="submit" value="Add To Cart" class="btn">
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
    
    
    
                </div>

                <div class="mt-5 text-center"><a href="{{route('products')}}" class="btn btn-primary">Buy Now</a></div>

            </div>
        </div>
        <!-- Products End -->
        
        
        <!-- Testimonials Start -->
        <div id="testimonials">
            <div class="container">
                <div class="section-header">
                    <h2>99.99% Positive Reviews</h2>
                    <p>
                        Customer Ratings & Reviews
                    </p>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="images/person1.jfif" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Christopher Heath</h3>
                            <h4>Science technician</h4>
                            <p>
                                I really like these AirPods for various things. I find that these fit my ear really nicely and they are more comfortable
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="images/person2.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Mollie White</h3>
                            <h4>Youtuber</h4>
                            <p>
                                My new Airpods are incredible.  They work great with my Iphone and I couldn't imagine not having them now.
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="images/person3.jfif" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Tom McKenzie</h3>
                            <h4>Videographer</h4>
                            <p>
                                Best earphones I've ever owned.The Hey Siri features comes in handy, way more than I thought I'd use. 
                            </p>
                        </div>
                    </div>
                    
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="images/person4.jfif" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Ruby Forster</h3>
                            <h4>Photographer</h4>
                            <p>
                                Don’t listen to any one that says the AirPods aren't good.The quality is great and it’s very easy to connect.
                            </p>
                        </div>
                    </div>
                    
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="images/person5.jfif" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Leo Conway</h3>
                            <h4>Relationship manager</h4>
                            <p>
                                The AirPods Pro is a vast improvement, by both including ANC and simply better
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials End -->
        
        
        <!-- FAQ Start -->
        <div id="faqs">
            <div class="container">
                <div class="section-header">
                    <h2>Quick FAQs</h2>
                    <p>
                        AirPods Pro take the listening experience to a new level of individuality
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <span>1</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        Who is the Apple AirPods Pro (2nd generation) for?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        iPhone owners are the only ones with any business buying the AirPods Pro (2nd generation). When you pair these earbuds with an iPhone, you get Apple-exclusive features like Spatial Audio personalization, battery life optimization, Find My access, and more.  
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <span>2</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                        What’s it like to use  AirPods Pro (2nd generation)?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Aside from the glossy white charging cases, the first and second-generation AirPods Pro look like twins. This time around, Apple adds a silver lanyard loop and speaker to the otherwise blank block. Rather than play music, the case’s speaker emits a sound to help you locate it through the Find My app. You’ll also hear an alert tone if the battery is low or once pairing is complete, though you can disable these tones through your iPhone’s Settings app. 
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <span>3</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                        How do you control  AirPods Pro (2nd generation)?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        You can control media, listening modes, and field phone calls all from the new AirPods Pro. When paired to a compatible Apple device, you can use the hot word, “Hey Siri,” to make hands-free commands and inquiries. Apple debuts swipe gestures on the AirPods Pro (2nd generation) too. 
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <span>4</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                        Does the AirPods Pro (2nd generation) support Apple Find My?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        To find your lost AirPods, you’ll want to open the Find My app on your iOS/iPadOS device. Your AirPods Pro (2nd generation) automatically links to your Find My app upon pairing. From there, you can locate each individual earbud or the case. You can even choose to be notified when you leave the case or earbuds behind, and exempt certain locations like your home.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <span>5</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                        Does Apple AirPods Pro (2nd generation) have fast charging?
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Fast charging is faster than the standard with the AirPods Pro (2nd generation), and 5 minutes of charging yields 60 minutes of music playback
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="col-md-5">
                        <div class="contact-info">
                            <h2>Get in Touch</h2>
                            <p>
                                We hope that the site won your admiration, and for more greatness, contact us
                            {{-- <h3><i class="fa fa-map-marker"></i>123 Trade Tower, Los Angeles, CA, USA</h3> --}}
                            <h3><i class="fa fa-envelope"></i>aymanmamdouh106@gmail.com</h3>
                            <h3><i class="fa fa-envelope"></i>email@gmail.com</h3>
                            <h3><i class="fa fa-phone"></i>+20 1007812642</h3>
                            <h3><i class="fa fa-phone"></i>+20 1064298448</h3>
                            <a class="btn" href="#">Contact Us</a>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Start -->


        <!-- Footer Start -->
<div id="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p>&copy; Copyright <a href="#">AymanAndBothina</a>. All Rights Reserved</p>
            </div>
            <div class="col-md-6">
                <p>Template by <a href="">AymanAndBothina</a></p>
            </div>
        </div>
    </div>
  </div>
  <!-- Footer End -->
  
  
  <!-- Back to Top -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


@endsection
