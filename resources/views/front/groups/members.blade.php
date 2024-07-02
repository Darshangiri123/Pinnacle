@extends('front.layouts.group')

@section('title',"Home")
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
@section('group-content')

    <div class="card rounded shadow">
        <div class="card-body">
            @foreach ($groupusers as $key => $groupuser)
            <div class="py-3">
                <div class="d-flex align-items-center border-bottom pb-3 ">
                    @if ( empty($groupuser->user->userinfo) || empty($groupuser->user->userinfo->profile_pic))
                        <div class="d-flex justify-content-center align-items-center rounded-circle bg-warning" style="width:45px;height: 45px;">
                            <p class="m-0 fw-bold fs-5 text-white">{{ strtoupper(substr($groupuser->user->name,0,1)) }}</p>
                        </div>
                    @else
                        <img src="{{ $groupuser->user->userinfo->profile_pic_url }}" width="45px" height="45px" class="rounded-circle border" alt="profile_pic">
                    @endif
                    <div class="ms-3">
                        <h5>{{ $groupuser->user->name }}</h5>
                        <h6>{{ $groupuser->role }}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection