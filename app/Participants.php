<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participants extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','phone_no','location'];

    protected $table = 'participants';


}
