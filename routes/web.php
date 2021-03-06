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

//primera ruta
Route::get('hola' , function (){ 


    echo "hola 2465903";
 } );

 //ruta de arreglos:
Route::get('arreglo' , function(){

    $estudiantes = [
        "CA" => 1,
        "JO" => true,
        "AN" => 1.78
    ];

    //recorrer arreglo
    foreach($estudiantes as $e){
        echo $e."<hr />";
    }

    //agregar elementoas en PHP
    $estudiantes["CR"] = "Cristian";
    var_dump($estudiantes);


 });




 Route::get('paises', function(){
        //arreglo de paises:
        $paises = [
            "colombia" => [ 
                "capital" => "Bogotá",
                "moneda" => "Peso",
                "población" => 51,
                "ciudades principales" => [
                    "Medellin",
                    "Cali",
                    "Brranquilla"
                ]
            ],
            "peru" => [ 
                "capital" => "Lima",
                "moneda" => "Sol",
                "población" => 32,
                "ciudades principales" => [
                    "Arequipa",
                    "Trujillo"
                ]
            ],
            "paraguay" => [ 
                "capital" => "Asunción",
                "moneda" => "Guaraní",
                "población" => 51,
                "ciudades principales" => [
                    "Luque",
                ]
            ],
            "Brasil" => [ 
                "capital" => "Brasilia",
                "moneda" => "Real Brasieño",
                "población" => 212
            ],
            "ecuador" => [ 
                "capital" => "Quito",
                "moneda" => "Dolar",
                "población" => 17
            ],
            "argentina" => [ 
                "capital" => "Buenos Aires",
                "moneda" => "Peso Argentino",
                "población" => 45
            ]
        ];

        //mostrar la vista:
        return view('paises')
            ->with("paises" , $paises);
 });