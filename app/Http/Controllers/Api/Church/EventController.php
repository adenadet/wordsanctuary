<?php

namespace App\Http\Controllers\Api\Church;

use App\Http\Controllers\Controller;
use App\Models\Church\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->with('author')->paginate(10);
        return response()->json(['events' => $events]);
    }

    public function store(Request $request)
    {
        //Verify Input
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'street' => 'sometimes',
            'street2' => 'sometimes',
            'city' => 'required',
            'state_id' => 'numeric',
            'area_id' => 'numeric',
            'phone' => 'numeric',
            'alt_phone' => 'nullable|numeric',
            'branch_id' => 'required|numeric',
            'sex' => 'required|string',
            'dob' => 'required|date',
        ]);

        
        //Do Computations

        //Add To Database Tables

        //Return Data to User
        return response()->json([
            
        ]);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
