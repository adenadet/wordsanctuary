<?php

namespace App\Models\Church;

use App\Models\Structure;

class Branch extends Structure {
    protected $primaryKey = 'id';
    protected $table = 'branches';
    protected $fillable = array('name', 'location', 'unique_id', 'current', 'status', 'minister_id');
	
    public function users(){
    	return $this->hasMany('App\Models\User', 'branch_id', 'id');
	}

	public function state(){
		return $this->belongsTo('App\Models\State', 'state_id', 'id');        
	}

    public function minister(){
		return $this->belongsTo('App\Models\User', 'minister_id', 'id');        
	}
}