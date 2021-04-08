<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        Mail::to(config('mail.contact'))
            ->send(new ContactMail(
                $request->input('email'),
                $request->input('name'),
                $request->input('message')
            ));

        return 'ok';
    }
}
