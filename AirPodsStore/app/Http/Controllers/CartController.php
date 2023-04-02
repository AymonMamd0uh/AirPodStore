<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function cart()
    {
        return view('cart');
    }

    public function add_to_cart(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $image = $request->input('image');
        $price = $request->input('price'); // Original Price
        $quantity = $request->input('quantity');
        $sale_price = $request->input('sale_price'); // Discounted Price

        if ($sale_price != null) {
            $price_to_charge = $sale_price;
        } else {
            $price_to_charge = $price;
        }

        // if we have a cart in session
        if ($request->session()->has('cart')) {
            $cart = $request->session()->get('cart');
            $products_array_ids = array_column($cart, 'id');

            // add product to cart
            if (!in_array($id, $products_array_ids)) {
                $product_array = array(
                    'id' => $id,
                    'name' => $name,
                    'image' => $image,
                    'price' => $price_to_charge,
                    'quantity' => $quantity,
                );

                $cart[$id] = $product_array;
                $request->session()->put('cart', $cart);
            } else {
                $this->calculateTotalCart($request);
                // product already in cart
                return view('cart');
            }
        } else {
            // if we don't have a cart in session
            $product_array = array(
                'id' => $id,
                'name' => $name,
                'image' => $image,
                'price' => $price_to_charge,
                'quantity' => $quantity,
            );

            $cart = array($id => $product_array);
            $request->session()->put('cart', $cart);
        }
        $this->calculateTotalCart($request);
        return view('cart');
    }

    function calculateTotalCart(Request $request)
    {
        $cart = $request->session()->get('cart');
        $total_price = 0;
        $total_quantity = 0;
        foreach ($cart as $id => $product) {
            $product = $cart[$id];
            $price = $product['price'];
            $quantity = $product['quantity'];

            $total_price = $total_price + ($price * $quantity);
            $total_quantity = $total_quantity + $quantity;
        }
        $request->session()->put('total', $total_price);
        $request->session()->put('quantity', $total_quantity);
    }


    function remove_from_cart(Request $request){
        if($request->session()->has('cart')){
            $id = $request->input('id');
            $cart = $request->session()->get('cart');

            unset($cart[$id]);
            $request->session()->put('cart' ,$cart);
            $this->calculateTotalCart($request);
        }
        return view('cart');
    }


    function edit_product_quantity(Request $request){
        if($request->session()->has('cart')){
            $product_id = $request->input('id');
            $product_quantity = $request->input('quantity');

            if($request->has('decrease_product_quantity_btn')){
                $product_quantity = $product_quantity - 1 ;
            }else if($request->has('increase_product_quantity_btn')){
                $product_quantity = $product_quantity + 1 ;
            }else{

            }

            if($product_quantity <= 0){
                $this->remove_from_cart($request);
            }

            $cart =$request->session()->get('cart');

            if(array_key_exists($product_id , $cart)){
                $cart[$product_id]['quantity'] = $product_quantity ;
                $request->session()->put('cart' , $cart);
                $this->calculateTotalCart($request);

            }
            return view('cart');
        }
    }


    function checkout(){
        
        return view('checkout');
    }




    function place_order(Request $request) {
        if ($request->session()->has('cart')) {
            $name    = $request->input('name');
            $email   = $request->input('email');
            $phone   = $request->input('phone');
            $city    = $request->input('city');
            $address = $request->input('address');
    
            $cost   = $request->session()->get('total');
            $status = "not paid";
            $date   = date('Y-m-d'); // Fixed date format
    
            $cart = $request->session()->get('cart');
    
            $order_id = DB::table('orders')->insertGetId([
                'name'    => $name,
                'email'   => $email,
                'phone'   => $phone,
                'city'    => $city,
                'address' => $address,
                'cost'    => $cost,
                'status'  => $status,
                'date'    => $date,
            ], 'id');
    
            foreach ($cart as $id => $product) {
                $product_id       = $product['id'];
                $product_name     = $product['name'];
                $product_price    = $product['price'];
                $product_quantity = $product['quantity'];
                $product_image    = $product['image'];
    
                DB::table('order_items')->insert([
                    'order_id'         => $order_id,
                    'product_id'       => $product_id,
                    'product_name'     => $product_name,
                    'product_price'    => $product_price,
                    'product_quantity' => $product_quantity,
                    'product_image'    => $product_image,
                    'order_date'       => $date,
                ]);
            }
    
            $request->session()->put('order_id', $order_id);
    
            return view('payment');
        } else {
            return redirect('/');
        }
    }
    
}
