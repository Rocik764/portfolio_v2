<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact(ContactRequest $request)
    {
        $recipient = [
            [
                'email' => config('mail.form.address'),
                'name'  => config('mail.form.name'),
            ]
        ];

        Mail::to($recipient)->send(new ContactMail($request->validated()));

        return response()->json([
            'success' => __('index.contact.success'),
        ]);
    }
}
