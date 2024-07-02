@extends('front.layouts.default')

@section('title',"Home")

@section('content')
<div class="container">    
    <div class="row my-5">
        <div class="col-lg-2"></div>
        <div class="row col-lg-8">
            @foreach ($communities as $key => $community)
            <div class="col-lg-3 p-3">
                <div class="card rounded shadow">
                    <div class="card-body">
                        <a href="{{ route("front.groups.new",$community->id) }}" class="w-100 h-100 text-dark text-decoration-none p-5">
                            <div class="w-100 h-100 d-flex flex-column">
                                <div class="d-flex w-100 justify-content-center align-items-center">
                                    <span>
                                        <i class="{{ $community->fa_icon_class }} fs-1 text-primary"></i>
                                    </span>
                                </div>
                                <div class="pt-2 ps-2">
                                    <p class="fw-bold m-0 text-center">{{ $community->name }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
@endsection