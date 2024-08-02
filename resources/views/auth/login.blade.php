@extends('layouts.auth-layout')

@section('content')
    <h1 class="mb-4 text-3xl font-bold text-black-500" style="font-weight: 500">
        Log In
    </h1>
    <form method="POST" action="/loginAction">
        @foreach ($errors->all() as $error)
        <div class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
            <strong class="font-bold text-red-700">Error!</strong>
            <span class="block text-red-700 sm:inline">{{ $error }}</span>
        </div>
        @endforeach
        {{csrf_field()}}
    <p class="mb-5 text-center">Welcome back!, enter your details</p>
   <input type="text" name="matric" id="matric" class="cus-input"
        placeholder="EU204202-000">
    <input type="password" name="password" id="password" class="cus-input"
        placeholder="**********">
    <button class="rounded-xl bg-[#F58D25] w-full py-4 px-3 mt-5 text-white">Login</button>
    </form>

    <div class="mt-20">
        <p>Don't have an Account? <span class="text-[#F58D25]"><a href="/register">Sign Up</a></span> </p>
    </div>
@endsection
