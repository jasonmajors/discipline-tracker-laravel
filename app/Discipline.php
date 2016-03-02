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
                        'reason',
						'effective',
                        'description',
						'issued_by',
    				];

    protected $dates = ['effective'];

    public function employee()
    {
    	return $this->belongsTo(Employee::class);
    }
}
