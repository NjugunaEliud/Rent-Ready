<?php

namespace App\Http\Controllers;
use App\Models\Tenant;
use App\Http\Requests\TenantRequest;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index(){
        $tenant = Tenant::all();
        return response()->json($tenant);
    }
    public function show($id){
        $tenant = Tenant::FindOrFail($id);
        return response()->json($tenant);
    }
    public function store(TenantRequest $request){
        $tenant = new Tenant();
        $tenant->first_name = $request->input('first_name');
        $tenant->last_name = $request->input('last_name');
        $tenant->email = $request->input('email');
        $tenant->phone_number = $request->input('phone_number');
        $tenant->save();
        return response()->json($tenant);
    }

    public function update(TenantRequest $request, $id){
        $tenant = Tenant::FindOrFail($id);
        $tenant->first_name = $request->input('first_name');
        $tenant->last_name = $request->input('last_name');
        $tenant->email = $request->input('email');
        $tenant->phone_number = $request->input('phone_number');
        $tenant->update();
        return response()->json(['message' => 'Tenant updated successfuly']);
    }

    public function destroy($id){
        $tenant = Tenant::FindOrFail($id);
        $tenant->delete();
        return response()->json(['message' => 'Tenant deleted']);
    }
}
