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
        $input = $request -> all();
        housecategory ::create($input);
        return redirect('housecategories')->with('flash_message', 'Property Added!');
       

        
    }

    
    public function show(HouseCategory $houseCategory)
    {
        
    }

    
    public function edit(HouseCategory $houseCategory)
    {
        return view('housecategories.edit', compact('houseCategory'));
    }

    public function update(UpdateHouseCategoryRequest $request, HouseCategory $houseCategory)
    {
        
    }

    
    public function destroy(HouseCategory $houseCategory)
    {
        $houseCategory->delete();

        return redirect()->route('admin.housecategories.index')
                         ->with('success', 'House category deleted successfully');
    }
} 
