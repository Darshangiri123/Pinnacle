@extends('front.layouts.default')

@section('title',"Home")

@section('content')
<div class="container">    
    @auth
        <div class="row my-5 row-cols-md-4 row-cols-lg-6">
            <div class="p-3">
                <div class="card rounded shadow" style="height:220px">
                    <a href="{{ route("front.communities.index") }}" class="w-100 h-100 text-dark text-decoration-none">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-center">
                            <span class="pt-4">
                                <i class="fa fa-plus h1" aria-hidden="true"></i>
                            </span>
                            <p class="pt-2 fs-5 fw-bold">Create</p>                 
                        </div>
                    </a>
                </div>
            </div>
            @foreach (auth()->user()->my_group as $key => $mygroup)
                <div class="p-3">
                    <div class="card rounded shadow" style="height:220px">
                        {{-- <a href="{{ route('front.groups.shows', [$mygroup->group->id,$mygroup->group->community->themecolor]) }}" class="w-100 h-100 text-dark text-decoration-none"> --}}
                          
                        <a href="{{ route("front.groups.show",$mygroup->group->id) }}" class="w-100 h-100 text-dark text-decoration-none">
                            <div class="h-100 d-flex flex-column">
                                <img src="{{ $mygroup->group->image_path_url }}" width="100%" height="150px" alt="">
                                <div class="pt-2 ps-2">
                                    <p class="fw-bold m-0">{{ $mygroup->group->name }}</p>
                                    <small class="">({{ $mygroup->group->community->name }})</small> 
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endauth

    @guest
    
         
    <div class=" d-flex col-12">
        <img src="{{asset('images/PinnacleWord.PNG')}}" style="width:600px; height:530px;">
        

        <p class=" fs-4 fw-bolder fst-italic text-primary">
           <br>
           <br>
            Want an environment for managing projects and clients?
            <br>
            <br>
            Want to catch-up with like minded people and organize meets?
            <br>
            <br>
            Want a place to manage the whole company and communicate with the employees?
            <br>
            <br>
            <span class="fs-3"><u>Pinnacle</u></span> is the best pick for you!!
        </p>       
       
    </div>      
    @endguest
</div>
@endsection