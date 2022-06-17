<?php

namespace App\Http\Controllers\Api\Ums;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy('name', 'ASC')->paginate(20);
        return response()->json(['roles' => $roles]);        
    }

    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->name]);

        foreach ($request->input('permissions') as $id){
            $permission = Permission::find($id);
            $role->givePermission($permission);
        }

        return response()->json(['roles' => $roles]);
    }

    public function show($id)
    {
        $role = Role::where('id', '=', $id)->with('users')->first();   

        return response()->json(['roles' => $roles]);
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);

        
    }

    public function destroy($id)
    {
        //
    }
}
