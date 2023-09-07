@extends('admin.layout.layout')


@section('content')
    <div class="content-page">
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Thêm dịch vụ</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tên dịch vụ</label>
                                            <input type="text" name='title'
                                                class="form-control  @error('title') is-invalid @enderror"
                                                placeholder="Nhập tên dịch vụ" data-errors="Please Enter Name.">
                                            @error('title')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mô tả</label>
                                            <input type="text" name="des"
                                                class="form-control  @error('des') is-invalid @enderror"
                                                placeholder="Nhập mô tả" >
                                            @error('des')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="services" class="col-sm-2 col-form-label">Dịch vụ 1</label>
                                        <div class="form-group">
                                            <input type="text" name="name[]"
                                                class="form-control @error('name.*') is-invalid @enderror"
                                                placeholder="Nhập tên dịch vụ">
                                            @error('name.*')
                                                <span class="invalid-feedback mb-5" style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-12">
                                            <textarea class="form-control @error('content.*') is-invalid @enderror" name="content[]" id="services1"></textarea>
                                            @error('content.*')
                                                <span class="invalid-feedback" style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="services" class="col-sm-2 col-form-label">Dịch vụ 2</label>
                                        <div class="form-group">
                                            <input type="text" name="name[]"
                                                class="form-control @error('name.*') is-invalid @enderror"
                                                placeholder="Nhập tên dịch vụ">
                                            @error('name.*')
                                                <span class="invalid-feedback" style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-12">
                                            <textarea class="form-control @error('content.*') is-invalid @enderror" name="content[]" id="services2"></textarea>
                                            @error('content.*')
                                                <span class="invalid-feedback" style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="col-md-12">
                                        <label for="services" class="col-sm-2 col-form-label">Dịch vụ 3</label>
                                        <div class="form-group">
                                            <input type="text" name="name[]"
                                                class="form-control @error('name.*') is-invalid @enderror"
                                                placeholder="Nhập tên dịch vụ">
                                            @error('name.*')
                                                <span class="invalid-feedback" style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-12">
                                            <textarea class="form-control @error('content.*') is-invalid @enderror" name="content[]" id="services3"></textarea>
                                            @error('content.*')
                                                <span class="invalid-feedback" style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                    </div>
                                    <div class="col-md-12">
                                        <label for="services" class="col-sm-2 col-form-label">Dịch vụ 4</label>
                                        <div class="form-group">
                                            <input type="text" name="name[]"
                                                class="form-control @error('name.*') is-invalid @enderror"
                                                placeholder="Nhập tên dịch vụ">
                                            @error('name.*')
                                                <span class="invalid-feedback" style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-12">
                                            <textarea class="form-control @error('content.*') is-invalid @enderror" name="content[]" id="services4"></textarea>
                                            @error('content.*')
                                                <span class="invalid-feedback" style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Thêm mới</button>
                                <button type="reset" class="btn btn-danger">Tạo mới</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('services1');
        CKEDITOR.replace('services2');
        CKEDITOR.replace('services3');
        CKEDITOR.replace('services4');
    </script>
@endsection
