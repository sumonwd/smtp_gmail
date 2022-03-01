<?php

use App\Mail\MultiMailSend;
use Illuminate\Support\Facades\Mail;
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
Route::get('/send_mail', function () {
    $data = [
        'name' => 'Kamrul'
    ];

    Mail::to('kamrulabir18@gmail.com')->send(new MultiMailSend($data));
    return 'done';
});
