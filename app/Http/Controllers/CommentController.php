<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
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
            'text' => 'required|string|max:255',
            'post_id' => 'required|exists:users,id',
        ]);

        $comment = Comment::create($validatedData);

        return response()->json(['message' => 'Comentario creado correctamente', 'comment' => $comment], 201);
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
        //
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json(['error' => 'Imagen  no actualizada'], 404);
        }


        $comment->text = $request->input('text');

        $comment->save();


        return response()->json(['message' => 'Comentario actualizado'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $comment = Comment::find($id);

        if (!$comment) {
            return response()->json(['error' => 'Comentario no encontrado'], 404);
        }

        $comment->delete();

        return response()->json(['message' => 'Comentario  eliminado'], 200);
    }
}
