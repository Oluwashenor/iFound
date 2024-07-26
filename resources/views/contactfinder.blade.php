@extends('layouts.master')

@section('content')

<div class="absolute ml-[30%] mt-24 top-24 p-4 flex flex-col w-[400px] h-[300px] justify-center rounded-2xl">

       
<form method="POST" action="/sendMessage">
  @foreach ($errors->all() as $error)
  <div class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
      <strong class="font-bold text-red-700">Error!</strong>
      <span class="block text-red-700 sm:inline">{{ $error }}</span>
  </div>
  @endforeach
  {{csrf_field()}}
<p class="mb-5 text-center">Enter your details so you could be contacted by the finder</p>
  <input type="text" name="description" id="description" class="cus-input"
  placeholder="Further Description/Story">
  <input hidden name="item_id" type="number" value="{{$item->id}}">
<button class="rounded-xl bg-[#F58D25] text-white w-full py-4 px-3 mt-5">Send Message</button>
</form>

</div> 
@endsection

