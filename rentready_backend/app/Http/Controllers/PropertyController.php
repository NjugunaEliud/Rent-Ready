<?php

namespace App\Http\Controllers;
use App\Http\Requests\PropertyRequest;
use App\Models\Property;

use Illuminate\Http\Request;

class PropertyController extends Controller{

    public function index(){
        $property = Property::all();
        return response()->json($property);
    }
    public function show($id){
        $property = Property::FindOrFail($id);
        return response()->json($property);
    }
    public function store(PropertyRequest $request){
        $property = new property();
        $property->property_name= $request->input("property_name");
        $property->address= $request->input("address");
        $property->property_type= $request->input("property_name");
        $property->rent_cost= $request->input("rent_cost");
        $property->description= $request->input("description");
        $property->landlord_id= $request->input("landlord_id");
        $property->image_id= $request->input("image_id");
        $property->save();
        return response()->json($property);
}
    public function update(PropertyRequest $request, $id){
        $property = Property::FindOrFail($id);
        $property->property_name= $request->input("property_name");
        $property->address= $request->input("address");
        $property->property_type= $request->input("property_name");
        $property->rent_cost= $request->input("rent_cost");
        $property->description= $request->input("description");
        $property->landlord_id= $request->input("landlord_id");
        $property->image_id= $request->input("image_id");
        $property->update();
        return response()->json($property);
    }

    public function destroy($id){
        $property = Property::FindOrFail($id);  
        $property->delete();
        return response()->json($property);
    }
}











    

