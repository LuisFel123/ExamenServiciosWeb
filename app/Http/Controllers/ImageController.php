<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'url' => 'required|string|max:255',
            'post_id' => 'required|exists:posts,id',
        ]);

        $image= Image::create($validatedData);

        return response()->json(['message' => 'Imagen creada correctamente', 'image' => $image], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $image = Image::find($id);

        if (!$image) {
            return response()->json(['error' => 'Imagen  no actualizada'], 404);
        }


        $image->url = $request->input('url');
        //$image->post_id = $request->input('post_id');

        $image->save();


        return response()->json(['message' => 'Imagen actualizada'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $image = Image::find($id);

        if (!$image) {
            return response()->json(['error' => 'Imagen no encontrada'], 404);
        }

        $image->delete();

        return response()->json(['message' => 'Imagen eliinada'], 200);
    }
}
