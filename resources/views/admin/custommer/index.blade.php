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
                        <a href="{{ route('admin.custommer.create') }}" class="btn btn-primary add-list"><i
                                class="las la-plus mr-3"></i>Thêm khách hàng</a>
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
                                    <th width="30%">Hình ảnh</th>
                                    <th>link</th>
                                    <th>Tình trạng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="ligth-body">
                                @foreach ($custommers as $key => $custommer)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        <td><img src="{{ asset('image/custommer') . '/' . $custommer->image }}"
                                                alt="" srcset="" width="50px" height="50px"></td>
                                        <td>{{ $custommer->link }}</td>
                                        <td>
                                            <meta name="csrf-token" content="{{ csrf_token() }}" />
                                            <div class=" custom-switch ">
                                                <input type="checkbox" class="custom-control-input check custommer"
                                                    name="status" data-key="{{ $custommer->id }}"
                                                    id="customSwitch02{{ $custommer->id }}"
                                                    @if ($custommer->is_active == 1) checked @endif>
                                                <label class="custom-control-label"
                                                    for="customSwitch02{{ $custommer->id }}"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="Edit"
                                                    href="{{ route('admin.custommer.edit', $custommer->id) }}"><i
                                                        class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <form action="{{ route('admin.custommer.destroy', $custommer->id) }}"
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
