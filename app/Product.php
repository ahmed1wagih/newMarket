<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';
	protected $fillable = [
	'type', 'name', 'cat_id', 'text', 'price', 'user',
	'email', 'phone', 'file', 'country', 'city'

	];




public function category(){
     	return $this->belongsTo('App/category','product');
     }


public function image(){
    		return $this->hasMany(Image::class,'product_id');
    	}     
}
