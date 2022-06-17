<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Structure {
    protected $primaryKey = 'id';
    protected $table = 'departments';
    protected $fillable = array('description', 'name', 'status', 'hod_id', 'created_by', 'updated_by');
	
    public function users(){
    	return $this->hasMany('App\Models\User', 'department_id', 'id');
		}
	public function hod(){
		
		}
	}