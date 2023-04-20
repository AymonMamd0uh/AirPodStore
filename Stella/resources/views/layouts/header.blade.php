<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stella - store</title>

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
     <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!--Navbar-->
    <header>
        <a href="#" class="logo">Stella</a>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#new">New Arrival</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#review">Reviews</a></li>   
        </ul>
        <div class="header-icon">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-search' id="search-icon"></i>
            <i class='bx bx-cart' id="cart-icon"></i>
            <i class='bx bx-user' id="user-icon"></i>
        </div>

        <!--search box-->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search here....">
        </div>
        <!--cart-->
        <div class="cart">
            <table class="pt-5">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>


                @if (Session::has('cart'))
                    @foreach (Session::get('cart') as $product)
                        <tr>
                            <td>
                                <div class="product-info">
                                    <img src="{{ asset('images/' . $product['image']) }}">
                                    <div>
                                        <p>{{ $product['name'] }}</p>
                                        <small><span>$</span>{{ $product['price'] }}</small>
                                        <br>
                                        <form method="POST" action="{{route('remove_from_cart')}}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$product['id']}}">
                                            <input type="submit" name="remove_btn" class="remove-btn" value="remove">
                                        </form>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <form method="POST" action="edit_product_quantity">
                                    @csrf
                                    <input type="submit" value="-" class="edit-btn"
                                    name="decrease_product_quantity_btn">
                                    <input type="hidden" name="id" value="{{$product['id']}}">
                                    <input type="number" name="quantity" value="{{ $product['quantity'] }}"  readonly>
                                    <input type="submit" value="+" class="edit-btn"
                                        name="increase_product_quantity_btn">
                                </form>
                            </td>

                            <td>
                                <span class="product-price">{{ $product['price'] * $product['quantity'] }}</span>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>


            <div class="cart-total">
                <table>
                    @if (Session::has('cart'))
                        <tr>
                            <td>Total</td>

                            @if (Session::has('total'))
                                <td>${{ Session::get('total') }}</td>
                            @endif

                        </tr>
                    @endif
                </table>
            </div>


            <div class="checkout-container">
                @if(Session::has('total') && Session::get('total') != null)
                    <form method="GET" action="{{ route('checkout') }}">
                        <input type="submit" class="btn checkout-btn" value="Checkout" name="checkout">
                    </form>
                @endif
            </div>
        </div>
        <!--cart end-->
        <!--user-->
        <div class="user">
            <h2>Login Now</h2>
            <input type="email" placeholder="Enter Your Email">
            <input type="password" placeholder="password">
            <input type="submit" value="Login" class="login-btn">
            <p>Forget Password <a href="#">Reset Now</a></p>
            <p>Don't have account <a href="#">create one</a></p>
        </div>
    </header>
    <!--header end-->