<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminMail;
use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function Contatti () {
        return view('contatti');
    }

    public function send_email (Request $request) {
        $contactMail = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'messaggio' => $request->input('messaggio'),
        ];

        Mail::to('miamail@mail.it')->send(new AdminMail($contactMail));

        return redirect()->back()->with('message', 'E-mail inviata correttamente.');
    }
}
