<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Mail;
class EmailController extends Controller
{
   public function sendMail(){
    //    $data = [
    //     'name' =>  "thinh",
    //     ];
    //    Mail::send('mail' , $data , function($message){
    //         $message->from('thinhvqps11484@fpt.edu.vn', 'thinhpro1');
    //         $message->to('thinhvqps11484@fpt.edu.vn' , 'hi');
    //         $message->subject('thu gui anh');
    //    });
      $category = DB::table('category')->get();
      $user = DB::table('testmail')->get();
      $details = [
      'title' => 'mail from thinh',
      'body'  => 'day la noi dung tu '
      ];
      foreach($user as $a){
      \Mail::to($a->email)
      ->send(new \App\mail\TestMail($details));
      }
      return view('page.contact' , ['category' => $category]);
      return redirect('contact');
   }
}