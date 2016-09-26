<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Word extends Model
{
    public static function getAll(){
        $res = DB::select('select * from Vocabulary');
        return $res;
    }
}
