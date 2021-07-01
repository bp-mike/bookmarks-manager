<?php
// use App\Models\Post;
// use App\Http\Controllers\PostController;
// // use App\Post;
// // use App\PostController;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// __________ the longway
// Route::get('/post', 'PostController@index');
// Route::post('/post', 'PostController@store');
// Route::put('/post', 'PostController@update');
// Route::delete('/post', 'PostController@destroy');

// ______ the short way
// Route::resource('posts', 'PostController');
// Route::resource('posts', PostController::class);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
