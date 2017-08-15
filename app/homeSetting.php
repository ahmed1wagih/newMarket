<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homeSetting extends Model
{
	protected $table ='homesetting';
	protected $fillable =[
		'name', 'ar_text', 'en_text', 'file'
	];
}
