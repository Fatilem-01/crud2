<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User ;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');    
    }
    public function registration()  
    {
        return view('auth.registration');
    }
    public function logout()  
    {
    Session::flush();
    Auth::logout();
    return redirect('login');
    }
    public function postRegistration(Request $request)
    {
        $request->validate([
          'name'=>'required',
          'email'=>'required|email|unique:users',
          'password'=>'required|min:8|confirmed',
        ]);
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $createUser=$this->create($data);
        return redirect('login')->withSuccess('You are registered Successfuly');
    }
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email'=>$data['email'],
            'password'=>$data['password']
        ]);
    }
    public function postLogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
          ]);
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            return redirect('employee');
        } else {
            return redirect('login')->withErrors(['email' => 'Invalid email or password']);
        }
    }
}
