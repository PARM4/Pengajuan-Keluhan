<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
    <div class="card-header text-center">
        <a href="{{asset('adminlte/index2.html')}}" class="h1"><b>Buat</b>Akun</a>
    </div>
    <div class="card card-outline card-danger">
    @if (session('failed'))
        <div class="alert alert-danger">{{session('failed')}}</div>
    @endif
    <div class="card-body">
      <p class="login-box-msg">Form Register</p>

      <form action="/register" method="post">
        @csrf
        @error('name')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('email')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('password')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" id="password">
          <div class="input-group-append show-password">
            <div class="input-group-text">
              <span class="fas fa-lock" id="password-lock"></span>
            </div>
          </div>
        </div>
        @error('confirm_password')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <div class="input-group mb-3">
          <input type="password" name="confirm_password" class="form-control" placeholder="Confirmation Password" id="confirm-password">
          <div class="input-group-append show-confirm-password">
            <div class="input-group-text">
              <span class="fas fa-lock" id="confirm-password-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-8">
            
            </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-danger btn-block">Register</button>
          </div>
          
          <!-- /.col -->
        </div>
      </form>
      <div></div>
      {{-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> --}}
      <!-- /.social-auth-links -->

      <p class="mb-1">
        Sudah Punya akun?
      </p>
      <p class="mb-0">
        <a href="/login" class="text-center">Login Sekarang</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>

<script>
    // $(.show-password).on('click',function(){
    //     if($(#password).attr('type')=='password'){
    //         $(#password).attr('type','text');
    //         $(#password-lock).attr('fas fa-unlock','text');
    //     }else{
    //         $(#password).attr('type','password');
    //         $(#password-lock).attr('fas fa-lock','text');
    //     }

    // })
    $('.show-password').on('click', function () {

        let password = $('#password');
        let icon = $('#password-lock');

        if (password.attr('type') === 'password') {
            password.attr('type', 'text');
            icon.removeClass('fa-lock').addClass('fa-unlock');
        } else {
            password.attr('type', 'password');
            icon.removeClass('fa-unlock').addClass('fa-lock');
        }

    });
    $('.show-confirm-password').on('click', function () {

        let password = $('#confirm-password');
        let icon = $('#confirm-password-lock');

        if (password.attr('type') === 'password') {
            password.attr('type', 'text');
            icon.removeClass('fa-lock').addClass('fa-unlock');
        } else {
            password.attr('type', 'password');
            icon.removeClass('fa-unlock').addClass('fa-lock');
        }

    });
</script>
</body>
</html>
