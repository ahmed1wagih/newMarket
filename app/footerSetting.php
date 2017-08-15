<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class footerSetting extends Model
{
    protected $table ='footersetting';
	protected $fillable =[
		'ar_name', 'en_name', 'ar_text', 'en_text', 'file'
	];
}
