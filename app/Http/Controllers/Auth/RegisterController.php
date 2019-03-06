<?php

namespace App\Http\Controllers\Auth;

use App\User;

use App\Person;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
      

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('guest');
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    
    protected function validator(array $data)
    {
        
      //  return view('auth.register', ['person'=> $person]);
    
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function index (Request $request){
                /* aqui con  el argumento Request $request se  ve los datos del uusario 
        de la peticion
        en la siguiente linea se llama a la funcion authoraizeRole que esta en 
        el modelo User y 
         */
        $request->user()->authoraizeRole(['admin','foun']);
       
       $id=  $request->input("a");


       $person= Person::find($id);
       $name=$person->name;
 
        function generaCodigo($name){
            $exp_reg="[^A-Z0-9]";    
            return substr(preg_replace($exp_reg, "", md5(rand())) .
               preg_replace($exp_reg, "", md5(rand())) .
               preg_replace($exp_reg, "", md5(rand())),
               0, $name);
        }

        $usuario=substr($name,0,1).substr($name,strpos(" ",$name)+1,strlen($name))."_".generaCodigo(4);
        $password=generaCodigo(6);  


      // var_dump($password);
       $Apellido = explode (" ",$name);
       $Apellido = strtolower($Apellido[count($Apellido) -1]);
       $Inicial = substr($name,0,1);
       $Nick = strtolower($Inicial.$Apellido); 

        //var_dump($Nick);

//        $Nick = strtolower($Inicial.$Apellido); 
     return view('auth.register',['person'=> $person,'nick'=> $Nick,'password'=>$password]);
    }
    protected function create(array $data) 
    {
     
          $ip = request()->ip();
          $mac= "dc:85:de:85:6d:9f ";


 
       
   User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rol' => $data['rol'],
            'ip' => $ip,
            'mac' => $mac,
            'people_id' => $data['person'],
            'state' => 'activo',
        ]);
        return auth()->user();


    }
}
