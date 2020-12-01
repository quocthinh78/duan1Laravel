<header id="header">
    <nav class="navbar navbar-expand-lg  navbar-light fixed-top navbar-white">
        <div class="container">
            <a class="navbar-brand nav-image" href="#">
                <img src="../images/logo.png" alt="" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu" id="navbarNavAltMarkup">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Thể loại</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach ($category as $cat)
                            <a class="dropdown-item" href="/category-{{$cat->name}}">{{$cat->name}}</a> @endforeach
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Thông tin</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/contact">Liên hệ</a>
                    </li>
                    <li class="nav-item ml-5">
                        <a class="nav-link" href="/loginUser">
                            <i style="font-size:16px;" class="fas fa-boder fa-user">@if(Session::has('UserSesion') != null) {{Session::get('UserSesion')->name}} @endif</i>
                        </a>
                    </li>

                    <li class="nav-item  ml-1">
                        <a class="nav-link" logout href="{{url('logoutUser')}}"><i class=" fa-boder fas fa-sign-out-alt"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cart">
                            <i class="fas fa-cart-arrow-down"></i>
                            <span id="quanty-nav">
                                @if(Session::has('Cart') != null)
                                {{Session::get('Cart')->totalQuanty}}
                                @else 0
                                @endif
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="modal fade" id="loginUsers" role="users">
    <div class="modal-dialog" id="loginUser">

        <!-- Modal content-->

    </div>
</div>



<style>
    #quanty-nav {
        margin-left: -5px;
        padding: 2px 5px;
        background-color: #e33a3a;
        border-radius: 50%;
    }
</style>