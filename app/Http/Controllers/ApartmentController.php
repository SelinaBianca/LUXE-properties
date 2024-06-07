<?php

namespace App\Http\Controllers;


use App\Models\Apartment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApartmentController extends Controller
{

    public function index()
    {

        $user = Auth::user();


        if($user->role == 1){

            $apartments = Apartment::all();


        }elseif ($user->role == 5){
            $apartments = Apartment::where('agent', $user->name)->get();
        }
        else{
//            echo "You don't have permissions to view this";
//            exit();
            abort(403, 'UNAUTHORIZED ACCESS');
        }



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
//        $request->validate([
//            'description' => 'required'
//        ]);

        $apartment = new Apartment();
        $apartment->title = $request->input('title');
        $apartment->description = $request->input('description');
        $apartment->price = $request->input('price');
        $apartment->category = $request->input('category');
        $apartment->location = $request->input('location');
        $apartment->agent = $request->input('agent');
        $apartment->contact_email = $request->input('contact_email');
        $apartment->contact_phone = $request->input('contact_phone');
        $apartment->published_at = $request->input('published_at');
        $apartment->slug = $request->input('slug');
        $apartment->featured = $request->input('featured') == "on" ? 1 : 0;
        $apartment->beds = $request->input('beds');
        $apartment->baths = $request->input('baths');
        $apartment->img1 = $request->file('image6') ? $request->file('image1')->getRealPath() : null;
        $apartment->img2 = $request->file('image6') ? $request->file('image2')->getRealPath() : null;
        $apartment->img3 = $request->file('image6') ? $request->file('image3')->getRealPath() : null;
        $apartment->img4 = $request->file('image6') ? $request->file('image4')->getRealPath() : null;
        $apartment->img5 = $request->file('image6') ? $request->file('image5')->getRealPath() : null;
        $apartment->img6 = $request->file('image6') ? $request->file('image6')->getRealPath() : null;
        $apartment->img7 = $request->file('image6') ? $request->file('image7')->getRealPath() : null;




        $apartment->save();

        // check if the request has any files
        foreach ([
                     'image1',
                     'image2',
                     'image3',
                     'image4',
                     'image5',
                     'image6',
                     'image7'
                 ] as $fileName) {
            // check if the file name exists in the request
            if($request->has($fileName)){
                $apartment->addMedia($request->file($fileName))->toMediaCollection('gallery');


            }
        }



        return redirect()->route('apartments.index')->with('success', 'Apartment created successfully.');
    }

    public function edit($id)
    {
        $apartment = Apartment::findOrFail($id);
        return view('apartments.edit', compact('apartment'));
    }


    public function showProperties(Request $request)
    {
        // check if there is a search URL param
        if ($request->has('search')) {
            $apartments = Apartment::where('location', 'LIKE', "%$request->search%")->get();

        } else {
            // Fetch all apartments from the database
            $apartments = Apartment::all();
        }


        // Return the view with the apartments data
        return view('properties', compact('apartments'));
    }

    public function show(Apartment $apartment)
    {
        return view('apartments.show', compact('apartment'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required'
        ]);

        $apartment = Apartment::findOrFail($id);
        $apartment->title = $request->input('title');
        $apartment->description = $request->input('description');
        $apartment->price = $request->input('price');
        $apartment->category = $request->input('category');
        $apartment->location = $request->input('location');
        $apartment->agent = $request->input('agent');
        $apartment->contact_email = $request->input('contact_email');
        $apartment->contact_phone = $request->input('contact_phone');
        $apartment->published_at = $request->input('published_at');
        $apartment->slug = $request->input('slug');
        $apartment->featured = $request->input('featured') == "on" ? 1 : 0;
        $apartment->beds = $request->input('beds');
        $apartment->baths = $request->input('baths');

        // Update images if new ones are provided
        if ($request->file('image1')) {
            $apartment->img1 = $request->file('image1')->getRealPath();
        }

        if ($request->file('image2')) {
            $apartment->img2 = $request->file('image2')->getRealPath();
        }

        if ($request->file('image3')) {
            $apartment->img3 = $request->file('image3')->getRealPath();
        }

        if ($request->file('image4')) {
            $apartment->img4 = $request->file('image4')->getRealPath();
        }

        if ($request->file('image5')) {
            $apartment->img5 = $request->file('image5')->getRealPath();
        }

        if ($request->file('image6')) {
            $apartment->img6 = $request->file('image6')->getRealPath();
        }

        if ($request->file('image7')) {
            $apartment->img7 = $request->file('image7')->getRealPath();
        }


        $apartment->save();

        return redirect()->route('apartments.index')->with('success', 'Apartment updated successfully.');

    }

    public function destroy($id)
    {
        $apartment = Apartment::findOrFail($id);
        $apartment->delete();

        return redirect()->route('apartments.index')->with('success', 'Apartment deleted successfully.');
    }





}
