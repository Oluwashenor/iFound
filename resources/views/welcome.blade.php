@extends('layouts.master')

@section('content')
<div class="absolute ml-[10%] px-4 flex flex-col mt-10 w-[1000px] h-[300px] rounded-2xl">
@if($foundItems->count() > 0)
    
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
<div class="absolute flex justify-center"><span >There are currently no items for claiming</span></div>
</div>
@endif
@endsection
