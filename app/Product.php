<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function path(){
        return url('product/'. $this->id); // for enter in product
    }

    protected $table = 'product';
    protected $fillable = [
        'productName', 'image', 'description',
    ];
}
