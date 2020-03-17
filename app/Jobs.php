<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['company_name',
        'title','category','expertise_level','no_of_workers','description','rate','transport','lunch','fname','lname','phone','email'
    ];

    protected $table = 'jobs';

    public $timestamps = false;
}
