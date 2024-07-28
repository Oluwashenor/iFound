<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Item;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Auth;
use Illuminate\Support\Carbon;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $yesterday = Carbon::yesterday();
        // return $yesterday->diffForHumans();

        $messages = Message::with('sender')->where('receiver_id', Auth::user()->id)->get();
        return View('inbox',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'message' => ['required', 'string', 'max:255'],
            'item_id'=> ['required']
        ]);
        $item = Item::find($validatedData['item_id']);
        $alreadyMessage = Message::where('item_id',$validatedData['item_id'])->where('sender_id', Auth::user()->id)->where('receiver_id',  $item->user_id)->first();
        if($alreadyMessage != null){
            Sweetalert::info('Your message has been sent previously', 'Already Messaged');
            return redirect("/");
        }
        $message = Message::create([
            'message' => $validatedData['message'],
            'item_id'=> $validatedData['item_id'],
            'sender_id'=> Auth::user()->id,
            'receiver_id'=> $item->user_id,
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
