@extends('admin.layout.layout')
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
                            <form method="post" action="{{ route('admin.option.PostCustommer') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Số lượng reivew</label>
                                            <div class="form-outline">
                                                <input type="number" id="typeNumber" class="form-control"
                                                    placeholder="chọn số lượng banner" name="numberBanner" min="0"
                                                    max="{{ $countNumber }}"
                                                    value="@php echo isset($number) ?
                                                 $number : "" @endphp" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Gửi đi</button>
                                <button type="submit" class="btn btn-danger mr-2" id="deleteButton">Xóa</button>
                            </form>
                            @if (!empty($sliderBannerOld))
                            @if ($sliderBannerOld)
                                <form id="deleteForm"
                                    action="{{ route('admin.option.deletePower', $sliderBannerOld->key) }}"
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