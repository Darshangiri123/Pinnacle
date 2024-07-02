@extends('admin.layouts.default')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-flex align-items-center justify-content-center text-gray-800">
            <i class="fas fa-user-friends fs-4 px-2 text-primary"></i>
            <h1 class="h3 mb-0 text-gray-800 text-primary">User List</h1>
        </div>

        <a href="{{ route('admin.user.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary text-white bg-primary shadow-sm">
            <i class="fas fa-plus text-white-100"></i> 
            Create New User
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered dataTable">
                <thead>
                    <tr class="text-primary">
                        <th class="text-primary">Id</th>
                        <th class="text-primary">Name</th>
                        <th class="text-primary">Mobile</th>
                        <th class="text-primary">Email</th>
                        <th class="text-primary">Address</th>
                        <th class="text-primary">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if ($users->isEmpty() )
                        <tr>
                            <td colspan="6" class="text-center">There is no record available.</td>
                        </tr>
                    @else
                        @foreach ($users as $key=>$user)
                            <tr>
                                <td class="text-primary">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->mobile }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->address }}</td>
                                <td class="align-middle">
                                   <div class="d-flex align-items-center">
                                      <a class="btn p-1 groupid " href="{{ route("admin.user.edit",$user->id) }}">
                                              <i class="fas fa-edit text-dark"></i>
                                      </a>
                                      <span class="h3 mt-3"> | </span>
                                      <a class="btn p-1" href="{{ route("admin.user.delete",$user->id) }}">
                                              <i class="fas fa-trash text-dark"></i>
                                      </a>
                                    </div>  
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
                
            </table>
           <div class="">
            @if ($totalPages > 1)
            <div>
                <tr>
                    <td colspan="6" class="text-center">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                @for ($i = 1; $i <= $totalPages; $i++)
                                    <li class="page-item {{ $page == $i ? 'active' : '' }}">
                                        <a class="page-link" href="?page={{ $i }}">{{ $i }}</a>
                                    </li>
                                @endfor
                            </ul>
                        </nav>
                    </td>
                </tr>
            </div>
          @endif
           </div>
        </div>
       
    </div>
   
  

    
@endsection