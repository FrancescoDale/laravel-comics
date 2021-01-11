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
    $comics = config('comics');
    $data = [
        'series' => $comics
    ];
    return view('home', $data);
});

Route::get('/comic/{id}', function($id) {
    $comics = config('comics');
    // verifica che id non abbia valore > lunghezza array
    if (array_key_exists($id, $comics)) {
        $item = $comics[$id];
        $data = [
            'comic' => $item
        ];
        return view('comicpage', $data);
        } else {
            abort(404);
        }
})-> name('comic-page');
