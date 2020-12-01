<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Mail;
use Illuminate\Support\Facades\Auth;
use Cart;
use Validator, Redirect, Response;

class home extends Controller
{
    public function contact()
    {
        $category = DB::table('category')->get();
        return view('page.contact', ['category' => $category]);
    }
    public function contactus()
    {
        $data = request()->validate(
            [
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
            ]
        );
        Mail::to('thinhvo000000@gmail.com')->send(new \App\mail\makemailTra($data));
        return redirect('contact');
    }

    public function search(Request $request)
    {
        $p = $request->q;
        if ($p == '') {
            $searchB = DB::table('book1')->limit(36)->get();
        } else {
            $searchB = DB::table('book1')
                ->where('name', 'like', "%$p%")
                ->get();
        }
        return view('page.search', ['searchBooks' => $searchB]);
    }
    public function showTopCat(Request $request)
    {
        $p = $request->q;
        if ($p == '0') {
            $showTopCat = DB::table('book1')->orderBy('brand', 'desc')->limit(8)->get();
            $category = DB::table('category')->get();
        } else {
            $showTopCat = DB::table('book1')->where('cat_id', '=', $p)->orderBy('brand', 'desc')->limit(8)->get();
            $category = DB::table('category')->get();
        }

        return view('page.showTopCat', ['showTopCat' => $showTopCat, 'category' => $category]);
    }
    public function index()
    {
        $author = DB::table('author')->limit(4)->get();
        $category = DB::table('category')->get();
        $book = DB::table('book1')->limit(36)->get();
        $cat = DB::table('book1')->orderBy('brand', 'desc')->limit(8)->get();
        return view('page.home', [
            'category' => $category,
            'book'     => $book,
            'cat'      => $cat,
            'author'   => $author,
        ]);
    }

    public function masterCategory($name)
    {
        $author = DB::table('author')->limit(4)->get();
        $category = DB::table('category')->get();
        $cat_title = DB::table('category')->where('name', '=', $name)->first();
        $book = DB::table('book1')->join('category', 'book1.cat_id', '=', 'category.id')
            ->select('book1.*')
            ->where('category.name', '=', $name)
            ->limit(36)->get();
        $cat = DB::table('book1')->orderBy('brand', 'desc')->limit(8)->get();
        return view('page.category', [
            'category' => $category,
            'book'      => $book,
            'cat'       => $cat,
            'author'    => $author,
            'cat_title' => $cat_title
        ]);
    }
    public function detailsBook($name)
    {
        $authorOne = DB::table('author')->join('book1', 'author.id', '=', 'book1.author_id')
            ->select('author.*')
            ->where('book1.name', '=', $name)
            ->first();
        $author = DB::table('author')->limit(4)->get();
        $category = DB::table('category')->get();
        $cat_title = DB::table('category')->where('name', '=', $name)->first();
        $book = DB::table('book1')->where('name', '=', $name)->first();
        $cat = DB::table('book1')->orderBy('brand', 'desc')->limit(8)->get();
        return view('page.details', [
            'category' => $category,
            'book'      => $book,
            'cat'       => $cat,
            'author'    => $author,
            'cat_title' => $cat_title,
            'authorOne' => $authorOne
        ]);
    }
    public function detail()
    {
        return view('page.detail');
    }
    public function sendEmail()
    {
        $user = auth()->user();
        Mail::to($user)->send(new MailNotify($user));

        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
        } else {
            return response()->success('Great! Successfully send in your mail');
        }
    }
    public function new()
    {
        $category = DB::table('category')->get();
        return view('page.new', ['category' => $category]);
    }
    public function changeAdmin($table, $step, Request $request)
    {
        $category = DB::table('category')->orderBy('id', 'desc')->get();
        $data = DB::table('category')->first();
        $author = DB::table('author')->orderBy('id', 'desc')->Paginate(6);
        $book = DB::table('book1')->orderBy('id', 'desc')->Paginate(6);
        return view('page.admin', [
            'category'  => $category,
            'book'      => $book,
            'author'    => $author,
            'table'     => $table,
            'step' => $step,
            'data' => $data
        ]);
    }
    public function intoForm($table)
    {
        $category = DB::table('category')->get();
        $data = DB::table('category')->where('id', '=', 20)->first();
        $author = DB::table('author')->Paginate(6);
        $authors = DB::table('author')->get();
        $book = DB::table('book1')->Paginate(6);
        if ($table == 'theloai') {
            return view('page.admin', [
                'category'  => $category,
                'book'      => $book,
                'author'    => $author,
                'authors'    => $authors,
                'table' => $table,
                'step' => 'add',
                'datas' => $data
            ]);
        }
        if ($table == 'cuonsach') {
            return view('page.adminBook', [
                'category'  => $category,
                'book'      => $book,
                'author'    => $author,
                'table' => $table,
                'step' => 'add',
                'datas' => $data,
                'authors' => $authors
            ]);
        }
    }
    public function add($table, Request $request)
    {
        if ($table == 'theloai') {
            $name = $request->category;
            DB::table('category')->insert([
                ['name' => $name],
            ]);
            return redirect('admin/theloai/showAll');
        } else if ($table == 'cuonsach') {
            $name = $request->cuonsach;
            $price = $request->price;
            $auth = $request->auth;
            $cat = $request->cat;
            $status = $request->status;

            $file = $request->hinh;
            $filename = $file->getClientOriginalName();
            $file->move('images', $file->getClientOriginalName());




            $smallDes = 'Văn chương dành cho tuổi mới lớn.';
            $intro = 'Với tác phẩm mới, Nguyễn Nhật Ánh tiếp tục chinh phục bạn đọc bằng câu chuyện cổ tích. Dù cổ điển hay hiện đại, tình yêu trong truyện của Nguyễn Nhật Ánh vẫn sẽ chiến thắng.';
            $review = 'Nấu một bữa ăn ngon cho gia đình là niềm hạnh phúc tuyệt vời của người mẹ, người vợ. Đôi khi, những món ăn chơi đơn giản sẽ là bí quyết tốt nhất giúp bạn có thể chuẩn bị mâm cơm đầy đù chất dinh dưỡng và ngon miệng mà không quá mất nhiều thời gian. Cuốn sách giới thiệu những món ăn thường gặp nhưng không phải ai cũng biết cách chế biến đúng cách: Bún mắm cá cơm, nộm mướp đắng, ngao xào lá quế, khoai môn cuộn tôm...
            ,Đã từ lâu, Nguyễn Nhật Ánh xác  cho mình một vị trí không thể thay thế ở dòng văn chương dành cho tuổi mới lớn.
            Những cảm xúc trong trẻo, hồn hậu gắn liền những ký ức tuổi thơ ở một vùng quê nghèo miền Trung hay những cảm xúc mưa nắng thất thường của tuổi mới lớn đều được ông nắm bắt tâm lý tài tình và viết ra với một văn phong giản dị mà thấu hiểu.
            ';
            DB::insert(
                'insert into book1 values (?, ? , ? , ?, ? , ?, ? , ? , ? ,  ? , ?)',
                [null, $name, '20', $filename, $price, $smallDes, $intro, $review, $status, $cat, $auth]
            );
            return redirect('admin/cuonsach/showAll');
        }
    }
    public function update($table, $id, Request $request)
    {
        $category = DB::table('category')->get();
        $author = DB::table('author')->Paginate(6);
        $book = DB::table('book1')->Paginate(6);
        if ($table == 'theloai') {
            $data = DB::table('category')->where('id', '=', $id)->first();
            return view('page.admin', [
                'category'  => $category,
                'book'      => $book,
                'author'    => $author,
                'table' => $table,
                'step' => 'update',
                'data' => $data
            ]);
        }
        if ($table == 'cuonsach') {
            $authors = DB::table('author')->get();
            $datas = DB::table('book1')->where('id', '=', $id)->first();
            return view('page.adminBook', [
                'category'  => $category,
                'book'      => $book,
                'authors'    => $authors,
                'author'    => $author,
                'table' => $table,
                'step' => 'update',
                'datas' => $datas,
            ]);
            
        }
    }
    public function updates($table, Request $request)
    {
        if ($table == 'theloai') {
            $name  = $request->name;
            $id  = $request->id;
            DB::table('category')
                ->where('id', '=', $id)
                ->update(['name' => $name]);
            return redirect('admin/theloai/showAll');
        } else if ($table = 'cuonsach') {
            $id  = $request->id;
            $name = $request->cuonsach;
            $price = $request->price;
            $auth = $request->auth;
            $cat = $request->cat;
            $status = $request->status;

            if($request->hasFile('hinh')){
            $file = $request->hinh;
            $filename = $file->getClientOriginalName();
            $uploadPath = public_path('/images'); // Thư mục upload
            $file->move($uploadPath, $file->getClientOriginalName());
            }
            else{
                $filename = $request->imagess;
            }
            $smallDes = 'Văn chương dành cho tuổi mới lớn.';
            $intro = 'Với tác phẩm mới, Nguyễn Nhật Ánh tiếp tục chinh phục bạn đọc bằng câu chuyện cổ tích. Dù cổ điển hay hiện đại, tình yêu trong truyện của Nguyễn Nhật Ánh vẫn sẽ chiến thắng.';
            $review = 'Nấu một bữa ăn ngon cho gia đình là niềm hạnh phúc tuyệt vời của người mẹ, người vợ. Đôi khi, những món ăn chơi đơn giản sẽ là bí quyết tốt nhất giúp bạn có thể chuẩn bị mâm cơm đầy đù chất dinh dưỡng và ngon miệng mà không quá mất nhiều thời gian. Cuốn sách giới thiệu những món ăn thường gặp nhưng không phải ai cũng biết cách chế biến đúng cách: Bún mắm cá cơm, nộm mướp đắng, ngao xào lá quế, khoai môn cuộn tôm...
            ,Đã từ lâu, Nguyễn Nhật Ánh xác  cho mình một vị trí không thể thay thế ở dòng văn chương dành cho tuổi mới lớn.
            Những cảm xúc trong trẻo, hồn hậu gắn liền những ký ức tuổi thơ ở một vùng quê nghèo miền Trung hay những cảm xúc mưa nắng thất thường của tuổi mới lớn đều được ông nắm bắt tâm lý tài tình và viết ra với một văn phong giản dị mà thấu hiểu.
            ';
            DB::table('book1')
                ->where('id', '=', $id)
                ->update([
                    'name' => $name,
                    'brand' => 20,
                    'image' => $filename,
                    'price' => $price,
                    'smallDes' => $smallDes,
                    'intro' => $intro,
                    'review' => $review,
                    'status' => $status,
                    'cat_id' => $cat,
                    'author_id' => $auth
                ]);
            return redirect('admin/cuonsach/showAll');
        }
    }
    public function delete($table, $id)
    {
        if ($table == 'theloai') {
            DB::table('category')->where('id', '=', $id)->delete();
            return redirect('admin/theloai/showAll');
        } else if ($table == 'cuonsach') {
            DB::table('book1')->where('id', '=', $id)->delete();
            return redirect('admin/cuonsach/showAll');
        }
    }
    public function indexs()
    {
        return view('file');
    }
    public function doUpload(Request $request)
    {
        $file = $request->filesTest;

        $file->move('public', $file->getClientOriginalName());
        // hàm sẽ trả về đường dẫn mới của file trên server nếu thành công
        // còn nếu không nó sẽ raise ra exception.
    }
}
