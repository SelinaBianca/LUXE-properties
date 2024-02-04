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
            'type' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
        ]);

        // Create a new instance of Contact model
        $HouseCategory = new HouseCategory();

        // Assign form values to model properties
         $HouseCategory->type = $request->input('type');
         $HouseCategory->Address = $request->input('address');
         $HouseCategory->Number_of_bedrooms = $request->input('bedrooms');
         $HouseCategory->Number_of_bathrooms = $request->input('bathrooms');
         $HouseCategory->save();


         //return redirect()->back()->with('success', 'Saved successfully!');
         return Redirect::route('housecategories.index')->with('success', 'Saved successfully!');
        

        
    }

    
    public function show(HouseCategory $houseCategory)
    {
        
    }

    
    public function edit(HouseCategory $houseCategory)
    {
        
    return view('admin.HouseCategories.edit', compact('houseCategory'));
    }



    public function update(UpdateHouseCategoryRequest $request, HouseCategory $houseCategory , $id)
    {

    
        $housecategories = HouseCategory::find($id);
        $input = $request->all();
        $housecategories->update($input);
        return redirect('housecategories')->with('flash_message', 'student Updated!');  
        
    }


    
    public function destroy(HouseCategory $houseCategory)
    {
        $houseCategory->delete();
        return redirect()->route('HouseCategories.index')->with('success', 'User successfully deleted!');
    }
} 
