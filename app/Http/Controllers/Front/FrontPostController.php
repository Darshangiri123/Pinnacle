<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Post;
use App\Models\GroupUser;
use App\Models\PublicChat;
use App\Http\Requests\Front\StorePostRequest;
use Illuminate\Support\Facades\Storage;

class FrontPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $groupId)
    {
        $group = Group::find($groupId);
        $post = Post::where('group_id',$groupId)->get();
        $allreceivers = GroupUser::where('group_id', $groupId)->pluck('user_id');
        $publicChatName = PublicChat::get();

        $themeId = Group::where('id', $groupId)->first()->community_id;

        
  
        return view("front.posts.index",[
            'group' => $group,
            'posts' => $post,
            'publicChatName'=>$publicChatName,
            'allreceivers'=>$allreceivers,
            'themeId'=>$themeId,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $groupId)
    {
        $themeId = Group::where('id', $groupId)->first()->community_id;
        $group = Group::find($groupId);
        return view("front.posts.create",[
            'group' => $group,
            'themeId'=>$themeId,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request,string $groupId)
    {
        //
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;
        $validated['group_id'] = $groupId;
        if (!empty($request->imageFile)) {
            $validated['image_path'] = Storage::disk('local')->put('/public/post_images', $request->imageFile);        
        }

        $post = Post::create($validated);
        return redirect()->route('front.groups.posts.index',$groupId);
    }

    public function search(Request $request,$search)
    {
        $request->session()->flash('post-search',true);
        return view('front.posts.search',[
            'search' => $search
        ]); 
    }

    public function searchData(Request $request)
    {
        $perPage = 10; 
        $page = $request->page;; 
        $skip = ($page - 1) * $perPage; 
        $posts = Post::where('title','LIKE','%'.$request->search.'%')->skip($skip)->take($perPage)->get();

        if (count($posts)<= 0) {
            $result = [
                'success' => false,
            ];
            return response()->json($result);
        }
        
        $result = [
            'success' => true,
            'data' => view('front.posts.searchData', ['posts' => $posts])->render()
        ];

        return response()->json($result);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

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
