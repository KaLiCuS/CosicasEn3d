<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendMail(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Enviar el correo
        Mail::to('cosicasen3d@gmail.com')->send(new ContactFormMail($validated['name'], $validated['email'], $validated['message']));

        // Redirigir con un mensaje de éxito
        return back()->with('success', 'Tu mensaje ha sido enviado correctamente.');
    }
}
?>