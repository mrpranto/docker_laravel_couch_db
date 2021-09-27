<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Http;
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

Route::get('/test', function () {
    return 'test';
});

Route::group(['prefix' => '/v1'], function (Router $router){
    $router->get('me', function (){
        return db();
        $address = [
            'address' => 'Uttara, Dhaka - 1230',
            'city'    => 'Dhaka',
            'zipcode' => '1230',
            'user_id' => 'ab42fbabab8ae9f6aa07b14167052b79',
            'type'    => 'address',
        ];

        $uuid = Http::get(db_url() . '_uuids')->json()['uuids'][0];

        $payload = json_encode($address);

        $response = Http::withBody($payload, 'application/json')
            ->put(db(). $uuid);

        return $response->status();

        $response = Http::get('http://127.0.0.1:5984/');
        return $response->json();
    });
});
