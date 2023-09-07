@extends('admin.layout.layout')

@section('content')
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-primary add-list"><i
                                class="las la-plus mr-3"></i>Thêm tài khoản</a>
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
                                    <th>Email</th>
                                    <th>Phone No.</th>
                                    <th>Country</th>
                                    <th>Quyền</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="ligth-body">
                                @foreach ($users as $key => $user)
                                    @if (Auth::user()->id != $user->id)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>

                                                <div class="badge badge-warning">
                                                    {{ $user->is_admin == 0 ? 'Người dùng' : 'Admin' }}</div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center list-action">
                                                   
                                                    <a class="badge bg-success mr-2" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit"
                                                        href="{{ route('admin.user.edit', $user->id) }}"><i
                                                            class="fa fa-pencil" aria-hidden="true"></i></a>

                                                    <form action="{{ route('admin.user.destroy', $user->id) }}"
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
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        {{$users->links()}}
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>
    @endsection
