<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'tags' => ['required', 'string', 'max:255'],
            'date_found'=> ['required'],
            'found' => ['required', 'string', 'max:255']
        ]);
        $user = Item::create([
            'name' => $validatedData['name'],
            'tags' => $validatedData['tags'],
            'found' => $validatedData['found'],
            'description' => $validatedData['description'],
            'date_found' => $validatedData['date_found'],
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
