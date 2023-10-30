<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Models\Message;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = User::where('role','user')->get();
        return view('admin.user.index', compact('users'));
    }

    public function chats()
    {
        $userID = auth()->user()->id;
        $conversations = Conversation::where('receiver_id', $userID)->orderby('id','desc')->get();
        return view('admin.chats.index', compact('conversations'));
    }

    public function messageDetail($id)
    {
        $conversation = Conversation::where('id', $id)->first();
        return view('admin.chats.show', compact('conversation'));
    }

    public function message_reply(Request $request)
    {
        $userID = auth()->user()->id;
        $message = new Message();
        $message->user_id = $userID; 
        $message->message = $request->message;
        $message->conversation_id = $request->conversation_id;
        $message->save();
        toastr()->success('Reply Sent successfully');
        return redirect()->back();
    }
}
