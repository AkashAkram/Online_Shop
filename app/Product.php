<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =  ['code', 'product_name','price', 'default_image', 'cat_id', 'created_at', 'updated_at'];

    protected $table = 'products';
}
