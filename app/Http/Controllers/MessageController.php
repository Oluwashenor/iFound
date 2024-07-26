<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Auth;

class MessageController extends Controller
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
            'description' => ['required', 'string', 'max:255'],
            'item_id'=> ['required']
        ]);
        $alreadyMessage = Message::where('item_id',$validatedData['item_id'])->where('user_id', Auth::user()->id)->first();
        if($alreadyMessage != null)
        Sweetalert::info('Your message has been sent previously', 'Already Messaged');
        return redirect("/");
        $message = Message::create([
            'description' => $validatedData['description'],
            'item_id'=> $validatedData['item_id'],
            'user_id'=> Auth::user()->id,
            
        ]);
        Sweetalert::success('Your message has been sent successfully', 'Success');
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
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
