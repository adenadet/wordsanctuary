<?php

namespace App\Models\Church;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'events';
    protected $fillable = array('title', 'image', 'content', 'created_by', 'deleted_by', 'deleted_at');
	
    public function author(){
    	return $this->belongsTo('App\Models\User', 'created_by', 'id');
	}
}
