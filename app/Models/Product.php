<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'product_id';
    protected $table = 'Product';
    public $timestamps = true;
    protected $fillable = ['name', 'price', 'description', 'stock'];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
}
