<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiries extends Model
{


  public $fillable = ['name','email','phone_no', 'country', 'course', 'intake','advert','comment','admin_comment','status'];


}
