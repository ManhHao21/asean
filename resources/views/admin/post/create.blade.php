@extends('admin.layout.layout')


@section('content')
  
    <div class="content-page">
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Thêm bài viết</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
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
                                                placeholder="Nhập tiêu đề bài viết" data-errors="Please Enter Name.">
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
                                                class="form-control slug @error('name') is-invalid @enderror"
                                                placeholder="Nhập slug" data-errors="Please Enter Code.">
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
                                                    id="Image" accept="image/*" value="">
                                                @error('image')
                                                    <span class="invalid-feedback " style="color: red;" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12 image-review">
                                            <img id="previewImage" src="#" alt="Preview Image"
                                                style="display: none; max-width: 200px; height: 200px;">
                                            <span id="deleteImageButton" class="delete-button" style="display: none;"><i
                                                    class="fa fa-times" aria-hidden="true"></i></span>
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
                                                placeholder="Nhập giá trị dinh dưỡng sản phẩm" id="description"></textarea>
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
                                                placeholder="Nhập giá trị dinh dưỡng sản phẩm" id="content"></textarea>
                                            @error('content')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-5">
                                        <label>Tình trạng</label>

                                        <div class=" custom-switch">
                                            <input type="checkbox" class="custom-control-input check" value="1"
                                                name="is_active" id="customSwitch02">
                                            <label class="custom-control-label" for="customSwitch02"></label>
                                        </div>
                                        @error('content')
                                            <span class="invalid-feedback " style="color: red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Thêm mới</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>
    </div>
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
        CKEDITOR.replace('description');
    </script>
    <script>
        CKEDITOR.replace('content');
    </script>
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
        });
    </script>
@endsection

@endsection
