<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
	//$productimage->product
    public function product(){
    	return $this->belongsTo(Product::Class);
    }
}
