<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\App;
use App\Category;
use Illuminate\Support\Facades\Input;

use Auth;
use App\Cart;
use App\CartItem;
use App\User;


class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function addToCart ($productId){

    	//echo "Hello";

        $cart = Cart::where('user_id',Auth::user()->id)->first();
 
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }
 
        $cartItem  = new Cartitem();
        $cartItem->product_id=$productId;
        $cartItem->cart_id= $cart->id;
        $cartItem->save();
 
        return redirect('/cart');

 
    }

    public function showCart(){
        $cart = Cart::where('user_id',Auth::user()->id)->first();
 
        if(!$cart){
            
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        
        }
 
        $items = $cart->cartItems;
        $total=0;
        foreach($items as $item){
            $total+=$item->product->price;
        }
 
        return view('shop.cart',['items'=>$items,'total'=>$total]);
    }
 
    public function removeItem($id){
 
        CartItem::destroy($id);
        return redirect('/cart');
    }
 }
