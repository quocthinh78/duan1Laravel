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
    public function BuyCart(Request $request){
        if (!$request->session()->exists('UserSesion')) {
            return redirect('/loginUser');
        }
        else {
            //bill
            $totalPrice = Session::get('Cart')->totalPrice;
            $length = count(Session::get('Cart')->products);
            $totalQuanty= Session::get('Cart')->totalQuanty;
            $nameUser = Session::get('UserSesion')->name;
            $email = Session::get('UserSesion')->email;
            DB::insert(
                'insert into bill values (?, ? , ? , ? , ? , ? , ? )',
                [null, $email , $totalQuanty, $length , $totalPrice, $nameUser , 'Chưa xác nhận']
            );
            // bill product
            $query = DB::table('bill')->orderBy('id', 'desc')->first()->id;
            
            
            foreach(Session::get('Cart')->products as $item){
                $quanty = $item['quanty'];
                $totalQ = $item['price'];
                $image =  $item['productInfo']->image;
                $nameBook =  $item['productInfo']->name;
                $price =  $item['productInfo']->price;
                DB::insert(
                    'insert into billproduct values (?, ? , ? , ?, ? , ?,?)',
                    [null, $nameBook, $image, $price, $quanty , $totalQ , $query]
                );
            }
            $request->session()->forget('Cart');
            $category = DB::table('category')->get();
            return view('page.cart404' , ['category' => $category ]);
            // // echo '<pre>';
            //     var_dump(Session::get('Cart'));
            // echo '</pre>';
        }
    }
    public function showCarts($id){
        $billproduct = DB::table('billproduct')->where('id_bill', '=', $id)->get();
        $bill = DB::table('bill')->where('id' , '=' , $id)->get();
        $category = DB::table('category')->get();
        return view('page.carts' , ['bill' => $bill , 'billproduct' => $billproduct ,'category' => $category]);
    }
    public function statusCart($id){
        DB::table('bill')
              ->where('id', '=' , $id)
              ->update(['status' => 'Đã xác nhận']);
        return redirect("/admin/donhang/showAll");
    }
}
