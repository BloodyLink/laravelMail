<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailContacto;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function envioContacto(Request $request){
        
        Mail::to('contact@test.com')->send(new MailContacto ($request));

        return "OK";
    }
}
