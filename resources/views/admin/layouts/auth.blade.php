<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("assets/plugins/bootstrap/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/custom.css") }}">
    @yield('css')
</head>
<body>
    @yield('content')

    <link rel="stylesheet" href="{{ asset("assets/plugins/jquery/jquery-3.7.1.min.js") }}">
    <link rel="stylesheet" href="{{ asset("assets/plugins/bootstrap/js/bootstrap.js") }}">
    @yield('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>
</html>