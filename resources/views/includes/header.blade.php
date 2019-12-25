 <header>    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="{{route('index')}}"><img src="/img/logo.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="{{route('cart')}}">Giỏ Hàng <!-- <span class="cart-amunt">$100</span> --> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('index') }}">Trang Chủ</a></li>
                        <li><a href="{{ route('shop') }}">Sản Phẩm</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                        <li><a href="#">Giới Thiệu</a></li>
                        <li><a href="{{route('registrantion')}}"> Đăng kí</a></li>
                      <!--   <li><a href="{{route('login')}}"><i class="fa fa-user"></i> Đăng nhập</a></li> -->
                        @if (Auth::check()) 
                        
                         <li><a href="{{route('logout')}}"><i class="fa fa-user"></i>Đăng xuất </a></li>
                         <li><a href="#">Xin chào: {{Auth::user()->name}}</a></li>
                        
                        @else 
                          <li><a href="{{route('login')}}"><i class="fa fa-user"></i> Đăng nhập</a></li>
                        @endif

                 
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
</header>