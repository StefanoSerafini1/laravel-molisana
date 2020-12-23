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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', function () {
    $data = config('site-data');
//utilizzo i tre array e il foreach con if per separare i dati in 3 diversi array per tipologia pasta
    $corte = [];
    $lunghe =[];
    $cortissime=[];

    foreach($data as $key => $card){
//assegno un id ad ogni prodotto
        $card['id'] = $key;

        if($card['tipo'] == 'lunga'){
            $lunghe[] = $card; 
        }elseif($card['tipo'] == 'corta'){
            $corte[] = $card; 
        }elseif($card['tipo'] == 'cortissima'){
            $cortissime[] = $card; 
        }
    }

    //ritorno alla pagina principale i tre array di tipologia
    return view('molisana_home', ['lunghe' => $lunghe,'corte' => $corte,'cortissime' => $cortissime]);
})->name('molisana_home');

Route::get('/product/{id}', function ($id) {
    $data = config('site-data');
    $product = $data[$id];
    $length= count($data);
    //ritorno alla pagina prodotti il singolo protto richiesto in base al indice lunghezza e id
    return view('product', compact('product', 'length', 'id'));
}) -> name('product');
