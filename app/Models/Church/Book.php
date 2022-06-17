<?php

namespace App\Models\Church;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'bible_books';
    protected $fillable = array('name', 'testament', 'chapters', 'deleted_at');
	
}
