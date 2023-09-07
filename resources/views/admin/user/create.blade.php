@extends('admin.layout.layout')

@section('content')

    <div class="content-page">
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                      
                        <div class="card-body">
                            <form action="{{ route('admin.user.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                name="name" placeholder="Enter Name" >
                                            <div class="help-block with-errors"></div> @error('name')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number *</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                name="phone" placeholder="Enter Phone No" >
                                            <div class="help-block with-errors"></div> @error('phone')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                name="email" placeholder="Enter Email" >
                                            <div class="help-block with-errors"></div> @error('email')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                placeholder="Enter Password" >
                                            <div class="help-block with-errors"></div> @error('password')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password"
                                                class="form-control @error('confirm-password') is-invalid @enderror"
                                                name="confirm-password" placeholder="Enter Confirm Password" >
                                            <div class="help-block with-errors"></div> @error('confirm-password')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Quê quán</label>
                                            <input type="text"
                                                class="form-control @error('address') is-invalid @enderror" name="address"
                                                placeholder="Enter Confirm Password" >
                                            <div class="help-block with-errors"></div> @error('address')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6    ">
                                        <div class="form-group">
                                            <label>Status *</label>
                                            <select name="is_admin"
                                                class="selectpicker form-control @error('is_admin') is-invalid @enderror"
                                                data-style="py-0">
                                                <option value="1 ">Admin</option>
                                                <option value="0">Người dùng</option>
                                            </select> @error('is_admin')
                                                <span class="invalid-feedback " style="color: red;" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Thêm mới</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div @endsection
