<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\User;
use App\Models\Talent;
use App\Models\talentBio;
use App\Models\Client;
use App\Mail\TalentRegisterMail;
use App\Mail\ClientRegisterMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

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
            'role' => $data['role'],
            'password' => Hash::make($data['password']),
        ]);
        
        $idUser = User::all()->last();
        $time = Carbon::now()->format('ymd');

        if($data['role'] == 'talent')
        {   
            Talent::create([
                'user_id' => $idUser->id,
                'nickname' => $idUser->name,
                'id_account' => $time.rand(0,999),
            ]);

            $talent = Talent::where('user_id', $idUser->id)->first();

            talentBio::create([
                'talent_id' => $talent->id,
            ]);

            $data = [
                'name' => $idUser->name,
                'body' => 'Telah Mendaftar Sebagai Talent Nihon Uwu, Mohon Admin Segera follow up',
            ];

            Mail::to('uwunihon@gmail.com')->send(new TalentRegisterMail($data));

            return $user;
        }

        if($data['role'] == 'client')
        {
            Client::create([
                'user_id' => $idUser->id,
                'nickname' => $idUser->name,
                'id_account' => $time.rand(0,999),
            ]);

            $data = [
                'name' => $idUser->name,
                'body' => 'Telah Mendaftar Sebagai Client Nihon Uwu.',
            ];

            Mail::to('uwunihon@gmail.com')->send(new ClientRegisterMail($data));

            return $user;
        }
        
    }
}
