<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fee extends Model
{
    use SoftDeletes;
    
    protected $table = "tblFee";
    protected $primaryKey = "feeID";
    protected $softDelete = true;
    protected $dates = ['deleted_at'];
    
    public function Building(){
        return $this->belongsToMany('App\Bill','feeID');
    }
}
