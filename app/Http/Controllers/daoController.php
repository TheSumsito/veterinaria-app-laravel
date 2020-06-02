<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daoController extends Controller
{
    public function home(){
        return \view('home');
    }

    public function quienes_somos(){
        return \view('quienes_somos');
    }

    public function nuestros_servicios(){
        return \view('nuestros_servicios');
    }

    public function nuestros_planes(){
        return \view('nuestros_planes');
    }

    public function contacto(){
        return \view('contacto');
    }
}
