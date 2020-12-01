<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" contenst="" />
    {{-- <link rel="stylesheet" href="/css/loginAdmin.css"> --}}
    <link rel="stylesheet" href="/css/admin.css">
    <title>Login Form - XpertPhp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
    
    <div class="modal-content" style="background: none !important;border:none; maggin-top:-100px;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Tạo tài khoản</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{url('post-registerUser')}}" method="POST" id="regForm">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">Tên đăng nhập</label>
                                                <input class="form-control py-4" id="inputFirstName" type="text" name="name" placeholder="Nhập tên" /> @if ($errors->has('name'))
                                                <span class="error">{{ $errors->first('name') }}</span> @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email" placeholder="Địa chỉ Email" /> @if ($errors->has('email'))
                                                <span class="error">{{ $errors->first('email') }}</span> @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Mật khẩu</label>
                                                <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder=" Nhập mât khẩu" /> @if ($errors->has('password'))
                                                <span class="error">{{ $errors->first('password') }}</span> @endif
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" type="submit">Tạo </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="/loginUser">Bạn đã có tài khoản? Đi đến Đăng nhập</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>