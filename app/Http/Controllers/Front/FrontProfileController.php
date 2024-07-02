<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use App\Models\UserInfo;

class FrontProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("front.profile.index");
    }
    public function setting()
    {
        //
        return view("front.layouts.settings");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("front.profile.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email,' . $request->user()->id,
            'phone' => 'required|numeric|digits_between:10,10',
            'gender' => 'required|string',
            'profilePicFile' => 'nullable|mimes:png,jpg,gif|max:2048',
        ]);

        $user = User::find($request->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        if (!empty($user->userinfo)) {
            $userinfo = UserInfo::find($user->userinfo->id);
        }else {
            $userinfo = new UserInfo;
            $userinfo->user_id = $request->user()->id;
        }
        $userinfo->phone = $request->phone;
        $userinfo->gender = $request->gender;
        $userinfo->save();
        
        if (!empty($request->profilePicFile)) {
            $userinfo = UserInfo::find($userinfo->id);
            $userinfo->profile_pic = Storage::disk('local')->put('/public/profile_image', $request->profilePicFile);
            $userinfo->save();
        }
        
        return redirect()->route('front.profile.index');
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
