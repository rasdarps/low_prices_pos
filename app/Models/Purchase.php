<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'purchase_no',
        'date',
        'description',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'date' => 'date',
        'status' => 'integer',
    ];

    // User relationships
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    // Existing relationships
    public function purchase_payment(){
        return $this->belongsTo(PurchasePayment::class,'id','purchase_id');
    }

    public function purchase_details(){
        return $this->hasMany(PurchaseDetail::class,'purchase_id','id');
    }
}
