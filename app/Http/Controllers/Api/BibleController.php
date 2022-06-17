<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Church\Branch;
use App\Models\Church\Testament;
use App\Models\Church\Book;
use App\Models\Church\GivingType;

class BibleController extends Controller
{
    public function index(){
        return response()->json([
            'books' => Book::all(), 'testaments' => Testament::with('books')->get(),       
        ]);
    }    
}
