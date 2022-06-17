<?php 

namespace App\Models\Church;

use Illuminate\Database\Eloquent\Model;
use App\Models\Structure;

class Service extends Structure {
    protected $primaryKey = 'id';
    protected $table = 'church_services';
    protected $fillable = array( 'name', 'description', 'status', 'time', 'created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at');
}
