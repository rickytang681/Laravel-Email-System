<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MessageController extends Controller
{
    public function showMessageForm()
    {
        if (!Session::has('email')){
            return redirect("login");
        }
        return view('newMessages');
    }

    public function sendMessages(Request $req)
    {
        $req->validate([
            'getEmail' => 'required|email', 
            'getHeader' => 'required',
            'getContent' => 'required',
        ]);

        
        if ($this->checkExistingAccount($req->input('getEmail'))) {
            $data = new Message;
            $data->sender_email = Session::get('email');
            $data->recipient_email = $req->input('getEmail');
            $data->header = $req->input('getHeader');
            $data->content = $req->input('getContent');
            $data->save();
        }
        
        return redirect("newMessages");
    }

    public function checkExistingAccount($email)
    {
        return DB::table('users')->where('email', $email)->exists();
    }

    public function showAllMessage()
    {
        $mesej = Message::all();
        return view("author", ['messages'=>$mesej]);
    }

    function deleteMessage($id)
    {
        $data = Message::find($id);
        if(Gate::allows("isAuthor")){
            $data->delete();
        }else{
            dd("You are not Author");
        }
        return redirect("author");
    }

    function updateMessage(Request $req)
    {
        $data = Message::find($req->id);
        $data -> header = $req -> header;
        $data -> sender_email = $req -> sender_email;
        $data -> recipient_email = $req -> recipient_email;
        $data -> content = $req -> content;
        if(Gate::allows("isAuthor")){
            $data->save();
        }else{
            dd("You are not Author");
        }
        return redirect("author");
    }

    function showUpdate($id)
    {
        $data = Message::find($id);
        return view("updateMessage", ['data'=>$data]);
    }
}
