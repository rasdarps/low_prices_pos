<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesDetails extends Model
{
    use HasFactory;

    protected $table = 'tb_sales_details';
    protected $primarykey = 'id';
    protected $fillable = ['prod_id',
                            'sales_id',
                            'quantity',
                            'unit_price',
                            'discount_id',
                            'amount',
                            ];
}
