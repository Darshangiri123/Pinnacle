@extends('admin.layouts.default')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Group</h1>
    </div>

    <div class="card shadow">
        <form method="POST" class="form-group m-0" action="{{ route("admin.group.store") }}">
            @csrf

            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="" class="form-label">Group Name <span class="text-danger fs-5">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
                        @if($errors->has('name'))
                            <p class="text-danger m-0 p-1">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Community Id <span class="text-danger fs-5">*</span></label>
                        <input type="text" class="form-control" name="community_id" placeholder="community_id" value="{{ old('community_id') }}">
                        @if($errors->has('community_id'))
                            <p class="text-danger m-0 p-1">{{ $errors->first('community_id') }}</p>
                        @endif
                    </div>
                    
                    
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route("admin.group.list") }}" class="btn btn-dark">Back</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

@endsection