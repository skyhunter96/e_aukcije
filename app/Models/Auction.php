<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Auction
{

    public $id;
    public $name;
    public $descript;
    public $meta_name;
    public $meta_keyword;
    public $price;
    public $pic;
    public $end_date;
    public $offers;
    public $offered_by;

    public function getAll(){
        $result =
            DB::table('auctions')
                ->select('*')
                ->get();
        return $result;
    }

    public function get(){
        $result =
            DB::table('auctions')
                ->select('*')
                ->where('id', '=', $this->id)
                ->first();
        return $result;
    }

    public function getSecs(){
        $result =
            DB::table('auctions')
                ->select('end_date')
                ->where('id', '=', $this->id)
                ->first();
        return $result;
    }

    //********************** COUNTS NUMBER OF AUCTIONS *****************************

    public static function count(){
        $result =
            DB::table('auctions')
                ->count();
        return $result;
    }

    public function increment($id){
        $result =
            DB::table('auctions')
                ->where('id', $id)
                ->update([
                    'offers' => DB::raw('offers + 1'),
                    'offered_by' => $this->offered_by,
                    'end_date' => $this->end_date
                ]);
        return $result;
    }

    public function store(){
        $result =
            DB::table('auctions')
                ->insert([
                    'name' => $this->name,
                    'descript' => $this->descript,
                    'pic' => $this->pic,
                    'end_date' => $this->end_date
                ]);
        return $result;
    }

    public function delete(){
        $result = DB::table('auctions')
            ->where('id', $this->id)
            ->delete();
        return $result;
    }

}
