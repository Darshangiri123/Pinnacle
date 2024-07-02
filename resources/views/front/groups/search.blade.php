@extends('front.layouts.default')

@section('title',"Home")

@section('script')
    <script>
        var page = 1;
        var isLoading = false;

        $(document).ready(function() {
            loadMoreData(page++);
        });

        $(window).scroll(function() {
            if ($(window).scrollTop() == $(document).height() - $(window).height()) {
                if (!isLoading) {
                    isLoading = true;
                    loadMoreData(page++);
                }
            }
        });
        
        function loadMoreData(page) {
            var url = $("#infinite-scroll-container").attr("data-url"); 
            $.ajax({
                url: url,
                method : "post",
                data : {
                    "search" : $("#infinite-scroll-container").attr("data-search"),
                    "page" : page
                },
                dataType: "json",
                beforeSend: function() {
                    $('#infinite-scroll-container').append('<div id="loading">Loading...</div>');
                },
                success: function(response) {
                    if (response.success) {
                        $('#infinite-scroll-container').append(response.data);
                        isLoading = false;
                        $('#loading').remove(); 
                    }else{
                        isLoading = true;
                        $('#loading').remove(); 
                    }
                }
            });
        }
    </script>
@endsection

@section('content')
    <div class="container my-3">
        <div class="d-flex w-100 border-bottom py-3">
            <a href="{{ route("search.groups",$search) }}" class="btn btn-primary me-2 fw-bold rounded-pill">Groups</a>
            <a href="{{ route("search.posts",$search) }}" class="btn btn-light me-2 fw-bold rounded-pill">Posts</a>
        </div>
        <div id="infinite-scroll-container" data-url={{ route("searched.group.data") }} data-search="{{ @$search }}">

        </div>
    </div>
@endsection