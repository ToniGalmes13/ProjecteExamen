<?php

namespace App\Http\Controllers;

use App\Mail\emailMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class emailController extends Controller
{
    //

    public function store(Request $request)
    {

        $correo = new emailMailable($request->all());


        Mail::to('correodelusuario@gmail.com')->send($correo);

        return 'Mensaje enviado';
    }
}
