<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest'])->only('index');
    }
    public function index()
    {
        $titulo = 'Login';
        return view('login', compact('titulo'));
    }
    public function logear(Request $request)
    {
        $credenciales = $request->only("name", "password");
        if (Auth::attempt($credenciales)) {
            Alert::success('Sesion ingresada con Exito', ':D');
            return redirect()->route('inicio');
        } else {
            Alert::error('Datos Erroneos, revisa porfavor', ':C');
            return back()->withInput($credenciales);
        }
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
    public function crearUsuario()
    {
        $item = new User();
        $item->name = 'Dan';
        $item->password = Hash::make('12345');
        $item->save();
        return $item;
    }
}
