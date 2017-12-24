<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class Ordercontroller extends Controller
{
    public function addtorder (Request $request,$id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Order($oldCart);
        $cart->addorder($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->route('product.index');
    }
    //public function remove (Request $request)
   // {

   // }
    public function removeAll ($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Order($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('product.items');
    }

}
