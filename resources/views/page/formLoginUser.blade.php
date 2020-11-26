
<div class="modal-content" style="background: none !important;border:none">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Đăng nhập</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{url('post-loginUser')}}" method="POST" id="logForm">
                                        {{ csrf_field() }}
                                        <p>sdsa</p>\
                                        pfds
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4" id="inputEmailAddress" name="email" type="email" placeholder="Địa chỉ Email" /> @if ($errors->has('email'))
                                            <span class="error">{{ $errors->first('email') }}</span> @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Mật khẩu</label>
                                            <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Nhập mật khẩu" /> @if ($errors->has('password'))
                                            <span class="error">{{ $errors->first('password') }}</span> @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                <label class="custom-control-label" for="rememberPasswordCheck">Nhớ mật khẩu
                                            </label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="#">Quên mật khẩu?</a>
                                            <button class="btn btn-primary" type="submit" >Đăng nhập</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a onclick="showRegister()" >Chưa có tài khoản? Đăng ký!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        {{-- ss --}}
    </div>
</div>
