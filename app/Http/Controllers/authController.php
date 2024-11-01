<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class authController extends Controller
{
    public function inscriprion(){
        return view('inscription');
    }

    public function do_inscription(Request $request){
       
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user=new User;
        $user->email = $credentials['email'];
        $user->password= bcrypt($credentials['password']);
        
        $user->save();
        
        return route('home');
    }

    public function do_login(Request $request){
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

       // dd($credentials);

        //verification des parametres et authentification de l'utilisayeur
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();;
            //dd(Auth::user()->photo);

            return redirect()->intended(route('dashboard'))->with('msg', 'Vous êtes connecté à votre compte!');
        }

        return redirect()->back()->with('erreur', 'Parametre de connexion incorret !')->onlyInput('phone');
    }
}
