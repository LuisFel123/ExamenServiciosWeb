<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->get('/post', function (Request $request) {
//     return $request->post();
// });


// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/news', [NewsController::class, 'index']);
// });


// //Acciones con posts
// Route::post('/posts', [PostController::class, 'store']);
// Route::delete('/posts/{id}', [PostController::class, 'destroy']);
// Route::put('/posts/{id}', [PostController::class, 'update']);

// //Acciones con imagenes
// Route::post('/imagens', [ImageController::class, 'store']);
// Route::delete('/imagens/{id}', [ImageController::class, 'destroy']);
// Route::put('/imagens/{id}', [ImageController::class, 'update']);


// //Acciones con comentarios
// Route::post('/comments', [CommentController::class, 'store']);
// Route::delete('/comments/{id}', [CommentController::class, 'destroy']);
// Route::put('/comments/{id}', [CommentController::class, 'update']);


// //Acciones con categorias
// Route::post('/categorys', [CategoryController::class, 'store']);
// Route::delete('/categorys/{id}', [CategoryController::class, 'destroy']);
// Route::put('/categorys/{id}', [CategoryController::class, 'update']);

Route::post('/userregister', [UserController::class, 'store']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function () {
        $user = User::find(9);
        return $user;
    });
    Route::delete('/userdelete/{id}', [UserController::class, 'destroy']);
    Route::put('/actualizar/{id}', [UserController::class, 'update']);





    //Acciones con posts
    Route::post('/posts', [PostController::class, 'store']);
    Route::delete('/posts/{id}', [PostController::class, 'destroy']);
    Route::put('/posts/{id}', [PostController::class, 'update']);
    Route::get('/post/', function () {
        $post = Post::find(10);
        return $post;
    });

    //Acciones con imagenes
    Route::post('/imagens', [ImageController::class, 'store']);
    Route::delete('/imagens/{id}', [ImageController::class, 'destroy']);
    Route::put('/imagens/{id}', [ImageController::class, 'update']);
    Route::get('/image/', function () {
        $image = Image::find(7);
        return $image;
    });


    //Acciones con comentarios
    Route::post('/comments', [CommentController::class, 'store']);
    Route::delete('/comments/{id}', [CommentController::class, 'destroy']);
    Route::put('/comments/{id}', [CommentController::class, 'update']);
    Route::get('/comment/', function () {
        $comment = Comment::find(8);
        return $comment;
    });



    //Acciones con categorias
    Route::post('/categorys', [CategoryController::class, 'store']);
    Route::delete('/categorys/{id}', [CategoryController::class, 'destroy']);
    Route::put('/categorys/{id}', [CategoryController::class, 'update']);
    Route::get('/category/', function () {
        $category = Category::find(2);
        return $category;
    });

    //salir
    Route::get('auth/logout', [UserController::class, 'logout']);
});
