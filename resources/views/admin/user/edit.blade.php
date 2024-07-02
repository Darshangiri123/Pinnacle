@extends('admin.layouts.default')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit User Details</h1>
    </div>

    <div class="card shadow">
        <form method="POST" class="form-group" action="{{ route("admin.user.update",$user->id) }}">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name',$user->name) }}">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Mobile</label>
                        <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="{{ old('mobile',$user->mobile) }}">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email',$user->email) }}">
                    </div>
                    <div class="col-md-3">
                        <label for="" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address" value="{{ old('address',$user->address) }}">
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route("admin.user.list") }}" class="btn btn-dark">Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

@endsection