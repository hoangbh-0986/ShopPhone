<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng kí</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <link href="/css/registrantion.css" rel="stylesheet" type="text/css" />
    <link href="/css/fontawesome-all.css" rel="stylesheet" />
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

</head>


<body>
       <div class=" w3l-login-form">
        <h2>Đăng kí ngay</h2>
        <form action="{{ route('registrantion') }}" method="POST">
            {{ csrf_field() }}

    
            <div class=" w3l-form-group">
                <label>Họ tên:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="họ tên"  name="name" />
                      @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                    @endif
                </div>
            </div>

              <div class=" w3l-form-group">
                <label>Đia chỉ:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="địa chỉ" name="add" />
                      @if ($errors->has('add'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('add') }}</strong>
                                        </span>
                    @endif
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Email:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="email"  name="email" />
                      @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                    @endif
                </div>
            </div>

             <div class=" w3l-form-group">
                <label>Số điện thoại:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="số điện thoại"  name="phonenumber" />
                      @if ($errors->has('phonenumber'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phonenumber') }}</strong>
                                        </span>
                    @endif
                </div>
            </div>
  
            <div class=" w3l-form-group">
                <label>Mật khẩu:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="password" class="form-control" placeholder="mật khẩu"  name="password" />
                      @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                    @endif
                </div>
            </div>


          <div class=" w3l-form-group">
                <label>Nhập lại mật khẩu:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="password" class="form-control" placeholder="nhập lại mật khẩu"  name="enterpassword" />
                      @if ($errors->has('enterpassword'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('enterpassword') }}</strong>
                                        </span>
                    @endif
                </div>
            </div>
            <button type="submit">Đăng kí</button>
        </form>
     <!--    <p class=" w3l-register-p">Chưa có tài khoản?<a href="#" class="register"> Đăng kí</a></p> -->
    </div>
</body>

</html>