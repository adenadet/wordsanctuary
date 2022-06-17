<?php

namespace App\Models\Church;

use App\Models\Structure;

class GivingType extends Structure
{
    protected $primaryKey = 'id';
    protected $table = 'church_giving_types';
    protected $fillable = array('name', 'status');
	
    public function users(){
    	return $this->hasMany('App\Models\User', 'branch_id', 'id');
	}

}
