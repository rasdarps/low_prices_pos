<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Product extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $table = 'tb_products';
    protected $primarykey = 'id';
    protected $fillable = [
        'name', 'cat_id', 'unit_id', 'stock_qty', 'price', 're_order'
    ];
}