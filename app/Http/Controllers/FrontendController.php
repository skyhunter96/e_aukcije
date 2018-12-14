<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Auction;
use Carbon\Carbon;

class FrontendController extends Controller
{
    private $data = [];

    public function index(){
        $date = Carbon::now();
        $this->data['date'] = $date;
        return view('pages.home', $this->data);
    }

    public function logreg(){
        return view('pages.logreg');
    }

    //*************************** EMAIL VERIFICATION VIEW ******************************

    public function verify(){
        return view('emails.verifyUser');
    }

    public function login(Request $request){
        $user = $request->get('tbKorisnickoIme');
        $pass = $request->get('tbLozinka');
        $this->data['user'] = $user;
        $this->data['pass'] = $pass;
        return view('pages.login', $this->data);
    }

    public function admin_panel(){
        $this->data['user_count'] = User::count();
        $this->data['registered_users_count'] = User::registeredCount();
        $this->data['auction_count'] = Auction::count();
        return view('pages.adminp', $this->data);
    }

    public function auctions(){
        $auction = new Auction();
        $this->data['auctions'] = $auction->getAll();

//        foreach($this->data['auctions'] as $auction ){
//            $seconds = strtotime(date("Y-m-d H:i:s")) - strtotime($auction->end_date);
//            $days    = floor($seconds / 86400);
//            $hours   = floor(($seconds - ($days * 86400)) / 3600);
//            $minutes = floor(($seconds - ($days * 86400) - ($hours * 3600))/60);
//            $seconds = floor(($seconds - ($days * 86400) - ($hours * 3600) - ($minutes*60)));
//            $this->data['auctions']['time'] = $days.$hours.$minutes.$seconds;
//        }

        return view('pages.auctions', $this->data);
    }

    public function auctionForm(){
        return view('pages.auction_form');
    }

    public function timer(){
        return view('pages.timer');
    }

    public function postavke($id = null){
        $user = new User();
        $user->id = $id;
        $this->data['user'] = $user->getReturns();
        return view('pages.postavke', $this->data);
    }

}

