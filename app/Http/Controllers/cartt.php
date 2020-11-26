<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use Illuminate\Support\Facades\Auth;
use App\carts;
use Session;
use Validator,Redirect,Response;

class cartt extends Controller
{
    public function addCart(Request $request  , $id){
        $product = DB::table('book1')->where('id', '=' ,$id)->first();
        $category = DB::table('category')->get();
        if($product != null) {
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new carts($oldCart);
            $newCart->AddCart($product ,$id);
            $request->session()->put('Cart' , $newCart);
        }
        return view('page.cart' , ['newCart' => $newCart, 'category' => $category]);
    }
    public function deleteCart(Request $request  , $id){
        $category = DB::table('category')->get();
        $product = DB::table('book1')->where('id', '=' ,$id)->first();
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new carts($oldCart);
        $newCart->deleteCartItem($id);

        if(count($newCart->products) > 0 ){
            $request->session()->put('Cart' , $newCart);
            return view('page.cart' , ['newCart' => $newCart , 'category' => $category]);
        }
        else {
            $request->Session()->forget('Cart');
            return redirect('/');
        } 
    }
    public function showCart(){
        $category = DB::table('category')->get();
        return view('page.cart' , [ 'category' => $category]);
    }
}
