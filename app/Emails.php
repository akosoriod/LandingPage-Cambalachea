<?php

namespace Cambalachea;

use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'email',
    ];
}
