@extends('layouts.master')

@section('content')

<div class="absolute ml-[30%] top-24 p-4 flex flex-col mt-10 w-[400px] h-[300px] justify-center rounded-2xl">       
<form method="POST" action="/createFoundAction" enctype="multipart/form-data">
  @foreach ($errors->all() as $error)
  <div class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
      <strong class="font-bold text-red-700">Error!</strong>
      <span class="block text-red-700 sm:inline">{{ $error }}</span>
  </div>
  @endforeach
  {{csrf_field()}}
<p class="mb-5 text-center">Enter the details of the Item you found</p>
<input type="text" name="name" id="name" class="cus-input"
  placeholder="Name of Item">
  <input type="date" name="date_found" id="date_found" class="cus-input"
  placeholder="Date Found">
  <input type="file" name="file" id="email" class="cus-input"
  placeholder="Item Found">
  <input type="text" name="tags" id="tags" class="cus-input"
  placeholder="Tags">
  <input type="text" name="description" id="description" class="cus-input"
  placeholder="Further Description/Story">
  <input hidden name="found" type="number" value="1">
<button class="rounded-xl bg-[#F58D25] text-white w-full py-4 px-3 mt-5">Create</button>
</form>

</div> 
@endsection

