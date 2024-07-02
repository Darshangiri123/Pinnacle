@extends('admin.layouts.default')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New User</h1>
    </div>

    <div class="card shadow">
        <form method="POST" class="form-group m-0" action="{{ route("admin.user.store") }}">
            @csrf

            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="" class="form-label">Name <span class="text-danger fs-5">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
                        @if($errors->has('name'))
                            <p class="text-danger m-0 p-1">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Mobile <span class="text-danger fs-5">*</span></label>
                        <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="{{ old('mobile') }}">
                        @if($errors->has('mobile'))
                            <p class="text-danger m-0 p-1">{{ $errors->first('mobile') }}</p>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Email <span class="text-danger fs-5">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                        @if($errors->has('email'))
                            <p class="text-danger m-0 p-1">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Address <span class="text-danger fs-5">*</span></label>
                        <textarea class="form-control" placeholder="Address" name="address"> {{ old('address') }} </textarea>
                        @if($errors->has('address'))
                            <p class="text-danger m-0 p-1">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route("admin.user.list") }}" class="btn btn-dark">Back</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

@endsection