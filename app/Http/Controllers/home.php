<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use Illuminate\Support\Facades\Auth;
use Cart;
use Validator,Redirect,Response;

class home extends Controller
{
    public function contact(){
        $category = DB::table('category')->get();
        return view('page.contact' , ['category' => $category]);
    }
    public function contactus(){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'comment' => 'required'
    ],
        [
            'name.required' => 'Tên của bạn không hợp lệ',
            'email.required' => 'Email của bạn không hợp lệ',
            'phone.required' => 'SDT của bạn không hợp lệ',
            'comment.required' => 'Bạn chưa nhập phản hồi',
        ]);
        Mail::to('thinhvo000000@gmail.com')->send(new \App\mail\makemailTra($data));
        return redirect('contact');
    }

    public function search(Request $request){
        $p = $request->q;
        if($p==''){
            $searchB = DB::table('book1')->limit(36)->get();
        }
        else {
            $searchB = DB::table('book1')
                                ->where('name', 'like',"%$p%")
                                ->get();
        }
        return view('page.search' ,['searchBooks' => $searchB]);
    }
    public function showTopCat(Request $request){
            $p = $request->q;
           if ($p == '0') {
            $showTopCat = DB::table('book1')->orderBy('brand' , 'desc')->limit(8)->get();
            $category = DB::table('category')->get();
           }else {
            $showTopCat = DB::table('book1')->where('cat_id' , '=' , $p)->orderBy('brand' , 'desc')->limit(8)->get();
            $category = DB::table('category')->get();
           }
        
        return view('page.showTopCat' ,['showTopCat' => $showTopCat , 'category' => $category]);
    }
    public function index(){
        $author = DB::table('author')->limit(4)->get();
        $category = DB::table('category')->get();
        $book = DB::table('book1')->limit(36)->get();
        $cat = DB::table('book1')->orderBy('brand' , 'desc')->limit(8)->get();
        return view('page.home' , ['category' => $category ,
                            'book'     => $book, 
                            'cat'      => $cat , 
                            'author'   => $author,]);
    }

    public function masterCategory($name){
        $author = DB::table('author')->limit(4)->get();
        $category = DB::table('category')->get();
        $cat_title = DB::table('category')->where('name' , '=' , $name)->first();
        $book = DB::table('book1')->join('category', 'book1.cat_id', '=', 'category.id')
                                ->select('book1.*')
                                ->where('category.name' , '=' , $name)
                                ->limit(36)->get();
        $cat = DB::table('book1')->orderBy('brand' , 'desc')->limit(8)->get();
        return view('page.category' , ['category' => $category ,
                            'book'      => $book, 
                            'cat'       => $cat , 
                            'author'    => $author,
                            'cat_title' => $cat_title]);
    }
    public function detailsBook($name){
        $authorOne = DB::table('author')->join('book1', 'author.id', '=', 'book1.author_id')
                                ->select('author.*')
                                ->where('book1.name' , '=' , $name)
                                ->first();
        $author = DB::table('author')->limit(4)->get();
        $category = DB::table('category')->get();
        $cat_title = DB::table('category')->where('name' , '=' , $name)->first();
        $book = DB::table('book1')->where('name', '=' , $name)->first();
        $cat = DB::table('book1')->orderBy('brand' , 'desc')->limit(8)->get();
        return view('page.details' , ['category' => $category ,
                            'book'      => $book, 
                            'cat'       => $cat , 
                            'author'    => $author,
                            'cat_title' => $cat_title,
                            'authorOne' => $authorOne]);
    }
    public function detail(){
        return view('page.detail');
    }
    public function sendEmail()
    {
      $user = auth()->user();
      Mail::to($user)->send(new MailNotify($user));
 
      if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
      }else{
           return response()->success('Great! Successfully send in your mail');
         }
    }
    public function new(){
        $category = DB::table('category')->get();
        return view('page.new' , ['category' => $category]);
    }
    public function changeAdmin($table , $step ,Request $request){
        $category = DB::table('category')->get();
        $data = DB::table('category')->first();
        $author = DB::table('author')->Paginate(6);
        $book = DB::table('book1')->Paginate(6);
        return view('page.admin' ,['category'  => $category ,
                                'book'      =>$book ,
                                'author'    => $author ,
                                'table'     => $table , 
                                'step' => $step,
                                'data' => $data]);
    }
    public function intoForm($table){
        $category = DB::table('category')->get();
        $author = DB::table('author')->Paginate(6);
        $book = DB::table('book1')->Paginate(6);
        if($table == 'theloai'){
            return view( 'page.admin' ,['category'  => $category ,
                                        'book'      =>$book ,
                                        'author'    => $author ,
                                        'table' => $table ,
                                         'step' => 'add']);
        }
    }
    public function add($table ,Request $request){
        if($table == 'theloai'){
            $name = $request->category;
            DB::table('category')->insert([
                ['name' => $name],
            ]);
            return redirect('admin/theloai/showAll');
        }
    }
    public function update($table ,$id ,Request $request){
        $data = DB::table('category')->where('id' ,'=',$id)->first();
        $category = DB::table('category')->get();
        $author = DB::table('author')->Paginate(6);
        $book = DB::table('book1')->Paginate(6);
        if($table == 'theloai'){
            return view( 'page.admin' ,['category'  => $category ,
                                        'book'      =>$book ,
                                        'author'    => $author ,
                                        'table' => $table ,
                                        'step' => 'update',
                                         'data' => $data]);
        }
    }
    public function updates($table,Request $request){
        $name  = $request->name;
        $id  = $request->id;
        DB::table('category')
              ->where('id','=', $id)
              ->update(['name' => $name]);
        return redirect('admin/theloai/showAll');
    }
    public function delete($table,$id){
        DB::table('category')->where('id', '=', $id)->delete();
        return redirect('admin/theloai/showAll');
    }
}


