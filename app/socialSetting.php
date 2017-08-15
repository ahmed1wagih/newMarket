<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class socialSetting extends Model
{
    protected $table = 'socialsetting';
    protected $fillable = [

		'name', 'ar_text', 'en_text', 'file'

    ];
}
