<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Auth;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function dashboard(){
        $foundItems = Item::where('found', 1)->get();
        $filename = "/storage/uploads/uploads/Qd8h1SE9WQ2tmWrp51CP7J3iaUoj37NRCsWM6tlZ.jpg";
        // return Storage::url("uploads/{$filename}");
        return View('welcome', compact('foundItems'));
    }

    public function contactfinder($id){
    
        $item = Item::find($id);
        return View('contactfinder', compact('item'));
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'tags' => ['required', 'string', 'max:255'],
            'date_found'=> ['required'],
            'found' => ['required', 'string', 'max:255'],
            'file' => 'required|mimes:jpg,png|max:2048'
        ]);
        $file = $request->file('file');
        $filename = $file->getClientOriginalName(); 
        $path = $file->store('public');
        
        $image = explode("/",$path)[1];
        $item = Item::create([
            'name' => $validatedData['name'],
            'tags' => $validatedData['tags'],
            'found' => $validatedData['found'],
            'description' => $validatedData['description'],
            'date_found' => $validatedData['date_found'],
            'user_id'=> Auth::user()->id,
            'image'=> $image
        ]);
        Sweetalert::success('Creation Successful', 'Success');
        return redirect("/");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
