<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Front\StoreGroupRequest;
use App\Models\Community;
use App\Models\Group;
use App\Models\GroupUser;
use App\Models\PublicChat;
use App\Models\User;

class FrontGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function communitiesIndex()
    {
        return view('front.communities.index',[
            'communities' => Community::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    public function new(Request $request,$communityId)
    {
        //
        return view('front.groups.create',[
            'community_id' => $communityId
        ]);
    }

    public function join(Request $request,string $groupId)
    {
        $group = Group::find($groupId);
        $group->groupuser()->sync([$request->user()->id => ['role' => 'user']], false);

        return redirect()->route('front.groups.show',$group->id);
    }

    public function members(Request $request,string $groupId)
    {
        $group = Group::find($groupId);
        $groupusers = GroupUser::where('group_id',$groupId)->get();
        $themeId = Group::where('id', $groupId)->first()->community_id;
        return view('front.groups.members',[
            'group' => $group,
            'groupusers' => $groupusers,
            'themeId'=>$themeId,
        ]);
    }

    public function search(Request $request,$search)
    {
        return view('front.groups.search',[
            'search' => $search
        ]);
    }

    public function searchData(Request $request)
    {
        $perPage = 10; 
        $page = $request->page;; 
        $skip = ($page - 1) * $perPage; 
        $groups = Group::where('name','LIKE','%'.$request->search.'%')->skip($skip)->take($perPage)->get();

        if (count($groups)<= 0) {
            $result = [
                'success' => false,
            ];
            return response()->json($result);
        }

        $result = [
            'success' => true,
            'data' => view('front.groups.searchData', ['groups' => $groups])->render()
        ];

        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupRequest $request)
    {
        //
        $group = new Group;
        $group->community_id = $request->community_id;
        $group->name = $request->name;
        $group->image_path = Storage::disk('local')->put('/public/group_images', $request->imageFile);        
        $group->type = $request->type;
        $group->save();

        $group = Group::find($group->id);
        $image_path = Storage::disk('local')->put('/public/group_images', $request->imageFile);
        $group->groupuser()->sync([$request->user()->id => ['role' => 'admin']], false);
        $group->save();
        return redirect()->route('front.home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $groupId)
    {
    return redirect()->route('front.groups.posts.index', [
        'groupId' => $groupId,
    ]);
    }

    // public function shows(string $groupId, $communitytheme)
    // {
    //     dd($communitytheme);
    //     return redirect()->route('front.groups.posts.index',['groupId' => $groupId, 'communitytheme' => $communitytheme]);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
