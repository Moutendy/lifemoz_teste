<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use App\Mail\Registermail;
use Illuminate\Support\Facades\Mail;



class Authentification extends Controller
{
    //
    //
    public function registerform(Request $request)
    {
        return view('connexion.register');
    }

    public function loginform(Request $request)
    {
        return view('connexion.login');
    }


    public function register(Request $request)
    {
        $fields=$request->validate([
            'name'=>'required|string',
            'email'=>'required|string|unique:users,email',
            'password'=>'required|string|confirmed'
            ]);

            $user = User::create([
               'name'=>$fields['name'],
               'email'=>$fields['email'],
               'password'=>bcrypt($fields['password'] )  ]);

               $token = $user->createToken('myapptoken')->plainTextToken;

               $response =[
                'user'=>$user,
                'token'=>$token];

                $this->sendemail($fields['email']);

                if(response($response,201))
                return redirect(RouteServiceProvider::HOME)->with('success', 'Bienvenu!');

    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        return redirect('loginform')->with('success', 'Bienvenu!');
    }

    public function sendemail($email)
{
    Mail::to($email)->send(new Registermail($email));
    // return view('pages.home');

}

    public function login(Request $request)
    {
        $fields=$request->validate([

            'email'=>'required|string',
            'password'=>'required|string',
            ]);

            $user = User::where('email',$fields['email'])->first();

            if(!$user || !Hash::check($fields['password'],$user->password))
            {
               return response([
                'message'=>'Bas creds'
               ],401);
            }
               $token = $user->createToken('myapptoken')->plainTextToken;

               $response =[
                'user'=>$user,
                'token'=>$token];

                if(response($response,201))
                return redirect(RouteServiceProvider::HOME)->with('success', 'Bienvenu!');
    }
}
