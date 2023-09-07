@extends('admin.layout.layout');
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
                            <form action="{{ route('admin.review.update', $editReview->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tên người dùng</label>
                                            <input type="text" name='name'
                                                class="form-control  @error('name') is-invalid @enderror"
                                                placeholder="Nhập tiêu đề bài viết" data-errors="Please Enter Name."
                                                value="{{ old('name', $editReview->name) }}">
                                            @error('name')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Chức danh</label>
                                            <input type="text" name='position'
                                                class="form-control  @error('position') is-invalid @enderror"
                                                placeholder="Nhập tiêu đề bài viết" data-errors="slug..."
                                                value="{{ old('position', $editReview->position) }}">
                                            @error('position')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review" class="col-sm-2 col-form-label">review</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control  @error('feedback') is-invalid @enderror" name="feedback"
                                                placeholder="Nhập giá trị dinh dưỡng sản phẩm" id="review">{{ old('feedback', $editReview->feedback) }}</textarea>
                                            @error('feedback')
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
                                                src="{{ old('image', asset('image/review') . '/' . $editReview->image) }}"
                                                alt="Preview Image" style="max-width:200px; height: auto;">
                                            <span id="deleteImageButton" class="delete-button"><i class="fa fa-times"
                                                    aria-hidden="true"></i></span>
                                        </div>
                                        @error('image')
                                            <span class="invalid-feedback " style="color: red;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                                <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
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
            var oldImage = "{{ $editReview->image }}";
            if (oldImage) {
                var inputImage = document.getElementById("Image");
                inputImage.value = oldImage;
            }
        });
    </script>
@endsection
