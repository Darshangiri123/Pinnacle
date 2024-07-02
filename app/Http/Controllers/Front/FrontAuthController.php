<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;
use App\Models\GroupUser;
use Illuminate\Support\Facades\Auth;

class FrontAuthController extends Controller
{
    public function login()
    {
        return view('front.auth.login');
    }

    public function loginSubmit(Request $request){
        $credentials =  $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|max:255',
        ]);
        
        if(Auth::guard("web")->attempt($credentials) ){
            $request->session()->regenerate();
            return redirect()->route('front.home');
        }
        $request->session();
        return back()->with('error','please check your credentials');
    }

    public function register()
    {
        return view('front.auth.register');
    }

    public function registerSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|max:255',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), // You may want to hash the password
        ]);
        
        Auth::login($user);

        return redirect()->route("front.login");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerateToken();
        return redirect()->route("front.login");
    }

    public function userlist()
    {
        $users = new User();
        $users = User::get();
        $data = User::paginate(4);
      
        return view('admin.user.list',[
            'users'=>$users,
            'data'=>$data,
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
