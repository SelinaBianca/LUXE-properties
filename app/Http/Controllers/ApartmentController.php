<?php

namespace App\Http\Controllers;
use App\Models\Apartment;

use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        $apartments = Apartment::all();
        return view('apartments.index', compact('apartments'));
    }

    public function properties()
    {
        $apartments = Apartment::all();
        return view('properties', compact('apartments'));
    }

    public function create()
    {
        return view('apartments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'nullable|string|max:255',
            'location' => 'required',
            'agent' => 'required|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|max:20',
            'published_at' => 'nullable|date',
            'slug' => 'required|unique:apartments|max:255',
            'featured' => 'boolean',
            'beds' => 'nullable|integer',
            'baths' => 'nullable|integer',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',




        ]);
        $images = [];
        if($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/images');
                $images[] = basename($path);
            }
        }

        $apartment = new Apartment($request->all());
        $apartment->images = $images;
        $apartment->save();



        Apartment::create($request->all());

        return redirect()->route('apartments.index')->with('success', 'Apartment created successfully.');
    }

    public function show(Apartment $apartment)
    {
        return view('apartments.show', compact('apartment'));
    }

    public function edit(Apartment $apartment)
    {
        return view('apartments.edit', compact('apartment'));
    }

    public function update(Request $request, Apartment $apartment)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'category' => 'nullable|string|max:255',
            'location' => 'required',
            'agent' => 'required|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|max:20',
            'published_at' => 'nullable|date',
            'slug' => 'required|unique:apartments,slug,' . $apartment->id . '|max:255',
            'featured' => 'boolean',
            'beds' => 'nullable|integer',
            'baths' => 'nullable|integer',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $images = $apartment->images;
        if($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/images');
                $images[] = basename($path);
            }
        }

        $apartment->update($request->all());
        $apartment->images = $images;
        $apartment->save();

        $apartment->update($request->all());

        return redirect()->route('apartments.index')->with('success', 'Apartment updated successfully.');
    }

    public function destroy(Apartment $apartment)
    {
        $apartment->delete();
        return redirect()->route('apartments.index')->with('success', 'Apartment deleted successfully.');
    }


    public function showProperties(Request $request)
    {
        $query = Apartment::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('title', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->orWhere('location', 'LIKE', "%{$search}%");
        }

        $apartments = $query->get();

        return view('properties', compact('apartments'));
    }

}
