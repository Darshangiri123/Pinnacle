<div class="card">
    <ul id="profile-navbar" class="nav flex-column fw-bold">
        <li class="nav-item border-bottom">
            <a class="nav-link {{ request()->routeIs("front.profile.index") || request()->routeIs("front.profile.create") ? 'active' : '' }}" href="{{ route("front.profile.index") }}">My Info</a>
        </li>
        <li class="nav-item border-bottom">
            <a class="nav-link {{ request()->routeIs("front.profile.store") ? 'active' : '' }}" href="{{ route("front.profile.create") }}">My Groups</a>
        </li>
        <li class="nav-item border-bottom">
            <a class="nav-link {{ request()->routeIs("front.profile.store") ? 'active' : '' }}" href="{{ route("front.profile.create") }}">My Posts</a>
        </li>
    </ul>
</div>

