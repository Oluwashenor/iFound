@extends('layouts.master')

@section('content')
<div class="absolute ml-[10%] px-4 flex flex-col mt-10 w-[1000px] h-[300px] rounded-2xl">
@if($foundItems->count() > 0)

    <span class="my-2">Items found by me</span>
   
    @foreach ($foundItems as $item)
    <?php
    $imageurl = "storage/{$item->image}";
   ?>
    <a href="/delete/{{$item->id}}"><div class="flex p-3 my-2 border-b-2">
        <div class="flex-none w-14 h-14">
            <img class="inline-block w-12 h-12 rounded-full ring-2 ring-white" src={{asset($imageurl)}} alt=""/>
        </div>
       
        <div class="text-2xl grow h-14">
            <div class="flex flex-col">
                <span>{{$item->user->name}} Found</span>
                <span>{{$item->name}} on {{$item->created_at}}</span>
            </div>
           
          </div>
          <div class="flex-none w-14 h-14">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 11V17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 11V17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 7H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>             
          </div>
    </div></a>
    @endforeach
    @else
<div class="absolute flex justify-center"><span >You have not posted any found items</span></div>

@endif

</div> 



@endsection