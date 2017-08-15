<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class termsSetting extends Model
{
    protected $table = 'termssetting';
    protected $fillable = [

		'name', 'ar_text', 'en_text', 'file'

    ];
}
