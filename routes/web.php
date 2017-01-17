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
   Twoot::create([
       'text' => request()->text . ' ' . 'bla bla'
   ]);

   return redirect()->to('/');
});

Route::delete('twoots/{id}', function($id){
   Twoot::find($id)->delete();

    return redirect()->to('/');
});
