<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventoController extends Controller
{
    public function grid()
    {
        return view('admin.cadastros.evento.grid');
    }
}
