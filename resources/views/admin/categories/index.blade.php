@extends('admin.layout.layout')


@section('content')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary add-list"><i
                            class="las la-plus mr-3"></i>Thêm danh mục</a>
                </div>
                <div class="col-lg-12">
                    @if (session('msg'))
                        <div class="alert alert-success  ml-5 mt-5" style="text-align: center">
                            {{ session('msg') }}
                        </div>
                    @endif
                    <table class="data-table table mb-0 ">
                        <thead class="bg-white text-uppercase">
                            <tr class="ligth ligth-data">
                                <th>
                                    <div class="checkbox d-inline-block">
                                        <input type="checkbox" class="checkbox-input" id="checkbox1">
                                        <label for="checkbox1" class="mb-0"></label>
                                    </div>
                                </th>
                                <th>Tên</th>
                                <th>Link</th>
                                <th>Thời gian</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="ligth-body">
                            @foreach ($categories as $key => $parentCategory)
                                <tr>
                                    <td>
                                        {{ $key + 1 }}
                                    </td>
                                    <td>{{ $parentCategory->name }}</td>
                                    <td>{{ $parentCategory->slug }}</td>
                                    <td>{{ $parentCategory->created_at }}</td>
                                    <td>
                                        <div class="d-flex align-items-center list-action">
                                            <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="Edit"
                                                href="{{ route('admin.categories.edit', $parentCategory->id) }}"><i
                                                    class="fa fa-pencil" aria-hidden="true"></i></a>

                                            <form action="{{ route('admin.categories.destroy', $parentCategory->id) }}"
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
                                @foreach ($childCategories->where('parent_id', $parentCategory->id) as $key => $childCategory)
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>--{{ $childCategory->name }}</td>
                                        <td>{{ $childCategory->slug }}</td>
                                        <td>{{ $childCategory->created_at }}</td>
                                        <td>
                                            <div class="d-flex align-items-center list-action">
                                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top"
                                                    title="" data-original-title="Edit"
                                                    href="{{ route('admin.categories.edit', $childCategory->id) }}"><i
                                                        class="fa fa-pencil" aria-hidden="true"></i></a>

                                                <form action="{{ route('admin.categories.destroy', $childCategory->id) }}"
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
