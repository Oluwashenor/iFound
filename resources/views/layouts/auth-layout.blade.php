<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/satoshi" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container flex flex-col justify-between px-10 mx-auto">
        <div class="flex flex-col mx-auto w-[380px] justify-center items-center mt-20">
            <p class="mb-2">iFound</p>
            
            @yield('content')
            
        </div>

    </div>
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('sweetalert::sweetalert')

</html>
