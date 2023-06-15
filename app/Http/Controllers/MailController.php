<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use Exception;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        try {

            // Mail::to("martinwainaina001@gmail.com")->send(new MailNotify("Martin Wainaina", "martinwainaina001@gmail.com"));

            $data = [
                'to' => $request->email,
                'user_name' =>$request->name,
                'subject' => $request->subject,
                'body' => $request->message,
                'from' => 'martin@platdel.com',
                'from_name' => 'Martin Platdel',
                'reply_to' => 'marie@platdel.com',
                'reply_to_name' => 'Marie Platdel',
            ];

            Mail::to($data['to'])->send(new MailNotify($data));


            return response()->json([
                'message' => 'email sent successfully',
                'status_code' => 200
            ], 200);  
         
        } 
        catch (Exception $e) {

            dd($e);
            return response()->json([
                'message' => 'Sorry :-(  Could not send email....',
                'error' => $e,
                'status_code' => 500
            ], 500);
        }

    }
}
