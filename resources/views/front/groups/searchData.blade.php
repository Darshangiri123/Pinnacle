@if (!empty($groups))
    @foreach ($groups as $key => $group)
        <a href="{{ route("front.groups.show",$group->id) }}" class="d-block text-decoration-none text-dark">
            <div class="row my-3">
                <div class="col-lg-2">
                    <img src="{{ $group->image_path_url }}" width="100%" height="160px" class="rounded border" alt="">
                </div>
                <div class="col-lg-10 align-self-center">
                    <div>
                        <h5>{{ $group->name }}</h5>
                        <p class="m-0">Admin - {{ $group->group_admin->user->name }}</p>
                        <p class="m-0">Members - {{ count($group->groupuser) }}</p>
                        <p class="m-0">Community - {{ $group->community->name }}</p>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
@else
    <p>No Group Found</p>
@endif
