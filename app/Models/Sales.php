<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'tb_sales';
    protected $primarykey = 'id';
    protected $fillable = ['name',
                            'address',
                            ];
}
