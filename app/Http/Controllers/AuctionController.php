<?php

namespace App\Http\Controllers;

use App\Events\AuctionMade;
use Illuminate\Http\Request;
use App\Models\Auction;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AuctionController extends Controller
{

    private $data = [];

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $name = $request->get('tbName');
        $desc = $request->get('taDesc');
        $end_date = $request->get('tbDate');
        $pic = $request->file('tbPic');

        $tmp_path = $pic->getPathname();
        $ext = $pic->getClientOriginalExtension();
        $picName = time() . '.' . $ext;
        $path = 'pics/' . $picName;
        $server_path = public_path($path);


        File::move($tmp_path, $server_path);

        $auction = new Auction();
        $auction->name = $name;
        $auction->descript = $desc;
        $auction->end_date = $end_date;
        $auction->pic = $path;
        $auction->store();
        //dd($auction);
    }

    public function show($id)
    {
        $auction = new Auction();
        $auction->id = $id;
        $this->data['auction'] = $auction->get();
        return view('pages.auction', $this->data);
    }

    public function showForAdmin(){
        $auction = new Auction();
        $this->data['auctions'] = $auction->getAll();
        return view('pages.auctionsForAdmin', $this->data);
    }

    public function offer($id, Request $request){
        $auction = new Auction();
        $auction->id = $id;

        if(Carbon::parse($auction->get()->end_date) < Carbon::now())
            return redirect()->route('index');

        //********* I AKO JE POSLEDNJI MINUT DODAJ ******************

        
        else {

            $offered_by = $request->session()->get('user', 'id')[0];
            $auction->offered_by = $offered_by->id;

            $auction->end_date = Carbon::parse($auction->get()->end_date)->addSecond(7);

            $auction->increment($id);

            //AuctionMade::dispatch();

            return redirect()->route('auctionSingle', ['id' => $id]);
            //return url('/auctions/'.$auction->id);
        }
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $auction = new Auction();
        $auction->id = $id;

        $result = $auction->delete();
        if($result == 1){
            return redirect('/admin_auctions_show')->with('message','Uspesan delete!');
        }
        else {
            return redirect('/admin_auctions_show')->with('message','Greska pri delete-u!');
        }
    }
}
