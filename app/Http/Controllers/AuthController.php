<?php

namespace App\Http\Controllers;

use App\Models\sessionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function saveUser()
    {

        $userName = 'Sano Fiston';
        $userEmail = 'sanofiston04@gmail.com';

        $session = session::push('user', [
            'name' => $userName,
            'email' => $userEmail,
        ]);
        dd(session::get('user'));
        return view('index');
    }
}
