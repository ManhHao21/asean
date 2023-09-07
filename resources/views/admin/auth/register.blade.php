<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng kí</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset("Backend")}}/assets/images/favicon.ico" />
    <link rel="stylesheet" href="{{asset("Backend")}}/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="{{asset("Backend")}}/assets/css/backend.css%3Fv=1.0.0.css">
    <link rel="stylesheet"
        href="{{asset("Backend")}}/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="{{asset("Backend")}}/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="{{asset("Backend")}}/assets/vendor/remixicon/fonts/remixicon.css">  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-8">
                  <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-7 align-self-center">
                              <div class="p-3">
                                 <h2 class="mb-2">Đăng kí tài khoản</h2>
                                 @if (session('msg'))
                                 <div class="alert alert-success text-center">
                                     {{ session('msg') }}
                                 </div> @endif
                                 <form method="POST"
        action="{{ route('admin.post.register') }}">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <label for="name" class="form-label">Họ và tên</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror "
                id="name" >
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-lg-6">
            <label for="email" class="form-label">email</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror "
                id="email" >
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-lg-6">
            <label for="password" class="form-label">Mật khẩu</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror "
                id="password" >
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-lg-6">
            <label for="confilm_password" class="form-label">Nhập lại mật khẩu</label>
            <input type="password" name="confilm_password"
                class="form-control @error('confilm_password') is-invalid @enderror " id="confilm_password" >
            @error('confilm_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-lg-6">
            <label for="address" class="form-label">Địa chỉ</label>
            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror "
                id="address" >
            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        {{-- <div class="col-lg-6">
        <div class="floating-label form-group">
            <input class="floating-input form-control" type="password" placeholder=" ">
            <label>Confirm Password</label>
        </div>
    </div> --}}
        <div class="col-lg-12">
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">I agree with the terms of use</label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign Up</button>
    <p class="mt-3">
        Already have an Account <a href="{{route("admin.login")}}" class="text-primary">Sign In</a>
    </p>
    </form>
    </div>
    </div>
    <div class="col-lg-5 content-right">
        <img src="{{asset("Backend")}}/assets/images/login/01.png" class="img-fluid image-right" alt="">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>

    <!-- Backend Bundle JavaScript -->
    <script src="{{asset("Backend")}}/assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{asset("Backend")}}/assets/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{asset("Backend")}}/assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="{{asset("Backend")}}/assets/js/chart-custom.js"></script>

    <!-- app JavaScript -->
    <script src="{{asset("Backend")}}/assets/js/app.js"></script>
    </body>

</html>
