@extends('front.layouts.default')

@section('title',"Home")

@section('css')
    <style>
        #masonry-infinite-scroll-container {
            display: flex;
            flex-wrap: wrap;
        }

        .masonry-item {
            margin-bottom: 30px;
        }
    </style>
@endsection

@section('script')
    <script>
        var page = 1;
        var isLoading = false;
        var $container = $('#masonry-infinite-scroll-container');


        $(document).ready(function () {
            // var $container = $('#masonry-infinite-scroll-container');
            // $container.masonry({
            //     itemSelector: '.masonry-item',
            //     columnWidth: '.masonry-item',
            // });
            loadMoreData(page++);
        });

        $(document).ready(function() {
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
            var url = $("#masonry-infinite-scroll-container").attr("data-url"); 
            $.ajax({
                url: url,
                method : "post",
                data : {
                    "search" : $("#masonry-infinite-scroll-container").attr("data-search"),
                    "page" : page
                },
                dataType: "json",
                beforeSend: function() {
                    $('#masonry-infinite-scroll-container').append('<div id="loading">Loading...</div>');
                },
                success: function(response) {
                    if (response.success) {
                        $('#masonry-infinite-scroll-container').append(response.data);
                        // var $newItems = $(response.data).css({ opacity: 0 });
                        // $container.append($newItems).masonry('appended', $newItems).masonry('layout');
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
            <a href="{{ route("search.groups",$search) }}" class="btn btn-light me-2 fw-bold rounded-pill">Groups</a>
            <a href="{{ route("search.posts",$search) }}" class="btn btn-primary me-2 fw-bold rounded-pill">Posts</a>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="row g-3 my-3" id="masonry-infinite-scroll-container" data-url={{ route("searched.post.data") }} data-search="{{ @$search }}">
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>

    </div>
@endsection