<?php 
 
use Illuminate\Support\Facades\Route; 
 
Route::get('/', function () { 
    return view('inicio'); 
}); 
 
Route::get('/productos', function () { 
    $productos = [ 
        [ 
            'nombre' => 'Yerba mate', 
            'precio' => 2500, 
            'stock' => 15, 
        ], 
        [ 
            'nombre' => 'Te verde', 
            'precio' => 1800, 
            'stock' => 8, 
        ], 
        [ 
            'nombre' => 'Miel pura', 
            'precio' => 3200, 
            'stock' => 0, 
        ], 
    ]; 
 
    return view('productos', [ 
        'productos' => $productos, 
    ]); 
}); 
 
Route::get('/contacto', function () { 
    $email = 'contacto@miempresa.com'; 
 
 
 
 
 
 
    return view('contacto', [ 
        'email' => $email, 
    ]); 
}); 
