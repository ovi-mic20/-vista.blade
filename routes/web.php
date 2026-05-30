<?php 
 
use Illuminate\Support\Facades\Route; 
 
Route::get('/', function () { 
    return view('inicio'); 
}); 
 
Route::get('/productos', function () { 
    $productos = [ 
        [ 
            'nombre' => 'Yerba', 
            'precio' => 1500, 
            'stock' => 15, 
        ], 
        [ 
            'nombre' => 'Barritas de Granola', 
            'precio' => 800, 
            'stock' => 8, 
        ], 
        [ 
            'nombre' => 'Miel pura', 
            'precio' => 2000, 
            'stock' => 0, 
        ], 
        [
            'nombre' => 'Leche de Alemendra', 
            'precio' => 1500, 
            'stock' => 20,
        ],
    ]; 
 
    return view('productos', [ 
        'productos' => $productos, 
    ]); 
}); 
 
Route::get('/contacto', function () { 
    $email = 'empresacastora@gmail.com'; 

    return view('contacto', [ 
        'email' => $email, 
    ]); 

}); 
// NUEVA RUTA: Nosotros
Route::get('/nosotros', function () {
    return view('nosotros');
});