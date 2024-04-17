<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
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
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        $post = Post::create($validatedData);

        return response()->json(['message' => 'Post creado correctamente', 'post' => $post], 201);
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
    public function update(Request $request,$id)
    {
        
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['error' => 'Post no actualizado'], 404);
        }


        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();


        return response()->json(['message' => 'Post actualizado'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['error' => 'Post no encontrado'], 404);
        }

        $post->delete();

        return response()->json(['message' => 'Post eliinado'], 200);
    }
}
