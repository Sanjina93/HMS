<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomMailExampleController extends Controller
{
    //

    public function sendTestMail()
    {

        $header = 'Test Email';

        $body = 'This is a Test Email Wit Custom Template';

        Mail::to('suraznep@gmail.com')->send(new TestMail($header , $body));
    }
}
