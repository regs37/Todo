<?php

namespace Todo;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $fillable = [
		'userid',
		'title',
		'description'
	];

    public function User(){
    	return $this->belongsTo("App\User");
    }
}
