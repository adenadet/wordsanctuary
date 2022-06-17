<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Church\Branch;
use App\Models\Church\GivingType;

class ChurchController extends Controller
{
    public function branches(){
        return response()->json([
            'branches' => Branch::orderBy('state_id', 'ASC')->orderBy('name', 'ASC')->with('state')->with('minister')->get(),       
        ]);
    }
    
    public function givings(){
        return response()->json([
            'branches' => Branch::orderBy('name', 'ASC')->get(),
            'giving_types' => GivingType::orderBy('name', 'ASC')->get(),
        ]);
    }

    public function media(){

    }
    
}
