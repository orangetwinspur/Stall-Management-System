<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Utility extends Model
{
    use SoftDeletes;
    
    protected $table = "tblUtilities";
    protected $primaryKey = "utilID";
    protected $softDelete = true;
    protected $dates = ['deleted_at'];
    
    public function StallUtil(){
        return $this->hasMany('App\StallUtil','utilID');
    }
    
    public function Stall(){
        return $this->belongsToMany('App\Stall','tblStall_Utilities','stallID','utilID');
    }
}
