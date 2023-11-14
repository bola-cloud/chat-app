<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Participants;
use App\Models\Message;
use App\Models\Conversation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function chat()
    {
        return view('chat');
    }
    public function message()
    {
        return Message::with('user')->get();
    }
    public function store(Request $request)
    {

        // $user=Auth::user();
        // $message= new Message;
        // $message->user_id=$user->id;
        // $message->message=$request->message;
        // $message->save();
        // broadcast(new SendMessage($user,$message))->toOthers();
        return 'message sent';
    }

}
