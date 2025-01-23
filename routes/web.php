<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);

// Route::get('/', function () {
//     return view('student');
// });

// Route :: get ('emp/{id}', function ($id) {
//     echo 'Emp '.$id;
// });
// Route :: get ('emp1/{desig?}', function ($desig = null) {
//     echo $desig;
// });
// Route :: get ('emp2/{name?}', function ($name = 'Guest') {
//     echo $name;
// });
// Route::get('/greeting', function () {
//     return view('greeting', ['name' => 'Abidh']);
// });

// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/', function () {
//     // return response()->json([
//     //     'message' => 'Hello, World!', 'name' => 'abidh'
//     // ]);
//     // return response('Hello World', 200);
//     return response()->view('home');
// });
// Route::get('/', function () {
//     return response()->view('greeting', [
//         'name' => 'Abidh',
//     ]);
// });
// Route::get('/users', function () {
//     $users = [
//         ['userid' => 1, 'name' => 'Alex'],
//         ['userid' => 2, 'name' => 'Jane'],
//     ];
//     return response()->json($users);
// });
