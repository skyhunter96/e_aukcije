<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    private $data = [];

    public function login(Request $request){

        $rules = [
            'tbUsername' => 'required|alpha_num',
        ];

        $messages = [
            'tbUsername' => 'Morate uneti korisničko ime'
        ];

        $this->validate($request, $rules, $messages);

        $username = $request->get('tbUsername');
        $password = $request->get('tbPassword');

        $user = new User();
        $user->user = $username;
        $user->pass = $password;

        $loginUser = $user->getByUserAndPass();

        if(!empty($loginUser)){
            $request->session()->push('user', $loginUser);
            if($loginUser->user == 'adminko'){
                $request->session()->push('isAdmin', true);
            }
            if(!$loginUser->verified){
                $this->logout($request);
                return redirect('/')->with('error', 'Morate verifikovati nalog, poslali smo vam link na e-mail adresu!');
            }
            return redirect()->route('index')->with('success', 'Uspešno ste se ulogovali!');
        }
        return redirect('/')->with('error', 'Niste se registrovali');
    }

    public function logout(Request $request){
        $request->session()->forget('user');
        $request->session()->forget('isAdmin');
        $request->session()->flush();
        return redirect('/');
    }

}
