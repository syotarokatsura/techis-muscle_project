<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Basic;
use App\Models\Health;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Services\Service;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $healths = new Health(); //Healthモデルから取得
        $healths->user_id = $user['id'];
        $healths->weight = $data['weight'];

        $service = new Service();
        //BMI計算
        $bmi = $service->bmi($data['weight'], $data['height']);
        $healths->bmi = $bmi;

        $healths->measurement_date = now();
        $healths->save();

        $basics = new Basic();
        $basics->user_id = $user['id'];
        $basics->name = $data['name'];
        $basics->gender = $data['gender'];
        $basics->age = $data['age'];
        $basics->height = $data['height'];
        $basics->save();

        return $user;
    }
}
