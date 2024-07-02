@extends('front.layouts.default')

@section('title',"Home")

@section('script')
    <script>
        $("#imageFile").change(function (e) { 
            e.preventDefault();
            $("#removeImage").removeClass("d-none");
            $("#removeImage").addClass("d-block");
            var file = e.target.files[0];        
            if (file) {
                var reader = new FileReader();            
                reader.onload = function (event) {
                    $("#uploadedImage").attr("src", event.target.result);
                };
                reader.readAsDataURL(file);
            }
        });

        $("#removeImage").click(function (e) { 
            e.preventDefault();
            $("#removeImage").removeClass("d-block");
            $("#removeImage").addClass("d-none");
            $("#uploadedImage").removeAttr("src");
            $("#imageFile").val("");
        });
    </script>
@endsection

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('front.groups.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="community_id" value="{{ $community_id }}">
            <div class="row my-5 g-3">
                <div class="col-12">
                    <label for="name" class="form-label">Group Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Group Name" class="form-control form-control-lg">
                    @if($errors->has('name'))
                        <div class="fw-bold text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="imageFile" class="form-label w-100">
                                <img id="uploadedImage" class="border" width="100%" height="320px" alt="" src="">
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <label for="imageFile" class="form-label"><span><i class="fa fa-upload" aria-hidden="true"></i></span> Upload Image</label>
                            <input type="file" class="form-control" id="imageFile" name="imageFile">
                            <p id="removeImage" class="d-none mt-1 fw-bold text-danger">
                                <span>
                                    <i class="fa-solid fa-x"></i>
                                </span>
                                Remove
                            </p>
                            @if($errors->has('imageFile'))
                                <div class="fw-bold text-danger">{{ $errors->first('imageFile') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="private" value="private" @if (old('type') == 'private') checked @endif>
                                <label class="form-check-label" for="private">
                                    <p class="fw-bold m-0">Private</p>
                                    <small>Invited members only. Recommended for most groups and groups with teens.</small>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="listed" value="listed" @if (old('type') == 'listed') checked @endif>
                                <label class="form-check-label" for="listed">
                                    <p class="fw-bold m-0">Listed</p>
                                    <small>Anyone can search for your group and request to join, but only members can view content.</small>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="public" value="public" @if (old('type') == 'public') checked @endif>
                                <label class="form-check-label" for="public">
                                    <p class="fw-bold m-0">Public</p>
                                    <small>Anyone can search for your group and view content. Ideal for online communities or making public announcements.</small>
                                </label>
                            </div>
                        </div>
                    </div>
                    @if($errors->has('type'))
                        <div class="fw-bold text-danger">{{ $errors->first('type') }}</div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary fw-bold me-2">Publish</button>
                        <a href="{{ route("front.home") }}" class="btn fw-bold btn-outline-dark">Back</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection