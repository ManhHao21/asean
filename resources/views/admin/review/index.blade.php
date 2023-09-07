@php
    use Illuminate\Support\Str;
@endphp
@extends('admin.layout.layout');

@section('content')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>

                        </div>
                        <a href="{{ route('admin.review.create') }}" class="btn btn-primary add-list"><i
                                class="las la-plus mr-3"></i>Thêm video</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive rounded mb-3">
                        @if (session('msg'))
                            <div class="alert alert-success  ml-5 mt-5" style="text-align: center">
                                {{ session('msg') }}
                            </div>
                        @endif
                        <table class="data-table table mb-0 tbl-server-info">
                            <thead class="bg-white text-uppercase">
                                <tr class="ligth ligth-data">
                                    <th>stt</th>
                                    <th>Tên</th>
                                    <th width="30%">Hình ảnh</th>
                                    <th>Chức danh</th>
                                    <th>feeback</th>
                                    <th>Thời gian</th>
                                    <th>Tình trạng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="ligth-body">
                                @foreach ($reviews as $key => $review)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>

                                        <td>{{ $review->name }}</td>
                                        <td><img src="{{ asset('image/review') . '/' . $review->image }}" alt=""
                                                srcset="" width="50px" height="50px"></td>
                                        <td>{{ $review->position }}</td>
                                        <td>{{ $review->feedback }}</td>
                                        <td>{{ $review->created_at }}</td>
                                        <td>
                                            <meta name="csrf-token" content="{{ csrf_token() }}" />
                                            <div class=" custom-switch ">
                                                <input type="checkbox" class="custom-control-input check review"
                                                    name="status" data-key="{{ $review->id }}"
                                                    id="customSwitch02{{ $review->id }}"
                                                    @if ($review->is_active == 1) checked @endif>
                                                <label class="custom-control-label"
                                                    for="customSwitch02{{ $review->id }}"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="Edit"
                                                    href="{{ route('admin.review.edit', $review->id) }}"><i
                                                        class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <form action="{{ route('admin.review.destroy', $review->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="badge bg-warning mr-2" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        onclick="return confirm('Bạn có chắc muốn xóa bài viết này không?')"
                                                        data-original-title="Delete"><i class="fa fa-trash"
                                                            aria-hidden="true"></i></button>
                                                </form>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>
    @endsection
