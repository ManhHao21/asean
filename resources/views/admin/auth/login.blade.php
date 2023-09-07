<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng nhập</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset("Backend")}}/assets/images/favicon.ico" />
    <link rel="stylesheet" href="{{asset("Backend")}}/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="{{asset("Backend")}}/assets/css/backend.css%3Fv=1.0.0.css">
    <link rel="stylesheet"
        href="{{asset("Backend")}}/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet"
        href="{{asset("Backend")}}/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset("Backend")}}/assets/vendor/remixicon/fonts/remixicon.css">
</head>

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
                                            <h2 class="mb-2">Sign In</h2>
                                            <p>Login to stay connected.</p>
                                            @if (session('msg'))
                                            <div class="alert alert-success text-center">
                                                {{ session('msg') }}
                                            </div> @endif
                                            <form action="{{ route('admin.post.login') }}"
        method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <label for="yourUsername" class="form-label">Email</label>
            <div class="input-group has-validation">
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror "
                    id="yourUsername" required>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <label for="yourPassword" class="form-label">Password</label>
            <input type="password" name="password" class="form-control @error('email') is-invalid @enderror "
                id="yourPassword" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


    </div>
    <button type="submit" class="btn btn-primary">Sign In</button>
    <p class="mt-3">
        Create an Account <a href="{{ route('admin.register') }}" class="text-primary">Sign Up</a>
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
