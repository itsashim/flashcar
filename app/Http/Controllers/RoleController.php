<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:role-view', ['only' => ['index','show']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.default',compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        try{
            Role::create(['name'=>$request->name]);
            return redirect()->route('role.index')->with('message','Role created successfully');
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }

    public function edit($id)
    {
        $role = Role::with('permissions')->whereId($id)->firstOrFail();
        return view('admin.roles.edit',compact('role'));
    }

    public function update(Request $request,$id){
        $permissions = $request->except('_token','_method');
        $arrayPermissions = [];
        foreach($permissions as $key => $value){
            if($value=="on")
                array_push($arrayPermissions,$key);
        }
        $role = Role::findOrFail($id);
        $role->syncPermissions($arrayPermissions);
        return redirect()->route('role.index')->with('message','Role Permission updated successfully');
    }

    public function destroy(Request $request)
    {
        try{
            $role = Role::where('id',$request->id)->first();
            DB::table('role_has_permissions')->where('role_id',$request->id)->delete();
            $role->delete();
            return redirect()->back()->with('message','Role deleted successfully');
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }


}