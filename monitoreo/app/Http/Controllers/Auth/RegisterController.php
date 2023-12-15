<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Depto;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class RegisterController extends Controller
{
    use RegistersUsers;

    // Resto del código del controlador...

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'departamento_id' => $data['departamento_id'],
        ]);

       
        $departamento = $user->Depto;

        

        return $user;
    }

    
    protected function validator(array $data)
    {
        // Validación personalizada para el formulario de registro
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'departamento_id' => ['required', 'integer'],
        ]);
    }

    public function showRegistrationForm()
    {
        $departamentos = Depto::all();
        return view('auth.register', compact('departamentos'));
    }

}
