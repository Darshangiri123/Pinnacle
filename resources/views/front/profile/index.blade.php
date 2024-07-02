@extends('front.layouts.profile')

@section('title',"Home")

@section('profile-content')
    <div class="card shadow rounded">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h5>My Info</h5>
                <a href="{{ route("front.profile.create") }}" class="btn btn-sm btn-primary">
                    <i class="fa-solid fa-gear me-1"></i>
                    Edit
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row border-bottom py-3">
                <div class="col-lg-4">
                    <h6>Profile</h6>
                </div>
                <div class="col-lg-8">
                    @if ( empty(auth()->user()->userinfo) || empty(auth()->user()->userinfo->profile_pic))
                        <div class="d-flex justify-content-center align-items-center rounded-circle bg-warning" style="width:150px;height: 150px;">
                            <p class="m-0 fw-bold fs-1 text-white">{{ strtoupper(substr(auth()->user()->name,0,1)) }}</p>
                        </div>
                    @else
                        <img src="{{ auth()->user()->userinfo->profile_pic_url }}" width="150px" height="150px" class="rounded-circle border" alt="profile_pic">
                    @endif
                </div>
            </div>
            <div class="row border-bottom py-3">
                <div class="col-lg-4">
                    <h6>Public Information</h6>
                </div>
                <div class="col-lg-8">
                    <p class="m-0">Name</p>
                    <h6>{{ auth()->user()->name }}</h6>
                    <p class="m-0">Email</p>
                    <h6>{{ auth()->user()->email }}</h6>
                </div>
            </div>
            <div class="row border-bottom py-3">
                <div class="col-lg-4">
                    <h6>Private Information</h6>
                </div>
                <div class="col-lg-8">
                    <p class="m-0">Phone No.</p>
                    <h6>{{ auth()->user()->userinfo->phone ?? "-" }}</h6>
                    <p class="m-0">Gender</p>
                    <h6 class="text-uppercase">{{ auth()->user()->userinfo->gender ?? "-" }}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection