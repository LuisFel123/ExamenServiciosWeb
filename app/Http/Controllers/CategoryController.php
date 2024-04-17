<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        //
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::create($validatedData);

        return response()->json(['message' => 'Categoria creada correctamente', 'category' => $category], 201);
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
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['error' => 'Categoria  no actualizada'], 404);
        }


        $category->name = $request->input('name');

        $category->save();


        return response()->json(['message' => 'Categoria actualizada'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['error' => 'Categoria no encontrada'], 404);
        }

        $category->delete();

        return response()->json(['message' => 'Categoria eliminada'], 200);
    }
}
