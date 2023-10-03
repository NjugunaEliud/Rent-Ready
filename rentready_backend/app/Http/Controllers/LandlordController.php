<?php

namespace App\Http\Controllers;
use App\Models\Landlord;
use App\Http\Requests\LandlordRequest;


use Illuminate\Http\Request;

class LandlordController extends Controller{
    public function index()
    {
    $landlords = Landlord::all();
    return response()->json($landlords);
    }

    public function show($id){
    $landlord = Landlord::findOrFail($id);
    return response()->json($landlord);
    }

    public function store(LandlordRequest $request){
    if ($request->fails()) {
       return response()->json(['errors' => $request->errors()], 422);
     }
    $landlord = new Landlord();
    $landlord->first_name = $request->input('first_name');
    $landlord->last_name = $request->input('last_name');
    $landlord->email = $request->input('email');
    $landlord->phone_number = $request->input('phone_number');
    $landlord->address = $request->input('address');
    $landlord->save();
    return response()->json(['message' => 'Landlord created successfully'], 201);
    
}
public function update(LandlordRequest $request, $id){
    $landlord = Landlord::findOrFail($id);
    $landlord->first_name = $request->input('first_name');
    $landlord->last_name = $request->input('last_name');
    $landlord->email = $request->input('email');
    $landlord->phone_number = $request->input('phone_number');
    $landlord->address = $request->input('address');
    $landlord->save();
    return response()->json($landlord);
}

public function destroy($id)
{
    $landlord = Landlord::findOrFail($id);
    $landlord->delete();

    return response()->json(null, 204);
}
}
