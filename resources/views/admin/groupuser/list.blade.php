@extends('admin.layouts.default')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-flex align-items-center justify-content-center text-gray-800">
            <i class="fas fa-user-friends fs-4 px-2 text-primary"></i>
            <h1 class="h3 mb-0 text-gray-800 text-primary">User Group List</h1>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered dataTable">
                <thead>
                    <tr class="text-primary">
                        <th class="text-primary">Id</th>
                        <th class="text-primary">User Name</th>
                        <th class="text-primary">Group Name</th>
                        
                    </tr>
                </thead>
                <tbody>
                  
                       @foreach ($users as $user)
                          <tr>
                              <td class="text-primary">{{ $user->id }}</td>
                              <td>{{ $user->name }}</td>
                              <td>
                              @if (count($user->group_list) > 0)
                                 <div class="row row-cols-3">
                                    @foreach ($user->group_list as $usergroup)
                                       @if ($usergroup->group)
                                            <div class="col">
                                               <div class="card rounded shadow"          style="height:150px;    width:130px">
                                                   <img src="{{    $usergroup->group->image_path_url }}"           width="100px" height="100px" class="ms-3"    alt="">
                                                   <div class="pt-2 ps-2">
                                                      <p class="fw-bold m-0 text-center">    {{       $usergroup->group->name }}
                                                      </p>
                                                      <small class="" style="margin-left:30%">   ({{       $usergroup->role }})
                                                      </small> 
                                                   </div>
                                               </div>
                                               <div><a href="#">Delete</a></div>
                                            </div>
                                       @else
                                         Group not available
                                       @endif
                                        
                                          <br>
                                    @endforeach 
                                 </div>  
                              @else
                                  No groups available
                              @endif
                              </td>
                          </tr>
                       @endforeach
                  
                </tbody>
            </table>
        </div>
    </div>

@endsection