@extends('layouts.auth-layout')

@section('content')

<h1 class="mb-4 text-3xl font-bold text-black-500" style="font-weight: 500">
    Create Account
</h1>
<form method="POST" action="/registerAction">
    @foreach ($errors->all() as $error)
    <div class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
        <strong class="font-bold text-red-700">Error!</strong>
        <span class="block text-red-700 sm:inline">{{ $error }}</span>
    </div>
    @endforeach
    {{csrf_field()}}
<p class="text-center">Please lets have your details</p>
<input type="text" name="name" id="name" class="cus-input" placeholder="Full Name">
<input type="text" name="email" id="email" class="cus-input" placeholder="badbish@gmail.com">
<input type="text" name="matric" id="matric" class="cus-input" placeholder="Matric Number">
<input type="text" name="password" id="password" class="cus-input" placeholder="***********">
<input type="text" name="password_confirmation" id="re_password" class="cus-input" placeholder="**********">
<button class="rounded-xl bg-[#F58D25] w-full text-white py-4 px-3 mt-5">Sign Up</button>


<div class="mt-20">
    <p>Already have an Account? <span class="text-[#F58D25]"><a href="/login">Log In</a></span> </p>
</div>
</form>
@endsection
