<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Conversation;
use App\Models\Feedback;

use App\Models\FeedbackCount;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackCreated;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $feedbacks = Feedback::paginate(6);
        return view("frontend.feedback.index", compact("categories","feedbacks"));
    }

    public function my_profile(){
        $userID = auth()->user()->id;
        $categories = Category::all();
        $feedbacks = Feedback::where('user_id',$userID)->paginate(6);
        return view("frontend.feedback.my_feedback", compact("categories","feedbacks"));
    }

    public function store(Request $request)
    {
        $userID = auth()->user()->id;
        $feedback = new Feedback;
        $feedback->user_id = $userID;
        $feedback->title = $request->title;
        $feedback->description = $request->description;
        $feedback->category_id = $request->category_id;
        $feedback->save();

        // Send an email notificaiton
        // $user = auth()->user();
        // Mail::to($user->email)->send(new FeedbackCreated($feedback));


        toastr()->success('Feedback Added successfully');
        return redirect('/');
    }

    public function feedback_detail($id){
        $feedback = Feedback::find($id);
        $feedbackCount = FeedbackCount::where('feedback_id', $id)->count(); 
        $comments = Comment::where('feedback_id', $id)->paginate(5);
        return view('frontend.feedback.detail', compact('feedback','comments','feedbackCount'));
    }

    public function comment_store(Request $request)
    {
        $userID = auth()->user()->id;
        $comment = new Comment;
        $comment->user_id = $userID;
        $comment->feedback_id = $request->feedback_id;
        $comment->comment = $request->comment;
        $comment->save();

        toastr()->success('Comment Added successfully');
        return redirect('feedback_detail/'.$request->feedback_id);
    }

    public function add_vote(Request $request)
    {
        $userID = auth()->user()->id;
        $chechkVoute = FeedbackCount::where('user_id', $userID)->where('feedback_id', $request->feedback_id)->count();
        if($chechkVoute == 0){
        $vote = new FeedbackCount();
        $vote->user_id = $userID;
        $vote->feedback_id = $request->feedback_id;
        $vote->save();
        toastr()->success('Vote Added successfully');
        return redirect('feedback_detail/'.$request->feedback_id);
        }else{
            toastr()->info('Vote Already Added successfully');
            return redirect('feedback_detail/'.$request->feedback_id);
        }  
    }


    public function chat()
    {
        $userID = auth()->user()->id;
        $conversations = Conversation::where('sender_id', $userID)->orderby('id','desc')->get();
        return view('frontend.chats.index', compact('conversations'));
    }

    public function chat_store(Request $request)
    {
        $userID = auth()->user()->id;
        $conversation = new Conversation();
        $conversation->sender_id = $userID;
        $conversation->receiver_id = 1; // admin
        $conversation->title = $request->title;
        if($conversation->save()){
            $message = new Message();
            $message->user_id = $userID;
            $message->conversation_id = $conversation->id;
            $message->message = $request->message;
            $message->save();
        }

        toastr()->success('Message Added successfully');
        return redirect('messages');
    }

    public function messageDetail($id)
    {
        $messages = Message::where('conversation_id', $id)->orderby('id','desc')->get();
        $conversation = Conversation::where('id', $id)->first();
        return view('frontend.chats.show', compact('messages','conversation'));
    }

    public function message_reply(Request $request)
    {
        $userID = auth()->user()->id;
        $message = new Message();
        $message->user_id = $userID; 
        $message->message = $request->message;
        $message->conversation_id = $request->conversation_id;
        $message->save();
        toastr()->success('Message Reply Added successfully');
        return redirect()->back();
    }
}
