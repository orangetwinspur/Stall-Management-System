<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StallUtil extends Model
{
    use SoftDeletes;
    
    protected $table = "tblStall_Utilities";
    protected $primaryKey = "utilstallID";
    protected $softDelete = true;
    protected $dates = ['deleted_at'];
    
    public function Utility(){
        return $this->belongsTo('App\Utility','utilID');
    }
    
    public function Stall(){
        return $this->belongsTo('App\Stall','stallID');
    }
}
