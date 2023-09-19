<?php

namespace App\Controllera;

class WelcomeController extends BaseController
{
    public function index()
    {
        return view('welcome_view');
    }
}