<?php

use Illuminate\Http\Request;
use App\Models\Post;

use Illuminate\Support\Facades\Route;

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


/*
Route::middleware('auth:sanctum')->get('/posts', function (Request $request) {
    return response()->json(Post::with('user')->latest()->get());
});
*/
Route::get('/posts', function () {
    return App\Models\Post::with('user')->latest()->get();
});
