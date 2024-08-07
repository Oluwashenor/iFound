@extends('layouts.master')

@section('content')
@if($messages->count() > 0)
<div class="absolute ml-[10%] px-4 flex flex-col mt-10 w-[1000px] h-[300px] rounded-2xl">

    <span class="my-2">My Messages</span>
    @foreach ($messages as $message)
    <a><div class="flex p-3 my-2 border-b-2">
        <div class="flex-none w-14 h-14">
            <img class="inline-block w-12 h-12 rounded-full ring-2 ring-white" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""/>
        </div>
       
        <div class="text-2xl grow h-14">
            <div class="flex flex-col">
                <?php
                $username = ucfirst(strtolower(explode(' ', $message->sender->name)[0]));
                ?>
                <div class="flex justify-between">
                    <span class="bold">{{ $username}} ({{$message->sender->phone}}) on {{$message->item->name}}</span>
                    <span class="italic">{{$message->created_at->diffForHumans()}}</span> 
                </div>
                <span>{{$message->message}}</span>
            </div>
           
          </div>
          <div class="flex-none w-14 h-14">
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.3869 26.0592L31.3869 14.6135L19.9412 14.6135" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.3591 30.6413L31.2266 14.7738" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                
          </div>
    </div></a>
    @endforeach

</div>
@else
<div class="absolute flex justify-center"><span >You dont have any messages</span></div>

@endif
@endsection
