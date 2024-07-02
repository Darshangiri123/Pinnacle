@foreach ($posts as $key => $post)
    <div class="col-lg-12">
    {{-- <div class="col-lg-12 masonry-item"> --}}
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
                <button class="btn">
                    <i class="fa-regular fa-heart"></i>
                </button>
                <button class="btn">
                    <i class="fa-regular fa-comment-dots"></i>
                </button>
                <button class="btn">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>
            </div>
        </div>
    </div>
@endforeach