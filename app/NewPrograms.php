<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewPrograms extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','phone_no', 'country', 'course','category'];

    protected $table = 'program_enquiries';


}
