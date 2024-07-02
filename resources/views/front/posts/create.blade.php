@extends('front.layouts.group')

@section('title',"Home")

@section('script')
    <script>
    tinymce.init({
        selector: '#post-textarea',
        // width: 600,
        height: 500,
        plugins: [
            'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
            'searchreplace', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media',
            'table', 'emoticons'
        ],
        toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link |' +
            'forecolor backcolor emoticons',
        menubar: 'favs insert format table help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });

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
@section('css')
@php
    switch($themeId){
        case 1:
           $custom = 'theme1.css';
           break;
        case 2:
           $custom = 'theme2.css';
           break;
        case 3:
           $custom = 'theme3.css';
           break;
        case 4:
           $custom = 'theme4.css';
           break;
        case 5:
           $custom = 'theme5.css';
           break;
        case 6:
           $custom = 'theme6.css';
           break;
        case 7:
           $custom = 'theme7.css';
           break;
        case 8:
           $custom = 'custom.css';
           break; 
    }
@endphp
        <link rel="stylesheet" href="{{ asset('assets/css/' . $custom) }}">
@endsection
@section('group-content')
    <div class="card rounded shadow">
        <div class="card-body">
            <form method="POST" action="{{ route('front.groups.posts.store',$group->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old("title") }}">
                        @if($errors->has('title'))
                            <div class="fw-bold text-danger">{{ $errors->first('title') }}</div>
                        @endif
                    </div>
                    <div class="col-12">
                        <div class="w-100 d-flex justify-content-between">
                            <label for="imageFile" class="form-label">
                                <span><i class="fa fa-upload" aria-hidden="true"></i></span> 
                                Upload Image
                            </label>
                            <p id="removeImage" class="d-none mt-1 fw-bold text-danger">
                                <span>
                                    <i class="fa-solid fa-x"></i>
                                </span>
                                Remove
                            </p>
                        </div>
                        <input type="file" class="form-control" id="imageFile" name="imageFile">
                        @if($errors->has('imageFile'))
                            <div class="fw-bold text-danger">{{ $errors->first('imageFile') }}</div>
                        @endif
                    </div>
                    <div class="col-12">
                        <label for="imageFile" class="form-label w-100">
                            <img id="uploadedImage" class="border" width="100%" height="320px" alt="" src="">
                        </label>
                    </div>
                    <div class="col-12">
                        <label for="post-textarea" class="form-label">Content</label>
                        @if($errors->has('content'))
                            <div class="fw-bold text-danger">{{ $errors->first('content') }}</div>
                        @endif
                        <textarea id="post-textarea" name="content">{{ old("content") }}</textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary fw-bold me-2">Publish</button>
                        <a href="{{ route('front.groups.posts.index',$group->id) }}" class="btn fw-bold btn-outline-dark">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection