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
                            <form action="{{ route('admin.services.update', $services->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tên dịch vụ</label>
                                            <input type="text" name='title'
                                                class="form-control  @error('title') is-invalid @enderror"
                                                placeholder="Nhập tên dịch vụ" data-errors="Please Enter Name."
                                                value="{{ old('title', $services->title) }}">
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
                                                placeholder="Nhập mô tả" data-errors="Please Enter Code."
                                                value="{{ old('des', $services->description) }}" required>
                                            @error('des')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    @if ($listServices && isset($listServices[0]['title']) && isset($listServices[0]['des']))
                                        <div class="col-md-12">
                                            <label for="services" class="col-sm-2 col-form-label">Dịch vụ 1</label>
                                            <div class="form-group">
                                                <input type="text" name="name[]"
                                                    class="form-control  @error('name.*') is-invalid @enderror"
                                                    placeholder="Nhập tên dịch vụ" data-errors="Please Enter Code." required
                                                    value="{{ old('name', $listServices[0]['title']) }}">
                                                @error('name.*')
                                                    <span class="invalid-feedback " style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12">
                                                <textarea class="form-control  @error('content.*') is-invalid @enderror" name="content[]" id="services1">{{ old('content', $listServices[0]['des']) }}</textarea>
                                                @error('content.*')
                                                    <span class="invalid-feedback " style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    @endif
                                    @if ($listServices && isset($listServices[1]['title']) && isset($listServices[1]['des']))
                                        <div class="col-md-12">
                                            <label for="description" class="col-sm-2 col-form-label">Dịch vụ 2</label>
                                            <div class="form-group">
                                                <input type="text" name="name[]"
                                                    class="form-control  @error('name.*') is-invalid @enderror"
                                                    placeholder="Nhập tên dịch vụ" data-errors="Please Enter Code."
                                                    value="{{ old('name', $listServices[1]['title']) }}" required>
                                                @error('name.*')
                                                    <span class="invalid-feedback " style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12">
                                                <textarea class="form-control  @error('content.*') is-invalid @enderror" name="content[]" id="services2">{{ old('content', $listServices[1]['des']) }}</textarea>
                                                @error('content.*')
                                                    <span class="invalid-feedback " style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    @endif
                                    @if ($listServices && isset($listServices[2]['title']) && isset($listServices[2]['des']))
                                        <div class="col-md-12">
                                            <label for="description" class="col-sm-2 col-form-label">Dịch vụ 3</label>
                                            <div class="form-group">
                                                <input type="text" name="name[]"
                                                    class="form-control  @error('name.*') is-invalid @enderror"
                                                    placeholder="Nhập tên dịch vụ" data-errors="Please Enter Code."
                                                    value="{{ old('name', $listServices[2]['title']) }}" required>
                                                @error('name.*')
                                                    <span class="invalid-feedback " style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12">
                                                <textarea class="form-control  @error('content.*') is-invalid @enderror" name="content[]" id="services3">{{ old('content', $listServices[2]['des']) }}</textarea>
                                                @error('content.*')
                                                    <span class="invalid-feedback " style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    @endif
                                    @if ($listServices && isset($listServices[3]['title']) && isset($listServices[3]['des']))
                                        <div class="col-md-12">
                                            <label for="description" class="col-sm-2 col-form-label">Dịch vụ 4</label>
                                            <div class="form-group">
                                                <input type="text" name="name[]"
                                                    class="form-control  @error('name') is-invalid @enderror"
                                                    placeholder="Nhập tên dịch vụ" data-errors="Please Enter Code."
                                                    value="{{ old('name', $listServices[3]['title']) }}" required>
                                                @error('name')
                                                    <span class="invalid-feedback " style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12">
                                                <textarea class="form-control  @error('content[]') is-invalid @enderror" name="content[]" id="services4">{{ old('content', $listServices[3]['des']) }}</textarea>
                                                @error('content[]')
                                                    <span class="invalid-feedback " style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                                <button type="reset" class="btn btn-danger">Tạo mới</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('description');
    </script>
    <script>
        CKEDITOR.replace('services1');
        CKEDITOR.replace('services2');
        CKEDITOR.replace('services3');
        CKEDITOR.replace('services4');
    </script>
@endsection
