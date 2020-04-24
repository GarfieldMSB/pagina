<?php


class StoreController{
    public function show($slug){
        $producto = Product::where('slug', $slug)->first();
        dd($producto);
        
    }   
}

Route:: get('producto/{slug}', [
    'as' => 'single-product',
    'uses' => 'StoreController@show'
]);

