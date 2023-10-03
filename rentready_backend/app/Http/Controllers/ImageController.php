<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
{
    $images = Image::all();
    return response()->json($images);
}
    public function store(Request $request)
    {
        // dd('Inside upload method');
        // Validate the uploaded file
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'property_id' => 'required'
        ]);
        // Store the uploaded image
        $imagePath = $request->file('image')->store('images');
        // Create a new Image record and save the image path
        $image = new Image();
        $image->url = $imagePath; 
        $image->property_id = $request->input('property_id'); 
        $image->save();
        // Return a response indicating success
        return response()->json(['message' => 'Image uploaded and saved successfully']);
    }     
} 
