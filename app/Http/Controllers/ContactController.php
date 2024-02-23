<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function sendEmail(Request $request)
    {
        // Valider les données du formulaire ici

        Mail::to('pmdustfly@orange.fr')->send(new ContactFormMail($request->all()));

        // Rediriger avec un message de succès ou d'échec
        $request->session()->flash('alert', 'Le mail à bien été envoyé.');

        return back()->withInput();
    }

}
