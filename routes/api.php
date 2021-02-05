<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Bring in Our Post Model
use App\Models\Post;

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

//Creating Our Home Page
// Route::get('/api-home', function(){
//     return ['message' => 'Hello'];
// });

//Route Post
// Route::get('/posts', function(){
//         $post =   Post::create(
//             [
//                 'title' => 'My First Post', 
//                 'slug' => 'my-first-post',
//                 'content' => 'I Just Created My First Post'
//             ]
//         );

//         return $post;
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
