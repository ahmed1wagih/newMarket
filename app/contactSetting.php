<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class contactSetting extends Model
{
    protected $table = 'contactsetting';
    protected $fillable = [

		'name', 'ar_text', 'en_text', 'file'

    ];
}
