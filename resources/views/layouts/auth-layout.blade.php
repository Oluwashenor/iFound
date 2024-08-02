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
        <div class="flex flex-col mx-auto w-[380px] justify-center items-center">
            <div class="">
                <img class="object-contain w-[120px] h-[120px]" src={{asset('storage/logo.png')}} alt="upload image">
            </div>
            <p class="mb-2">iFound</p>
            
            @yield('content')
            
        </div>

    </div>
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('sweetalert::sweetalert')

</html>
