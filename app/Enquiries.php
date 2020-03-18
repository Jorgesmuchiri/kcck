<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiries extends Model
{


  public $fillable = ['name','email','phone', 'message'];


}
