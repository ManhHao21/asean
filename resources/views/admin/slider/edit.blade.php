@extends('admin.layout.layout')


@section('content')
    <div class="content-page">
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-body">
                            <form action="{{ route('admin.slider.update', $slider->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" placeholder="Name" value="{{ old('name', $slider->name) }}">
                                            <div class="help-block with-errors"></div> @error('name')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text"
                                                class="form-control @error('description') is-invalid @enderror"
                                                name="description" placeholder="description "
                                                value="{{ old('description', $slider->description) }}">
                                            <div class="help-block with-errors"></div> @error('description')
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
                                                src="{{ old('image', asset('image/slider') . '/' . $slider->image) }}"
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
                                    <div class="col-md-12">
                                        <label>Tình trạng</label>
                                        <div class="input-group-text">
                                            <div class="custom-control custom-switch custom-switch-color">
                                                <input type="checkbox" class="custom-control-input" value="1"
                                                    name="status" id="customSwitch02" value="">

                                                <label class="custom-control-label" for="customSwitch02"></label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div @endsection @section('style') <style>
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
                var oldImage = "{{ $slider->image }}";
                if (oldImage) {
                    var inputImage = document.getElementById("Image");
                    inputImage.value = oldImage;
                }
            });
        </script>
    @endsection
