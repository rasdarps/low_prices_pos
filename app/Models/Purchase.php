<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded = [];
 
    public function purchase_payment(){
        return $this->belongsTo(PurchasePayment::class,'id','purchase_id');
    }

     public function purchase_details(){
        return $this->hasMany(PurchaseDetail::class,'purchase_id','id');
    }



}
 