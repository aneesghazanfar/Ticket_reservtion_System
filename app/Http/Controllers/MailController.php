<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestGmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('mail');
    }
    
    public function sendMail()
    {
        $details = [
            'title' => 'Mail from Train reservation',
            'body' => 'Hope you are doing great. Ticket booked. !Good Luck!'
        ];
       
        Mail::to('asadazizfreelancer@gmail.com')->send(new \App\Mail\TestGmail($details));
       
        return ("Email has been sent successfully.");
    }

    
}