<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $answers = App\Form::all();

    return view('raso', [
        'answers' => $answers
    ]);
});

Route::get('/submit', function () {
    $answer = App\Form::all()->last();

    return view('submit', [
        'answer' => $answer
    ]);
}); 

Route::post('/submit', 'SubmitController@store');
