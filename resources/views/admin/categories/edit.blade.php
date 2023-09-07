@extends('admin.layout.layout')


@section('content')
    <div class="content-page">
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Thêm người dùng</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text"
                                                class="form-control title @error('name') is-invalid @enderror"
                                                name="name" placeholder="Name"
                                                value="{{ old('name') ?? $category->name }}">
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
                                            <input type="text"
                                                class="form-control slug @error('slug') is-invalid @enderror" name="slug"
                                                placeholder="slug..." value="{{ old('slug') ?? $category->slug }} ">
                                            @error('slug')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Cha</label>
                                            <select name="parent_id"
                                                class="selectpicker form-control @error('parent_id') is-invalid @enderror"
                                                data-style="py-0">
                                                <option value="0">Không</option>
                                                {{ getCategories($categories, old('parent_id')) ?? $category->id }}

                                            </select> @error('parent_id')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div @endsection
