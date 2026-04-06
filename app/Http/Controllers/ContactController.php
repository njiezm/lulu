<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactRequest;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'nullable|string',
            'message' => 'nullable|string|max:1000',
        ]);

        // Ici, vous enverriez un email
        // Mail::to('contact@lulubarber.fr')->send(new ContactRequest($validated));

        // Redirection avec message de succès
        return redirect()->route('contact')->with('success', 'Votre demande a bien été envoyée ! Je vous contacterai dans les plus brefs délais.');
    }
}
