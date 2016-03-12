<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
    * The attributes that are mass-assignable
    *
    * @var array
    */
    protected $fillable = [	
                        'emp_num', 
						'firstname',
						'lastname',
						'dept',
						'title',
    				];
    /**
    * Get all the disciplines for the employee
    */
    public function disciplines()
    {
    	return $this->hasMany(Discipline::class);
    }
}
