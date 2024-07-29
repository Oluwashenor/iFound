@extends('layouts.master')

@section('content')
@if($foundItems->count() > 0)
    <div class="absolute ml-[10%] px-4 flex flex-col mt-10 w-[1000px] h-[300px] rounded-2xl">
    <div class="grid grid-cols-3 gap-8">
    @foreach ($foundItems as $item)
    <?php
     $imageurl = "storage/{$item->image}";
    ?>
    <a href="/contactfinder/{{$item->id}}">
    <div class="flex flex-col items-center mt-6">
        <div class="w-[180px] h-[180px]">
            <img class="object-fill" src={{asset($imageurl)}} alt="upload image">
        </div>
        <div class="flex flex-col">
            <span class="italic">{{$item->user->name}} <span class="bold"> Found </span> </span>
            <span>{{$item->name}} on {{$item->created_at}}</span>
        </div>
    </div>
    </a>
    @endforeach
    </div>
  </div>


@else
<div class="absolute flex justify-center"><span >There are currently no items for claiming</span></div>

@endif
@endsection
