<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = [
    	'name', 'text', 'file', 'color'
    ];

    public function product(){
    		return $this->hasMany('app\product','Package');
    	}
}
