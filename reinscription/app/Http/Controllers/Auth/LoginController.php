<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }
    public function create(Request $request)
    {
        if (isset ($_POST['valider'])) {
            $nom = $request->get('name');
            $cne = $request->get('CNE');
            $date_de_naissance = $request->get('Date');
            $password = $request->get('password');

            DB::insert('insert into students values(?,?,?,?,?)', array( $nom, $cne, $date_de_naissance, $password));

            return view('home');
        }
    }
}
