<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmeController extends Controller
{
    public function setPassword($email)
    {
        return view('confirmation.password', compact('email'));
        // return view('client.index', compact('clients', 'cities'));
    }

    public function updatePassword(Request $requet) {
        $user = User::where('email', $email)->first();
    
        if (! $user)
            return redirect('/');
    
        $user->password = bcrypt($request->password);
        $user->save();
    
        return redirect('/home')->with('notification', 'Has confirmado correctamente tu correo!');
    }
}
