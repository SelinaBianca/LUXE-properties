<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHouseCategoryRequest;
use App\Http\Requests\UpdateHouseCategoryRequest;
use App\Models\HouseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HouseCategoryController extends Controller
{

    public function index()
    {
        $HouseCategories = housecategory :: all();
        return view ('admin.HouseCategories.index') ->with ('HouseCategories' ,$HouseCategories );
    }


    public function create()
    {
        $houseCategories = HouseCategory::all();

        return view('admin.housecategories.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'id' => 'required|numeric',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:5000',
            'price' => 'required|numeric',
            'category' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'agent' => 'required|string|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|string|max:20',
            'images' => 'nullable|array',
            'images.*' => 'nullable|file|image|max:10240', // max 10MB per image
            'published_at' => 'nullable|date',
            'slug' => 'required|string|max:255|unique:house_categories,slug',
            'featured' => 'required|boolean',
        ]);

        // Create a new instance of Contact model
        $HouseCategory = new HouseCategory();

        // Assign form values to model properties
        $HouseCategory->title = $request->input('title');
        $HouseCategory->description = $request->input('description');
        $HouseCategory->price = $request->input('price');
        $HouseCategory->category = $request->input('category');
        $HouseCategory->location = $request->input('location');
        $HouseCategory->agent = $request->input('agent');
        $HouseCategory->contact_email = $request->input('contact_email');
        $HouseCategory->contact_phone = $request->input('contact_phone');
        $HouseCategory->images = $request->input('images');
        $HouseCategory->published_at = $request->input('published_at');
        $HouseCategory->slug = $request->input('slug');
        $HouseCategory->featured = $request->input('featured');
        $HouseCategory->save();


         //return redirect()->back()->with('success', 'Saved successfully!');
         return Redirect::route('housecategories.index')->with('success', 'Property created!');



    }


    public function show(HouseCategory $houseCategory)
    {

    }


    public function edit($id)
    {
        $houseCategory = HouseCategory::find($id);
        return view('admin.HouseCategories.edit', compact('houseCategory'));
    }



    public function update(Request $request,$id)
    {
        $request->validate([
            'id' => 'required|numeric',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:5000',
            'price' => 'required|numeric',
            'category' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'agent' => 'required|string|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|string|max:20',
            'images' => 'nullable|array',
            'images.*' => 'nullable|file|image|max:10240', // max 10MB per image
            'published_at' => 'nullable|date',
            'slug' => 'required|string|max:255|unique:house_categories,slug',
            'featured' => 'required|boolean',
        ]);

        $houseCategory = HouseCategory::findOrFail($id);

        // Update the attributes
        $houseCategory->update([

        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'price' => $request->input('price'),
        'category' => $request->input('category'),
        'location'=> $request->input('location'),
        'agent' => $request->input('agent'),
        'contact_email' => $request->input('contact_email'),
        'contact_phone' => $request->input('contact_phone'),
        'images' => $request->input('images'),
        'published_at' => $request->input('published_at'),
        'slug' => $request->input('slug'),
        'featured' => $request->input('featured'),

        ]);

        // Redirect the user after updating
        return redirect()->route('housecategories.index')->with('success', 'Property updated!');
    }



    public function destroy($id)
    {

        $houseCategory = HouseCategory::findOrFail($id);

        // Delete the house category
        $houseCategory->delete();

        // Redirect to a specific route or URL after deletion
        return redirect()->route('housecategories.index')->with('success', 'Property deleted!');
    }
}
