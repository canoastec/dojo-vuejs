<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/posts', function () {
    $posts = \App\Post::all();

    return response()->json($posts);
});

Route::delete('/posts/{id}', function ($id) {
    $post = \App\Post::findOrFail($id);

    $post->delete();

    return response(204);
});
