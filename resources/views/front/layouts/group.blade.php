@extends('front.layouts.default')

@section('title',"Home")

@section('css')
    <style>
        #group-navbar .nav-link {
            color: #000;
        }

        #group-navbar .nav-link.active {
            color: #7d3c99;
            text-decoration: 2px underline;
            text-underline-offset: 4px;
        }

        #group-navbar .nav-link:hover {
            color: #7d3c99;
        }
    </style>
@endsection

@section('content')
    @include('front.layouts.components.group-navbar')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-3 mb-5">
                <img src="{{ $group->image_path_url }}" class="border" width="100%" height="200px" alt="">
                <div class="mt-3">
                    <h5>{{ $group->name }}</h5>
                  
                    <p class="m-0">Admin - {{ $group->group_admin->user->name }}</p>
                    <p class="m-0">Members - {{ count($group->groupuser) }}</p>
                    <p class="m-0">Community - {{ $group->community->name }}</p>
                </div>
                <div class="d-flex mt-3 w-100">
                @if (!empty($group->is_admin) || !empty($group->is_user))
                    <a href="{{ route("front.groups.posts.create",$group->id) }}" class="btn w-100 btn-primary">Post</a>
                @else
                    <a href="{{ route("front.groups.join",$group->id) }}" class="btn w-100 btn-primary">Join</a>
                @endif
                </div>
            </div>
            <div class="col-lg-6" style="height: 80vh;overflow: auto;scrollbar-width: none;">
                @yield('group-content')
            </div>
            <div class="col-lg-3">
                <div class="fs-7"><b>Chats</b></div> 
                <hr>
                @include('front.chat.index')
            </div>
        </div>
    </div>
@endsection
