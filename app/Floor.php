<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Floor extends Model
{
    use SoftDeletes;
    
    protected $table = "tblFloor";
    protected $primaryKey = "floorID";
    protected $softDelete = true;
    protected $dates = ['deleted_at'];
    
    public function Building(){
        return $this->belongsTo('App\Building','bldgID');
    }
    
    public function Stall(){
        return $this->hasMany('App\Stall','floorID');
    }
}
