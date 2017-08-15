<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aboutSetting extends Model
{
    protected $table ='aboutsetting';
	protected $fillable =[
		'name', 'ar_text', 'en_text', 'file'
	];
}
