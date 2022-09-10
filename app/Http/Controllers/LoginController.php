<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

use function GuzzleHttp\Promise\all;

class LoginController extends Controller
{
    public function autenticar(Request $request) {

        $credenciales = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credenciales)) {    
            $posts = Post::all();
            $request->session()->regenerate();
            
            return view('home', ['posts' => $posts]);
        }


        return redirect()->back()->with('error_login', 'Las credenciales no son válidas');
        
    }


    public function logout() {
        session()->flush();
        Auth::logout();

        return redirect()->route('home');
    }

}
