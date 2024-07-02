
@auth
{{-- <nav id="navbar" class="navbar navbar-expand-lg bg-light" style="background-color:{{ isset($communitytheme) && Request::is('posts') ? $communitytheme : ''  }};"> --}}

{{-- @if (!empty($group))
<nav id="navbar" class="navbar navbar-expand-lg " style="background-color:{{ $group->community->themecolor }}">
@else --}}
<nav id="navbar" class="navbar navbar-expand-lg">
{{-- @endif --}}
    <div class="container">
        <a class="navbar-brand fs-4 fw-bolder fst-italic text-primary" href="{{ route("front.home") }}">Pinnacle</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fw-semibold justify-content-between" id="navbarSupportedContent">
            <div class="d-flex">
                <div class="input-group" id="input-search-group">
                    <input id="nav-search-input" class="form-control form-control-sm" type="text" name="search" value="{{ old('search',@$search) }}" placeholder="Search" aria-label="Search">
                    <button id="nav-search-btn" class="btn border border-start-0" style="background-color: #ffffff">
                        <span>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-flex">
                <ul class="navbar-nav w-100 me-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="#">Feed</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">
                            <span>
                                <i class="fa-regular fa-comments text-primary"></i>
                            </span>
                        </a>
                    </li>
@endauth                    
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link d-flex align-items-center dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @if ( empty(auth()->user()->userinfo) || empty(auth()->user()->userinfo->profile_pic))
                                <div class="d-flex justify-content-center align-items-center rounded-circle bg-warning" style="width:40px;height: 40px;">
                                    <p class="m-0 fw-bold fs-5 text-white">{{ strtoupper(substr(auth()->user()->name,0,1)) }}</p>
                                </div>
                            @else
                                <img src="{{ auth()->user()->userinfo->profile_pic_url }}" width="40px" height="40px" class="rounded-circle border" alt="profile_pic">
                            @endif
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route("front.profile.index") }}">My Info</a></li>
                            <li><a class="dropdown-item" href="#">My Posts</a></li>
                            <li><a class="dropdown-item" href="{{route('front.settings')}}">Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route("front.logout") }}">Logout</a></li>
                        </ul>
                    </li>
                    @endauth
                    @guest
                    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:">
                        <div class="container">
                            <!-- Left-hand side links -->
                            <div class="navbar-nav me-auto">
                                <a class="navbar-brand  fs-4 fw-bolder fst-italic text-primary" href="{{ route("front.home") }}">Pinnacle</a>
                                <a class="nav-link rounded pt-1  mt-2 align-items-center" href="{{ route('aboutus.route') }}"  style=" height:35px; color: #740AA1;  margin-left:100px;" onmouseover="this.style.backgroundColor=' #740AA1'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='black';">About-Us</a>
                                <a class="nav-link rounded pt-1  mt-2 align-items-center" href="{{ route('usecase.route') }}"  style=" height:35px; color: #740AA1;  margin-left:100px;" onmouseover="this.style.backgroundColor=' #740AA1'; this.style.color='#fff';" onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='black';">Use Case</a>
                            </div>
                            
                            <!-- Right-hand side links -->
                            <div class="navbar-nav">
                                <a href="{{ route("front.login") }}" class="nav-link btn btn-sm btn-primary px-3">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    Login
                                </a>
                                <a href="{{ route("front.register") }}" class="nav-link btn btn-sm btn-primary ms-2 px-3">
                                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                                    Sign-up
                                </a>
                            </div>
                        </div>
                    </nav>
                    
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</nav>





