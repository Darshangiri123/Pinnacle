@extends('admin.layouts.default')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Group Details</h1>
    </div>

    <div class="card shadow">
        <form method="POST" class="form-group" action="{{ route("admin.group.update",$group->id) }}">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="form-label">Group Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name',$group->name) }}">
                    </div> 
                    <div class="col-md-3">
                        <label for="" class="form-label">Community Id</label>
                        <input type="text" class="form-control" name="community_id" placeholder="community_id" value="{{ old('community_id',$group->community_id) }}">
                    </div> 
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="{{ route("admin.group.list") }}" class="btn btn-dark">Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

@endsection