<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactosController extends Controller
{
    public function contactos()
    {
        $people = ['alcides', 'manuel', 'nunes', 'teixeira'];

        return view('contactos', compact('people'));
    }

}
