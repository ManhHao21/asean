@extends('admin.layout.layout')


@section('content')
    <div class="content-page">
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Thêm sản phẩm</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.post.update', $post->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Danh mục</label>
                                            <select name="category_id" class="selectpicker form-control" data-style="py-0">
                                                {{ getCategories($categories, old('parent_id')) }}
                                            </select>
                                            @error('category_id')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tên bài viết</label>
                                            <input type="text" name='name'
                                                class="form-control title @error('name') is-invalid @enderror"
                                                placeholder="Nhập tiêu đề bài viết" data-errors="Please Enter Name."
                                                value="{{ old('name', $post->title) }}">
                                            @error('name')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input type="text" name="slug"
                                                class="form-control slug @error('slug') is-invalid @enderror"
                                                placeholder="Enter Code" data-errors="Please Enter Code."
                                                value="{{ old('slug', $post->slug) }}">
                                            @error('slug')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class=" col-sm-12 mb-5 ">
                                        <label for="image" class="">Hình ảnh</label>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="file" name="image"
                                                    class="form-control  @error('image') is-invalid @enderror"
                                                    id="Image" accept="image/*" value="aaaaa">
                                                @error('image')
                                                    <span class="invalid-feedback " style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 image-review">
                                            <img id="previewImage"
                                                src="{{ old('image', asset('image/post') . '/' . $post->image) }}"
                                                alt="Preview Image" style="max-width: 100%; height: auto;">
                                            <span id="deleteImageButton" class="delete-button"><i class="fa fa-times"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                        @error('image')
                                            <span class="invalid-feedback " style="color: red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="description" class="col-sm-2 col-form-label">Mô tả</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control  @error('description') is-invalid @enderror" name="description"
                                                placeholder="Nhập Mô tả..." id="description">{{ old('description', $post->description) }}</textarea>
                                            @error('description')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="content" class="col-sm-2 col-form-label">Nội dung</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control  @error('content') is-invalid @enderror" name="content"
                                                placeholder="Nhập nội dung bài viết....." id="content">{{ old('content', $post->content) }}</textarea>
                                            @error('content')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <label>Tình trạng</label>
                                        <div class=" custom-switch ">
                                            <input type="checkbox" class="custom-control-input check" value="1"
                                                name="is_active" data-key="18" id="customSwitch0218" checked="">
                                            <label class="custom-control-label" for="customSwitch0218"></label>
                                        </div>
                                        @error('content')
                                            <span class="invalid-feedback " style="color: red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
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
        CKEDITOR.replace('content');
    </script>
@endsection
@section('style')
    <style>
        .image-review {
            position: relative;
            width: fit-content;
        }

        .delete-button {
            position: absolute;
            top: 0;
            right: 15px;
            padding: 4px;
            background-color: #ff0000;
            color: #fff;
            cursor: pointer;
        }
    </style>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#Image').change(function(event) {
                var input = event.target;
                var previewImage = $('#previewImage');
                var del = $('#deleteImageButton');

                var reader = new FileReader();
                reader.onload = function() {
                    previewImage.attr('src', reader.result);
                    previewImage.css('display', 'block');
                    del.css('display', 'block');
                };

                reader.readAsDataURL(input.files[0]);
            });

            $('#deleteImageButton').click(function() {
                var previewImage = $('#previewImage');
                var imagePreviewContainer = $('#imagePreviewContainer');
                var input = $('#Image');
                var del = $('#deleteImageButton');

                previewImage.attr('src', '#');
                previewImage.css('display', 'none');
                del.css('display', 'none');
                input.replaceWith(input.val('').clone(true));
            });
            var oldImage = "{{ $post->image }}";
            if (oldImage) {
                var inputImage = document.getElementById("Image");
                inputImage.value = oldImage;
            }
        });
    </script>
@endsection
