<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','phone_no','partnership_area'];

    protected $table = 'partners';


}
