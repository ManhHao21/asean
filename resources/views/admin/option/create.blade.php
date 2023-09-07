@extends('admin.layout.layout');
@section('content')
    <div class="content-page">
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session('msg'))
                                <div class="alert alert-success mt-5 col-sm-12" style="text-align: center">
                                    {{ session('msg') }}
                                </div>
                            @endif

                            @error('category_ids')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <form method="post" action="{{ route('admin.option.getoption') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Danh mục</label>
                                            <div>
                                                @if (!empty($categories))
                                                    @foreach ($categories as $category)
                                                        @php
                                                            if (!empty($keyValue) && isset($keyValue)) {
                                                                $isChecked = in_array($category->id, $keyValue['cate']);
                                                            }
                                                        @endphp

                                                        <label for="{{ $category->name }}"
                                                            class="ml-5 checkbox-inline mr-2 ">
                                                            <input type="checkbox" name="category_ids[]"
                                                                value="{{ $category->id }}"
                                                                class="form-check-input @error('category_ids') is-invalid @enderror"
                                                                @if (isset($isChecked) && $isChecked == 1) checked @endif
                                                                id="{{ $category->name }}">
                                                            {{ $category->name }}
                                                        </label>
                                                    @endforeach
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Gửi đi</button>
                                <button type="submit" class="btn btn-danger mr-2" id="deleteButton">Xóa</button>
                            </form>
                            @if (!empty($optionPost))
                                @if ($optionPost)
                                    <form id="deleteForm" action="{{ route('admin.option.deletePower', $optionPost->key) }}"
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
@section('styles')
    <style>
        .error {
            display: block !important;
        }
    </style>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("#deleteButton").on("click", function(e) {
                e.preventDefault();

                if (confirm("Bạn có chắc muốn xóa bài viết này không?")) {
                    $("#deleteForm").submit();
                }
            });
        });
    </script>
@endsection
