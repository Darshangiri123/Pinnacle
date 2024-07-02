@extends('front.layouts.default')

@section('title',"Home")

@section('css')
    <style>
        #profile-navbar .nav-link {
            color: black;
        }

        #profile-navbar .nav-link.active,
        #profile-navbar .nav-link:hover {
            color: #740AA1;
            background-color: #F7F7F7;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-3 mb-5">
                @include('front.layouts.components.profile-navbar')
            </div>
            <div class="col-lg-6" style="height: 80vh;overflow: auto;scrollbar-width: none;">
                @yield('profile-content')
            </div>
            <div class="col-lg-3">
                
            </div>
        </div>
    </div>
@endsection