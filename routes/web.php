<?php

use App\Twoot;

Route::get('/', function () {
    return view('app')->with([
        'twoots' => Twoot::all()
    ]);
});

Route::get('/about', function(){
   return view('about');
});

Route::post('twoots', function(){
//    Twoot::______([
//        'text' => request()->____
//    ]);
//
//    return redirect()->to('_');
});

Route::delete('twoots/{id}', function($id){
//    Trouver le twoot, puis le supprimer
//    Twoot::____($id)->______();

    return redirect()->to('/');
});
