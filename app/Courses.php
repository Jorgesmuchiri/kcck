<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Courses extends Model
{
    protected $fillable = [
        'topic', 'description', 'activities', 'resources','competence'
    ];

        protected $table = 'courses';
}