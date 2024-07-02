<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset("assets/media/favicon.png") }}">
    <link rel="stylesheet" href="{{ asset("assets/plugins/bootstrap/css/bootstrap.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

        @yield('css')

</head>
<body>
    @include('front.layouts.components.navbar')

    @if (!empty(session('post-search')))
        <span id="search-bar" class="d-none" data-url="{{ route("search.posts","") }}"></span>
    @else
        <span id="search-bar" class="d-none" data-url="{{ route("search.groups","") }}"></span>
    @endif

    @yield('content')
  
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    <script src="{{ asset("assets/plugins/tinymce/tinymce.min.js") }}"> </script>
    @yield('script')
    <script>

        $("#nav-search-btn").click(function (e) { 
            e.preventDefault();
            var searchurl = $("#search-bar").attr("data-url");
            var searchvalue = $("#nav-search-input").val();
            var searchvalue = searchvalue ? "/" + searchvalue : "";
            var searchurl = searchurl.concat(searchvalue);
            location.replace(searchurl);
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>


</body>
</html>