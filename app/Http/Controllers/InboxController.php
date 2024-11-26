<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class InboxController extends Controller
{
    public function getEmails()
    {
        
        if (!Session::has('email')){
            return redirect("login");
        }
        $user_email = Session::get('email');
        
        $emails = Message::where('recipient_email', $user_email)->get();
        //dd($emails);
        //how can i see the value of $emails
        return view("inbox", ['emails' => $emails]);
    }

    public function getEmailsTest()
    {
        $emails = Message::all();
        return view("inbox", ['emails' => $emails]);
    }
}
