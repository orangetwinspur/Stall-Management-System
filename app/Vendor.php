<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //

    protected $table = "tblvendor";
    protected $primaryKey = "venID";

 	public function Rent(){
 		return $this->belongsTo('App\Rent','rentID');
 	}
}
