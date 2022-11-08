<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $table = 'tb_transactions';
    protected $primarykey = 'id';
    protected $fillable = ['transaction-date',
                            'sales_id',
                            'paid_amount',
                            'balance',
                            'payment_method',
                            'transaction_amount',
                            'user_id',
                            ];
}
