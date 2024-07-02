@extends('admin.layouts.default')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-flex align-items-center justify-content-center text-gray-800">
            <i class="fas fa-user-friends fs-4 px-2 text-primary"></i>
            <h1 class="h3 mb-0 text-gray-800 text-primary">Group List</h1>
        </div>

        <a href="{{ route('admin.group.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary text-white bg-primary shadow-sm">
            <i class="fas fa-plus text-white-100"></i> 
            Create New Group
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered dataTable">
                <thead>
                    <tr class="text-primary">
                        <th class="text-primary">Id</th>
                        <th class="text-primary">Group Name</th>
                        <th class="text-primary">Group Profile Pic</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if (count($groups) == 0 )
                        <tr>
                            <td colspan="6" class="text-center">There is no record available.</td>
                        </tr>
                    @else
                        @foreach ($groups as $key=>$group)
                            <tr>
                          
                                <td class="text-primary">{{ $group->id }}</td>
                                <td>{{ $group->name }}</td>
                                <td>
                                    <img src="{{ $group->image_path_url }}" width="100px" height="100px" class="ms-3" alt="GroupImage">
                                </td>
                                <td class="align-middle">
                                   <div class="d-flex align-items-center">
                                      <a class="btn p-1 groupid " href="{{ route("admin.group.edit",$group->id) }}">
                                              <i class="fas fa-edit text-dark"></i>
                                      </a>
                                      <span class="h3 mt-3"> | </span>
                                      <a class="btn p-1" href="{{ route("admin.group.delete",$group->id) }}">
                                              <i class="fas fa-trash text-dark"></i>
                                      </a>
                                    </div>  
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
    </div>

@endsection