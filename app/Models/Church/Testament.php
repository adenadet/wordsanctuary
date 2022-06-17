<?php

namespace App\Models\Church;

use Illuminate\Database\Eloquent\Model;

class Testament extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'bible_testaments';
    protected $fillable = array('name', 'short', 'deleted_by', 'deleted_at');
	
    public function books(){
    	return $this->hasMany('App\Models\Church\Book', 'testament', 'short');
	}
}