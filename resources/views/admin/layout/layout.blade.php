<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('Backend') }}/assets/images/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('Backend') }}/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="{{ asset('Backend') }}/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <!-- Thêm liên kết đến Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    @yield('style')
</head>

<body class="  ">
    <div class="wrapper">
        @include('admin.block.sidebar')
        @include('admin.block.topnav')
        @yield('content')
    </div>
    <!-- Wrapper End-->
    @include('admin.block.footer')
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('Backend') }}/assets/js/backend-bundle.min.js"></script>
    <!-- app JavaScript -->
    @yield('script')
    <script src="{{ asset('Backend') }}/assets/js/main.js"></script>
    <script src="{{ asset('Backend') }}/assets/js/scripts.js"></script>
    <script src="{{ asset('Backend') }}/assets/js/post.js"></script>
    <style>
        .dataTables_info,
        .dataTables_paginate {
            display: none;
        }

        .data-table .badge {
            border: none;
        }
    </style>
</body>
</html>
