@extends('layouts.master')

@section('content')
       
<div class="absolute ml-[10%] px-4 flex flex-col mt-10  rounded-2xl">
    @if(isset($foundItems) && $foundItems->count() > 0)
        
        <div class="grid grid-cols-3 gap-8">
        @foreach ($foundItems as $item)
        <?php
         $imageurl = "storage/{$item->image}";
        ?>
        <a href="/contactfinder/{{$item->id}}">
        <div class="flex flex-col items-center mt-6">
            <div class="">
                <img class="object-contain w-[180px] h-[180px]" src={{asset($imageurl)}} alt="upload image">
            </div>
            <div class="flex flex-col">
                <span class="italic">{{$item->user->name}} <span class="bold"> Found </span> </span>
                <span>{{$item->name}} on {{$item->created_at}}</span>
            </div>
        </div>
        </a>
        @endforeach
        </div>
    
    
    
    @else
    </div>
    @endif


@endsection


@section('topElement')
<form action="/search" method="GET">
    <div class="flex items-center justify-center space-x-3 align-middle border">
        <input type="text" name="search" id="email" class="w-full px-2 py-4 bg-white rounded-md shadow-sm"
        placeholder="Search" required>
        <button  class="rounded-xl bg-[#F58D25] w-[100px] py-4 px-3 text-white">Search</button>
    </div>
</form>
    @endsection