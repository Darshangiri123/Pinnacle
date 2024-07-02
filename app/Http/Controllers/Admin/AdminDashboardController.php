<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;
use App\Models\Community;
use App\Models\Post;
use App\Models\GroupUser;
use Illuminate\Support\Facades\Auth;
use App\Support\Collection;
use App\Providers\AppServiceProvider;


class AdminDashboardController extends Controller
{
    //
    public function dashboard()
    {
        $usercount = User::count();
        $groupcount = Group::count();
        $postcount = Post::count();
        $communitycount = Community::count();
      
        return view('admin.home', [
            'usercount'=>$usercount,
            'groupcount'=>$groupcount,
            'postcount'=>$postcount,
            'communitycount'=>$communitycount,
        ]);
    }

    public function userlist()
    {
    //     $users = User::all();
    // $users = User::paginate(4);
    // $collection = new Collection($users);
    // $perPage = 4;
    // $currentPage = request()->get('page', 1);
    // $paginatedUsers = $collection->mihirpaginator($perPage, $users->count(), $currentPage);
    // return view('admin.user.list', [
    //     'users' => $users,
    // ]);

    $allUsers = User::all();
    
    // Pagination logic
    $perPage = 7; // Number of records per page
    $totalUsers = $allUsers->count();
    $totalPages = ceil($totalUsers / $perPage);
    $page = request()->get('page', 1); // Get the current page number from the request query parameter
    $offset = ($page - 1) * $perPage; // Calculate the offset
    $userIds = $allUsers->pluck('id')->toArray(); // Get an array of all user IDs
    $userIds = array_slice($userIds, $offset, $perPage); // Slice the array of user IDs to get IDs for the current page

    // Retrieve users based on the sliced array of user IDs
    $users = User::whereIn('id', $userIds)->get();

    return view('admin.user.list', [
        'users'=>$users,
        'totalPages'=>$totalPages,
        'page'=>$page,
    ]);
    }

    public function usercreate()
    {
        return view('admin.user.create');
    }

    public function userstore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|max:20',
            'address' => 'required|string|max:255',
        ]);
      
        $user = User::create($validated);
        return redirect()->route("admin.user.list");
    }

    public function useredit(Request $request,$id)
    {
        $user = User::findorfail($id);
        return view('admin.user.edit',compact('user'));
    }

    public function userupdate(Request $request,$id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);
       
        $user = User::find($id);
        $user->fill($validated);
        $user->save();
     
        return redirect()->route("admin.user.list");
    }

    public function userdelete(Request $request,$id)
    {
        $user = User::findorfail($id);
        $user->delete();
      
        return redirect()->route("admin.user.list");
    }


    public function grouplist()
    {
        $groups = new Group();
        $groups = Group::get();
      
        return view('admin.group.list',compact('groups'));
    }
    public function groupcreate()
    {
        return view('admin.group.create');
    }

    public function groupstore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
      
        $group = Group::create($validated);
        return redirect()->route("admin.group.list");
    }

    public function groupedit(Request $request,$id)
    {
        $group = Group::findorfail($id);
        return view('admin.group.edit',compact('group'));
    }

    public function groupupdate(Request $request,$id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
       
        $group = Group::find($id);
        $group->fill($validated);
        $group->save();
     
        return redirect()->route("admin.group.list");
    }

    public function groupdelete(Request $request,$id)
    {
        $group = Group::findorfail($id);
        $group->delete();
      
        return redirect()->route("admin.group.list");
    }

    public function groupuserlist()
    {
        // $users = new User();
        $users = User::get();
        
       
        // $groupusers = new GroupUser();
        // $groupusers = GroupUser::get();
        // dd($groupusers[0]->user);
        // $groupID = $groupusers->pluck('group_id');
        // $userID = $groupusers->pluck('user_id');
       
        
        // $groups = new Group();
        // $groupids = Group::whereIn('id', $groupID)->pluck('id');
        // $groupname = Group::whereIn('id', $groupID)->pluck('name');

        // $users = new User();
        // $userids = User::whereIn('id', $userID)->pluck('id');
        // $username = User::whereIn('id', $userID)->pluck('name');

        // $usernames = [  $userids,   $username];
        // $groupnames = [ $groupids,  $groupname];

        // $groupusers = [$usernames, $groupnames];
   
        return view('admin.groupuser.list',[
            
            'users'=>  $users,
            
        ]);
    }
}
