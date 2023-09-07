@extends('admin.layout.layout')
@section('content')
    <div class="content-page">
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Cấu hình Sứ mệnh</h4>
                            </div>
                        </div>

                        @if (session('msg'))
                            <div class="alert alert-success  ml-5 mt-5" style="text-align: center">
                                {{ session('msg') }}
                            </div>
                        @endif
                        <div class="card-body">

                            <form action="{{ route('admin.option.postConfiguration') }}" method="post"
                                enctype="multipart/form-data" class="mb-5">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tiêu đề</label>
                                            <input type="text" name='title'
                                                class="form-control  @error('title') is-invalid @enderror"
                                                placeholder="Nhập tên dịch vụ" data-errors="Please Enter Name."
                                                @if (!empty($powers)) value="{{ old('title', $powers['data']['title']) }}" @endif>
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
                                                placeholder="Nhập mô tả"
                                                @if (!empty($powers)) value="{{ old('des', $powers['data']['des']) }}" @endif>
                                            @error('des')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <input type="file" name="image[]" class="form-control  "
                                                placeholder="Nhập mô tả" multiple id="image-power">
                                            @if (!empty($power))
                                                @error('image.*')
                                                    <span class="invalid-feedback " style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            @endif
                                            <div class="col-sm-12 image-review-thumb mr-5">
                                                @if (!empty($powers['data']['images']))
                                                    @foreach ($powers['data']['images'] as $image)
                                                        <div class=" image-review mr-5 mt-5">
                                                            <img id="previewImage" src="{{ asset($image) }}"
                                                                alt="Preview Image" style="max-width:200px; height: auto;">

                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @if (!empty($powers['power']))
                                        @foreach ($powers['power'] as $key => $item)
                                            <div class="col-md-12 power-container" data-key="{{ $key }}">
                                                <h1 for="services" class="col-sm-12 col-form-label">Sứ mệnh
                                                    {{ $key + 1 }}</h1>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Hình ảnh</label>
                                                        <input type="file" name="image-power[]"
                                                            class="form-control image-input @error('image-power.' . $key) is-invalid @enderror"
                                                            placeholder="Nhập mô tả">
                                                        <div class="col-sm-12 image-review1">
                                                            <div class="image-preview"><img
                                                                    src="{{ isset($item['image-power']) ?  asset($item['image-power']) : "" }}" alt=""
                                                                    width="200px" height="200px" style="object-fit: cover">

                                                            </div>
                                                            @error('image-power.' . $key)
                                                                <span class="invalid-feedback" style="color: red;"
                                                                    role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="name[]"
                                                            class="form-control @error('name.' . $key) is-invalid @enderror"
                                                            placeholder="Nhập tên dịch vụ"
                                                            value="{{ $item['name'] ?? '' }}">
                                                        @error('name.' . $key)
                                                            <span class="invalid-feedback mb-5" style="color: red;"
                                                                role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <textarea class="form-control @error('content.' . $key) is-invalid @enderror" name="content[]"
                                                            id="power{{ $key + 1 }}">{{ $item['content'] ?? '' }}

                                                        </textarea>
                                                        @error('content.' . $key)
                                                            <span class="invalid-feedback" style="color: red;" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-md-12 power-container" data-key="1">
                                            <h1 for="services" class="col-sm-12 col-form-label ">Sứ mệnh 1
                                            </h1>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <input type="file" name="image-power[]"
                                                        class="form-control image-input  @error('image-power.*') is-invalid @enderror"
                                                        placeholder="Nhập mô tả">
                                                    <div class="col-sm-12 image-review2">
                                                        <div class="image-preview"></div>

                                                    </div>
                                                    @error('image-power.*')
                                                        <span class="invalid-feedback " style="color: red;" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="name[]"
                                                    class="form-control  @error('name.*') is-invalid @enderror"
                                                    placeholder="Nhập tên dịch vụ">
                                                @error('name.*')
                                                    <span class="invalid-feedback mb-5" style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-sm-12">
                                                <textarea class="form-control @error('content.*') is-invalid @enderror" name="content[]" id="power1"></textarea>
                                                @error('content.*')
                                                    <span class="invalid-feedback" style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 power-container" data-key="2">
                                            <h1 for="services" class="col-sm-12 col-form-label ">Sứ mệnh 2
                                            </h1>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <input type="file" name="image-power[]"
                                                        class="form-control image-input  @error('image-power.*') is-invalid @enderror"
                                                        placeholder="Nhập mô tả">
                                                    <div class="col-sm-12 image-review2">
                                                        <div class="image-preview"></div>

                                                    </div>

                                                    @error('image-power.*')
                                                        <span class="invalid-feedback " style="color: red;" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="name[]"
                                                    class="form-control  @error('name.*') is-invalid @enderror"
                                                    placeholder="Nhập tên dịch vụ">
                                                @error('name.*')
                                                    <span class="invalid-feedback mb-5" style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-sm-12">
                                                <textarea class="form-control @error('content.*') is-invalid @enderror" name="content[]" id="power2"></textarea>
                                                @error('content.*')
                                                    <span class="invalid-feedback" style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 power-container" data-key="3">
                                            <h1 for="services" class="col-sm-12 col-form-label ">Sứ mệnh 3
                                            </h1>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <input type="file" name="image-power[]"
                                                        class="form-control image-input  @error('image-power.*') is-invalid @enderror"
                                                        placeholder="Nhập mô tả">
                                                    <div class="col-sm-12 image-review3">
                                                        <div class="image-preview"></div>

                                                    </div>

                                                    @error('image-power.*')
                                                        <span class="invalid-feedback " style="color: red;" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="name[]"
                                                    class="form-control image-input @error('name.*') is-invalid @enderror"
                                                    placeholder="Nhập tên dịch vụ">
                                                @error('name.*')
                                                    <span class="invalid-feedback mb-5" style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-sm-12">
                                                <textarea class="form-control @error('content.*') is-invalid @enderror" name="content[]" id="power3"></textarea>
                                                @error('content.*')
                                                    <span class="invalid-feedback" style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    @endif

                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Thêm
                                    Mới</button>
                                <button type="submit" class="btn btn-danger mr-2" id="deleteButton">Xóa</button>
                            </form>
                            @if (!empty($optionPower))
                                @if ($optionPower)
                                    <form id="deleteForm"
                                        action="{{ route('admin.option.deletePower', $optionPower->key) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // Gán CKEditor cho các phần tử có sẵn
            $("textarea.form-control").each(function(index) {
                var textareaId = $(this).attr("id");
                CKEDITOR.replace(textareaId);
            });
            // Xử lý sự kiện xóa bài viết
            $("#deleteButton").on("click", function(e) {
                e.preventDefault();
                if (confirm("Bạn có chắc muốn xóa bài viết này không?")) {
                    $("#deleteForm").submit();
                }
            });

     
        });
    </script>
@endsection

@section('style')
    <style>
        .image-review {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            width: fit-content;
            position: relative;
        }

        .image-review1 {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            width: fit-content;
            margin-top: 5px;

        }

        .col-sm-12 {
            margin-bottom: 5px;
        }

        .image-container {
            position: relative;
        }

        .delete-button {
            position: absolute;
            top: 0;
            right: 0;
            padding: 4px;
            background-color: #ff0000;
            color: #fff;
            cursor: pointer;
        }

        .image-review-thumb {
            display: flex;
            justify-content: start;
            width: fit-content;
        }
    </style>
@endsection
