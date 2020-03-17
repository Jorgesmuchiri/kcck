<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{


  public $fillable = ['id', 'enquiry_id', 'user_id', 'comment'];


}
