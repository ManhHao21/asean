@extends('admin.layout.layout')

@section('content')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>

                        </div>
                        <a href="{{ route('admin.slider.create') }}" class="btn btn-primary add-list"><i
                                class="las la-plus mr-3"></i>Thêm slider</a>
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
                                    <th>
                                        <div class="checkbox d-inline-block">
                                            <input type="checkbox" class="checkbox-input" id="checkbox1">
                                            <label for="checkbox1" class="mb-0"></label>
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Mô tả</th>
                                    <th>Tình trạng</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="ligth-body">
                                @foreach ($sliders as $key => $slider)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        <td>{{ $slider->name }}</td>
                                        <td>{{ $slider->description }}</td>
                                        <td>
                                            <meta name="csrf-token" content="{{ csrf_token() }}" />
                                            <div class=" custom-switch ">
                                                <input type="checkbox" class="custom-control-input slider check"
                                                    name="status" data-key="{{ $slider->id }}"
                                                    id="customSwitch02{{ $slider->id }}"
                                                    @if ($slider->status == 1) checked @endif>
                                                <label class="custom-control-label"
                                                    for="customSwitch02{{ $slider->id }}"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="Edit"
                                                    href="{{ route('admin.slider.edit', $slider->id) }}"><i
                                                        class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <form action="{{ route('admin.slider.destroy', $slider->id) }}"
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
                        {{ $sliders->links() }}
                    </div>
                </div>
            </div>
        </div>
    @endsection
