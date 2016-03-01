<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    /**
    * The attributes that are mass-assignable
    *
    * @var array
    */
    protected $fillable = [	
                        'type',
						'effective',
                        'description',
						'issued_by',
    				];

    public function employee()
    {
    	return $this->belongsTo(Employee::class);
    }
}
