@extends('front.layouts.profile')

@section('title',"Home")

@section('script')
    <script>
        $("#profilePicFile").change(function (e) { 
            e.preventDefault();
            var file = e.target.files[0];        
            if (file) {
                $("#profilePicImage").removeClass('d-none');
                $("#profilePicImage").addClass('d-block');
                $("#textProfilePic").removeClass('d-block');
                $("#textProfilePic").addClass('d-none');
                var reader = new FileReader();            
                reader.onload = function (event) {
                    $("#profilePicImage").attr("src", event.target.result);
                };
                reader.readAsDataURL(file);
            }
        });

        $("#removeImage").click(function (e) { 
            e.preventDefault();
            $("#profilePicImage").addClass('d-none');
            $("#textProfilePic").removeClass('d-none');
            $("#profilePicImage").removeAttr("src");
            $("#profilePicFile").val("");
        });
    </script>
@endsection

@section('profile-content')
<form method="POST" action="{{ route('front.profile.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="card mb-5 shadow rounded">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h5>Change Info</h5>
                <div>
                    <button type="submit" class="btn btn-sm btn-primary">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Save
                    </button>
                    <a href="{{ route("front.profile.index") }}" class="btn btn-sm btn-outline-dark">
                        <i class="fa-solid fa-arrow-left"></i>
                        Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
                <div class="row border-bottom py-3">
                    <div class="col-lg-4">
                        <h6>Profile</h6>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-5">
                                <label for="profilePicFile" class="form-label">
                                    @if ( empty(auth()->user()->userinfo) || empty(auth()->user()->userinfo->profile_pic))
                                        <img id="profilePicImage" src="{{ auth()->user()->userinfo->profile_pic_url ?? "" }}" class="rounded-circle border d-none" width="150px" height="150px" alt="">
                                        <div id="textProfilePic" class="d-flex justify-content-center align-items-center rounded-circle bg-warning" style="width:150px;height: 150px;">
                                            <p class="m-0 fw-bold fs-1 text-white">{{ strtoupper(substr(auth()->user()->name,0,1)) }}</p>
                                        </div>
                                    @else
                                        <img id="profilePicImage" src="{{ auth()->user()->userinfo->profile_pic_url }}" width="150px" height="150px" class="rounded-circle border" alt="profile_pic">
                                    @endif
                                </label>
                            </div>
                            <div class="col-6 my-3">
                                <label for="profilePicFile" class="form-label"><span><i class="fa fa-upload" aria-hidden="true"></i></span> Upload Image</label>
                                <input type="file" class="form-control d-none" id="profilePicFile" name="profilePicFile">
                                <p id="removeImage" class="mt-1 fw-bold text-danger">
                                    <span>
                                        <i class="fa-solid fa-x me-1"></i>
                                    </span>
                                    Remove
                                </p>
                                @if($errors->has('profilePicFile'))
                                    <div class="fw-bold text-danger">{{ $errors->first('profilePicFile') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-bottom py-3">
                    <div class="col-lg-4">
                        <h6>Public Information</h6>
                    </div>
                    <div class="col-lg-8">
                        <div>
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name',auth()->user()->name) }}">
                            @if($errors->has('name'))
                                <div class="fw-bold text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="mt-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email',auth()->user()->email) }}">
                            @if($errors->has('email'))
                                <div class="fw-bold text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col-lg-4">
                        <h6>Private Information</h6>
                    </div>
                    <div class="col-lg-8">
                        <div>
                            <label for="phone" class="form-label">Phone No.</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone',auth()->user()->userinfo->phone ?? "") }}">
                            @if($errors->has('phone'))
                                <div class="fw-bold text-danger">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>
                        <div>
                            <label for="gender" class="form-label">Gender</label>
                            <select id="gender" name="gender" class="form-select">
                                <option value="male" @if (old('gender',auth()->user()->userinfo->gender ?? "") == "male") selected @endif>Male</option>
                                <option value="female" @if (old('gender',auth()->user()->userinfo->gender ?? "") == "female") selected @endif>Female</option>
                            </select>
                            @if($errors->has('gender'))
                                <div class="fw-bold text-danger">{{ $errors->first('gender') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
        </div>
    </div>
</form>
@endsection