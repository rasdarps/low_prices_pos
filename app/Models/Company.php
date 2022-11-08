<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'tb_company';
    protected $primarykey = 'id';
    protected $fillable = ['comp_name',
                            'comp_address',
                            'comp_phone',
                            'comp_email',
                            ];
}
