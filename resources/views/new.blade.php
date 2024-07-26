@extends('layouts.master')

@section('content')

<div class="absolute ml-[30%] top-24 p-4 flex flex-col mt-20 border w-[400px] h-[300px] justify-center rounded-2xl">
    <a href="/create"><div class="flex my-4">
        <div class="text-2xl grow h-14">
            Found an Item
          </div>
          <div class="flex-none w-14 h-14">
            <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M31.3869 26.0592L31.3869 14.6135L19.9412 14.6135" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.3591 30.6413L31.2266 14.7738" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                
          </div>
    </div></a>
    
    <a href="/report">
        <div class="flex my-4">
            <div class="text-2xl grow h-14">
                Lost an Item
              </div>
              <div class="flex-none w-14 h-14">
                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.3869 26.0592L31.3869 14.6135L19.9412 14.6135" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.3591 30.6413L31.2266 14.7738" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                
              </div>
        </div>
    </a>
</div>
       
@endsection

