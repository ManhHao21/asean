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

                            @error('category_ids')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <form method="post" action="">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>chọn view</label>
                                            <div class="dropdown bootstrap-select form-control"><select name="parent_id"
                                                    class="selectpicker form-control" data-style="py-0">
                                                    <option value="0">Không</option>
                                                    @foreach ($names as $name)
                                                        <option value="{{ $name->id }}">{{ $name->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Gửi đi</button>
                                <button type="submit" class="btn btn-danger mr-2" id="deleteButton">Xóa</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
