<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stall extends Model
{
    use SoftDeletes;
    
    protected $table = "tblStall";
    protected $primaryKey = "stallID";
    protected $softDelete = true;
    protected $dates = ['deleted_at'];
    public $incrementing = false;
    
    public function StallType(){
        return $this->belongsTo('App\StallType','stypeID');
    }
    
    public function Floor(){
        return $this->belongsTo('App\Floor','floorID');
    }
    
    public function Utility(){
        return $this->belongsToMany('App\Utility','tblStall_Utilities','utilID','stallID');
    }
    
    public function StallUtil(){
        return $this->hasMany('App\StallUtil','stallID');
    }
}
