@extends('front.layouts.group')

@section('title',"Home")


{{-- CustomThemes --}}

{{-- @if($themeId == 1)
<link rel="stylesheet" href="{{ asset('assets/css/theme1.css') }}">
@elseif($themeId == 2)
<link rel="stylesheet" href="{{ asset('assets/css/theme2.css') }}">
@elseif($themeId == 3)
<link rel="stylesheet" href="{{ asset('assets/css/theme3.css') }}">
@elseif($themeId == 4)
<link rel="stylesheet" href="{{ asset('assets/css/theme4.css') }}">
@elseif($themeId == 5)
<link rel="stylesheet" href="{{ asset('assets/css/theme5.css') }}">
@else
<link rel="stylesheet" href="{{ asset('assets/css/theme6.css') }}">
@endif --}}
@section('css')
@php
    switch($themeId){
        case 1:
           $custom = 'theme1.css';
           break;
        case 2:
           $custom = 'theme2.css';
           break;
        case 3:
           $custom = 'theme3.css';
           break;
        case 4:
           $custom = 'theme4.css';
           break;
        case 5:
           $custom = 'theme5.css';
           break;
        case 6:
           $custom = 'theme6.css';
           break;
        case 7:
           $custom = 'theme7.css';
           break;
        case 8:
           $custom = 'custom.css';
           break; 
    }
@endphp
        <link rel="stylesheet" href="{{ asset('assets/css/' . $custom) }}">
@endsection
{{-- CustomThemesEnd --}}


@section('group-content')
<div class="row g-3">
  
    @if (count($posts) !== 0)
        @foreach ($posts as $key => $post)
            <div class="col-12">
                <div class="card rounded shadow">
                    <div class="card-header d-flex align-items-center">
                        <div class="me-3">
                            @if ( empty($post->user->userinfo) || empty($post->user->userinfo->profile_pic))
                                <div class="d-flex justify-content-center align-items-center rounded-circle bg-warning" style="width:35px;height: 35px;">
                                    <p class="m-0 fw-bold fs-5 text-white">{{ strtoupper(substr($post->user->name,0,1)) }}</p>
                                </div>
                            @else
                                <img src="{{ $post->user->userinfo->profile_pic_url }}" width="35px" height="35px" class="rounded-circle border" alt="profile_pic">
                            @endif
                        </div>
                        <div>
                            <h6 class="m-0">{{ $post->user->name }}</h6>
                            <p class="m-0"><small>{{ $post->created_at }}</small></p>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5>{{ $post->title }}</h5>
                        @if (!empty($post->image_path))
                            <img src="{{ $post->image_path_url }}" width="100%" class="border shaodw" alt="">
                        @endif
                        <p>{!! $post->content !!}</p>
                    </div>
                    <div class="card-footer justify-content-between align-content-center">
{{-- Like btn --}}
                        <a href="{{ route('post.like', ['post' => $post->id, 'gid'=>$group->id]) }}" class="btn">
                            <i class="fa-regular fa-heart"></i>
                           
                            <span>{{ $post->count_likes }}</span>
                        </a>
{{-- Like btn end  --}}

{{-- comment btn --}}
                    <form action="{{ route('comments.store', $post) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn text-primary">Add Comment</button>
                        <div class="form-group">
                            <textarea name="body" class="form-control" rows="3" placeholder="Add a comment"></textarea>
                        </div>
                        
                    </form>
{{-- comment btn end --}}
{{-- comment view --}}
                    {{-- <div class="comments">
                        @foreach($post->comments as $comment)
                            <div class="comment">
                                <p>
                                    <span class="text-muted comment-user">{{ $comment->user->name }}</span>:
                                    <span class="comment-body">{{ $comment->body }}</span>
                                </p>
                            </div>
                        @endforeach
                    </div> --}}
                    <!-- Parent Post Card -->
<div class="card mb-3">
    <div class="card-body">
        <!-- Dropdown Button -->
        <div class="dropdown" >
            <button class="btn text-primary dropdown-toggle" type="button" id="commentsDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Comments
            </button>
            <!-- Dropdown Menu -->
            <div class="dropdown-menu dropdown-menu-scroll" style="width:200%; border-radius: 10px;" aria-labelledby="commentsDropdown">
                <div class="dropdown-item-text">
                    <div class="comments" >
                        <!-- Comments Content -->
                        @foreach($post->comments as $comment)
                            <div class="comment">
                                <p>
                                    <span class="text-muted comment-user">{{ $comment->user->name }}</span>:
                                    <span class="comment-body">{{ $comment->body }}</span>
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
   


    .dropdown-menu-scroll {
    max-height: 200px; /* Set max height for dropdown */
    overflow-y: auto; /* Enable vertical scrolling if content exceeds max height */
}
/* Custom CSS for dropdown menu */
.dropdown-menu-scroll {
    max-height: 200px; /* Set max height for dropdown */
    overflow-y: auto; /* Enable vertical scrolling if content exceeds max height */
}

/* Ensure dropdown menu stays within card bounds */
.dropdown-menu-scroll {
    max-width: calc(100% - 1rem); /* Adjust to leave some padding space */
    overflow-x: hidden; /* Hide horizontal overflow */
}

.comment-user {
  font-weight: bold; /* Make the user's name bold */
  color: #333; /* Set the color of the user's name */
  margin-right: 5px; /* Add some spacing between the name and the body */
}

.comment-body {
  color: #666; /* Set the color of the comment body */
  /* Add any additional styles like font size, margin, padding, etc. */
}
</style>
{{-- comment view end --}}
                    </div>
                </div>
            </div>
        @endforeach
    @else
        @if ( !empty($group->is_admin) || !empty($group->is_user) )
            <div class="card rounded shadow">
                <div class="card-body">
                    <a class="text-decoration-none text-dark fw-bold" href="{{ route("front.groups.posts.create",$group->id) }}">
                        <div class="alert alert-secondary m-0 text-center">
                            <h6 class="mb-0">
                                <span class="me-1">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </span>
                                Create
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        @else
            <div class="card rounded shadow">
                <div class="card-body">
                    <div class="border alert alert-light m-0 text-center">
                        <h6>
                            For view posts first 
                            <span>
                                <a href="{{ route("front.groups.join",$group->id) }}" class="btn btn-sm btn-primary fw-bold px-2">
                                    <i class="fa fa-user-group me-1"></i>
                                    Join
                                </a>
                            </span>
                            Group.
                        </h6>
                    </div>
                </div>
            </div>
        @endif

    @endif

</div>
@endsection