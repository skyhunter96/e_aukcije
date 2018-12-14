<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VerifyUser;
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{

    private $data = [];

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    //******************************* STORING NEW USER WITH REGULAR USER ROLE FOR REGISTERING **********************************

    public function store(Request $request)
    {

        // ************************** -- RULES -- ***************************

        $rules = [
            'tbEmail' => 'required|email|unique:users,email',
            'tbUser' => 'required|alpha_num|unique:users,user',
            'tbPass' => 'required|min:6',
            'tbPassConfirm' => 'required|same:tbPass',
            'tbNameSurname' => 'required|min:3',
            'tbPhone' => 'required|regex:/^[0-9]*$/'
        ];

        // ************************** -- MESSAGES -- ***************************

        $messages = [
            'required' => 'Polje :attribute je obavezno',
            'same' => 'Ponovljena lozinka nije ista kao i lozinka',
            'regex' => ':attribute nije u dozvoljenom formatu',
            'email' => 'Email nije u dobrom formatu',
            'tbPhone.regex' => 'Broj telefona mora biti zapisan brojevima i ne sme sadržati slova',
            'tbUser.regex' => 'Korisničko ime mora početi malim slovom, i ne sme imati razmake',
            'tbNameSurname.min' => 'Ime nije u ispravnom formatu',
            'min' => ':attribute mora imati minimum :min karaktera',
            'unique' => ':attribute je već iskorišćen/a'
        ];

        $this->validate($request, $rules, $messages);

        $email = $request->get('tbEmail');
        $username = $request->get('tbUser');
        $pass = $request->get('tbPass');
        $passConfirm = $request->get('tbPassConfirm');
        $nameSurname = $request->get('tbNameSurname');
        $phone = $request->get('tbPhone');

        try{
            $user = new User();
            $user->email = $email;
            $user->pass = $pass;
            $user->user = $username;
            $user->name_surname = $nameSurname;
            $user->phone = $phone;

            $result = $user->saveWithRegularUserRole();

            $verify_user = new VerifyUser();
            $result_for_id = $user->getByUserAndPass();
            $verify_user->user_id = $result_for_id->id;
            $verify_user->token = str_random(40);
            $user->token = $verify_user->token;
            $verify_user->create();

            Mail::to($user->email)->send(new VerifyMail($user));

         /*   Mail::send('emails.verifyUser', ['name' => 'Novica'], function($message){
                $message->('misteryx96@yahoo.com', 'Ja')->subject('Welcome');
            });  */

            if($result == 1){
                return redirect()->route('index')->with('success', 'Uspešno ste se registrovali');}
            else{
                return redirect()->route('index')->with('error', 'Neuspeh pri registraciji, molimo pokušajte opet!');}
        }
        catch (\Exception $exception){
            \Log::error('Error: ' . $exception->getMessage());
            return redirect('/')->with('error', 'Greška pri radu aplikacije, molimo pokušajte ponovo!');
        }

    }

    //*********************************** STORING NEW USER WITH ANY ROLE *****************************

    public function storeWithChosenRole(Request $request){

        // ************************** -- RULES -- ***************************

        /*

        $rules = [
            'tbEmail' => 'required|email|unique:users,email',
            'tbUsername' => 'required|alpha_num|unique:users,user',
            'tbPass' => 'required|min:6',
            'tbNameSurname' => 'required|min:3',
            'tbPhone' => 'required|regex:/^[0-9]*$/'
        ];

        // ************************** -- MESSAGES -- ***************************

        $messages = [
            'required' => 'Polje :attribute je obavezno',
            'same' => 'Ponovljena lozinka nije ista kao i lozinka',
            'regex' => ':attribute nije u dozvoljenom formatu',
            'email' => 'Email nije u dobrom formatu',
            'tbPhone.regex' => 'Broj telefona mora biti zapisan brojevima i ne sme sadržati slova',
            'tbUser.regex' => 'Korisničko ime mora početi malim slovom, i ne sme imati razmake',
            'tbNameSurname.min' => 'Ime nije u ispravnom formatu',
            'min' => ':attribute mora imati minimum :min karaktera',
            'unique' => ':attribute je već iskorišćen/a'
        ];

        $this->validate($request, $rules, $messages);

        */

        $userName = $request->get('tbUsername');
        $pass = $request->get('tbPass');
        $nameSurname = $request->get('tbNameSurname');
        $email = $request->get('tbEmail');
        $phone = $request->get('tbPhone');
        $city = $request->get('tbCity');
        $place = $request->get('tbPlace');
        $address = $request->get('tbAddress');
        $zip = $request->get('tbZip');
        $coupon = $request->get('tbCoupon');

        try{
            $user = new User();
            $user->user = $userName;
            $user->pass = $pass;
            $user->name_surname = $nameSurname;
            $user->email = $email;
            $user->phone = $phone;
            $user->city = $city;
            $user->place = $place;
            $user->address = $address;
            $user->zip = $zip;
            $user->coupon = $coupon;

            $result = $user->saveExtended();

            if($result == 1){
                return redirect()->route('index')->with('success', 'Uspesan unos');}
            else{
                return redirect()->route('index')->with('error', 'Neuspesan unos');}
        }
        catch (\Exception $exception){
            \Log::error('Greska: ' . $exception->getMessage());
        }
    }

    //*************************************** SYSTEM FOR USER VERIFICATION ****************************

    public function verifyUser($token){

        $verifyUser = new VerifyUser();
        //$verifyUser = VerifyUser::where('token, $token')->first();
        $verifyUser->token = $token;
        $verifyUser->getByToken();
        $user = new User();
        $user->id = $verifyUser->user_id;
        $user->get();

        if(isset($verifyUser)){
            if(!$user->verified){
                $user->updateVerifiedStatus();
                $status = "Uspešno ste verifikovali e-mail adresu. Sada se možete ulogovati";
            } else{
                $status = "Već ste se verifikovali.";
            }
        } else{
            return redirect('/')->with('error', "Vaš e-mail ne postoji");
        }

        return redirect('/')->with('status', $status);

    }

    //************************************* SHOW ALL USERS FOR ADMIN PANEL ****************************

    public function show($id = null)
    {
        $user = new User();
        $this->data['users'] = $user->getAll();
        if(!empty($id)){
            $user->id = $id;
            $this->data['user'] = $user->getReturns();
        }

        return view('pages.adminUsers2', $this->data);
    }

    public function edit($id)
    {
        //
    }

    //****************************** UPDATE A SINGLE USER ****************************

    public function update($id, Request $request)
    {
        $userName = $request->get('tbUsername');
        $pass = $request->get('tbPass');
        $nameSurname = $request->get('tbNameSurname');
        $email = $request->get('tbEmail');
        $phone = $request->get('tbPhone');
        $city = $request->get('tbCity');
        $place = $request->get('tbPlace');
        $address = $request->get('tbAddress');
        $zip = $request->get('tbZip');
        $coupon = $request->get('tbCoupon');

        $user = new User();
        $user->id = $id;
        $user->user = $userName;
        $user->pass = $pass;
        $user->name_surname = $nameSurname;
        $user->email = $email;
        $user->phone = $phone;
        $user->city = $city;
        $user->place = $place;
        $user->address = $address;
        $user->zip = $zip;
        $user->coupon = $coupon;

        $result = $user->update();

        if($result ==1){
            return redirect('/users')->with('message','Uspesan update!');
        }
        else {
            return redirect('/users')->with('message','Greska pri update-u!');
        }
    }

    public function updateByUser($id, Request $request){
        $userName = $request->get('tbUsername');
        $pass = $request->get('tbPass');
        $nameSurname = $request->get('tbNameSurname');
        $email = $request->get('tbEmail');
        $phone = $request->get('tbPhone');
        $city = $request->get('tbCity');
        $place = $request->get('tbPlace');
        $address = $request->get('tbAddress');
        $zip = $request->get('tbZip');
        $coupon = $request->get('tbCoupon');
        $pic = $request->file('tbPic');
        $user = new User();
        $user->id = $id;

        try {
            if(!empty($pic)) {
                $user_to_be_updated = $user->getReturns();
                File::delete($user_to_be_updated->img_path);
                $tmp_path = $pic->getPathname();
                $ext = $pic->getClientOriginalExtension();
                $picName = time() . '.' . $ext;
                $path = 'pics/' . $picName;
                $server_path = public_path($path);


                File::move($tmp_path, $server_path);
                $user->pic = $path;
            }
            if(empty($pic)){
                $user2 = new User();
                $user2->id = $id;
                $user_to_be_updated = $user2->getReturns();
                $user->pic = $user_to_be_updated->img_path;
            }
            $user->pass = $pass;
            $user->name_surname = $nameSurname;
            $user->phone = $phone;
            $user->city = $city;
            $user->place = $place;
            $user->address = $address;
            $user->zip = $zip;

            $result = $user->updateByUser();

            if ($result == 1) {
                return redirect('/postavke/' . $user->id)->with('message', 'Uspesan update!');
            } else {
                return redirect('/postavke/' . $user->id)->with('message', 'Greska pri update-u!');
            }
        }
        catch(\Exception $exception){
            \Log::error($exception->getMessage());
        }
    }

    //******************************* REMOVE A SPECIFIED USER FROM DB ****************************

    public function destroy($id)
    {
        $user = new User();
        $user->id = $id;

        $result = $user->delete();
        if($result == 1){
            return redirect('/users')->with('message','Uspesan delete!');
        }
        else {
            return redirect('/users')->with('message','Greska pri delete-u!');
        }
    }
}
