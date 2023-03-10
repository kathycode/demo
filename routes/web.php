<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/person', function () {
    return view('person', [
        'name' => 'Kathlyn',
        'age' => '20',
        'address' => 'Sto. Domingo Nabua Camarines Sur',
        'color' => 'red',
        'siblings'=> [
            [
                'name' => 'jonas',
                'age' => '19'
            ],
            [
                'name' => 'james paul',
                'age' => '14'
            ],
            [
                'name' => 'jellian',
                'age' => '11'
            ],
            [
                'name' => 'jocel',
                'age' => '7'  
            ]
        ]
    ]);
});
