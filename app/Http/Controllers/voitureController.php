<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Voiture;
use Illuminate\Http\Request;

class voitureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $voitures = Voiture::paginate(9); // Paginate with 9 items per page
        return view('voitures.addVoiture', ['voitures' => $voitures]);
        //dd($voitures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Categorie::get();
        return view('voitures.addVoiture', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'color' => 'required',
            'price' => 'required',
            'description' => 'required',
            'images' => 'required|array', // Make sure images is an array
            'images.*' => 'image|mimes:jpeg,jpg,png,gif|max:1000', // Validate each image in the array
            'id_categorie' => 'required',
        ]);

        $imagePaths = [];

        foreach ($request->file('images') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
           $path= $image->storeAs('project_images', $imageName);
            //dd($image->storeAs('project_images', $imageName, 'public'));
            array_push($imagePaths, $path);
        }

        // Create a new Voiture and save it to the database
        $voiture = new Voiture();
        $voiture->name = $request->name;
        $voiture->color = $request->color;
        $voiture->price = $request->price;
        $voiture->description = $request->description;
        $voiture->images = $imagePaths; // Store image paths as JSON
        $voiture->id_categorie = $request->id_categorie;
        $voiture->save(); // Save the Voiture object

        return back()->withSuccess('Voiture created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $voitur = Voiture::find($id);
        if (!$voitur) {
            return abort(404); 
        }
        $recentVoitures = Voiture::where('id_categorie', $voitur->id_categorie)
        ->orderBy('created_at', 'desc')
        ->take(4)
        ->get();
        // Return the car details view with the retrieved car data.
        return view('voitures.details', compact('voitur','recentVoitures'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
