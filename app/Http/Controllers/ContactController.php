<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    // Mostrar el formulario
    public function showForm()
    {
        return view('contact');
    }

    // Enviar el correo
    public function sendEmail(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Enviar el correo
        Mail::to('cosicasen3d@gmail.com')->send(new ContactMail($validated));

        // Redirigir con mensaje de éxito
        return redirect()->back()->with('success', 'Correo enviado exitosamente!');
    }
}
