<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('mipagina');
    }

    public function prueba(): string{
        return view('welcome_message');
    }

    public function verOtra(): string{
        return view('otrapagina');
    }

    
    public function nueva(): string{
        return view('nueva');
    }

    public function login(): string{
        return view('login');
    }

}

    
    