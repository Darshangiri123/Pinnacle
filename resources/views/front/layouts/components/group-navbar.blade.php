<div class="bg-light border-top border-bottom w-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <nav id="group-navbar" class="nav justify-content-center fw-bold">
                    <a class="nav-link {{ request()->routeIs("front.groups.posts.index",$group->id) ? 'active' : '' }}  text-primary" href="{{ route("front.groups.posts.index",$group->id) }}">Posts</a>
                    <a class="nav-link {{ request()->routeIs("front.groups.members",$group->id) ? 'active' : '' }}  text-primary" href="{{ route("front.groups.members",$group->id) }}">Members</a>
           
                </nav>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>
