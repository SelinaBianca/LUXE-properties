<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHouseCategoryRequest;
use App\Http\Requests\UpdateHouseCategoryRequest;
use App\Models\HouseCategory;

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

    
    public function store(StoreHouseCategoryRequest $request)
    {
        // $input = $request -> all();
        // housecategory ::create($input);
        // return redirect('housecategories')->with('flash_message', 'Property Added!');

        $request->validate([
            'type' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
        ]);

        // Create a new instance of Contact model
        $HouseCategory = new HouseCategory();

        

        return redirect()->back()->with('success', 'Saved successfully!');
       

        
    }

    
    public function show(HouseCategory $houseCategory)
    {
        
    }

    
    public function edit(HouseCategory $houseCategory)
    {
        $HouseCategories = housecategory :: all();
        return view ('admin.HouseCategories.edit') ->with ('HouseCategories' ,$HouseCategories );

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

        return redirect()->route('admin.housecategories.index')
                         ->with('success', 'House category deleted successfully');
    }
} 
