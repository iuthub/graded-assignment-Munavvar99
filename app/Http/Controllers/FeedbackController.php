<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
class FeedbackController extends Controller
{
    public function saveFeedback(Request $req)
    {
        $feedback = new Feedback([
            'fname'=>$req->input('fname'),
            'lname'=>$req->input('lname'),
            'email'=>$req->input('email'),
            'comment'=>$req->input('comment')
        ]);
        $feedback->save();
        return redirect()->route('feedback.form')->with('info','Feedback saved');
    }
    public function showForm()
    {
        return view('contact');
    }
}
