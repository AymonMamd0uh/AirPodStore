
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AirPods - Store</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Product Landing Page" name="keywords">
        <meta content="Product Landing Page" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400|Quicksand:500,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

        
    </head>

    <body>
        <!-- Nav Start -->
        <div id="nav">
            <div class="container-fluid">
                <div id="logo" class="pull-left">
                    <a href="index.html"><img src="{{asset('images/logo2.jpg')}}" alt="Logo" /></a>
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('products')}}">Products</a></li>
                        <li><a href="{{route('adout')}}">About</a></li>
                        <li><a href="#testimonials">Reviews</a></li>
                        <li><a href="{{route('cart')}}">Cart</a></li>
                    
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Nav End -->
        
      