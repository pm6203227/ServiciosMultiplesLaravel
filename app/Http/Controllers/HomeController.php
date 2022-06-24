<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    //corrección de la tarea pasada arreglo de 10 numeros
    public function index()
    {
        return [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    }



    //servicio 1 devuelve un arreglo con almenos 5 objetos
    public function rut1(){
        $usuarios = array(
            "Datos" => [
                "nombre" => "Pedro",
                "Edad" => 30,
                "ciudad" => "cdmx"
            ],
            "Gustos" => [
                "color favorito" => "verde",
                "tipo de musica" => "rock",
                "peliculas" => "accion"
            ],
            "Hobbies" => [
                "leer" => "novelas",
                "tocar guitarra" => "clasica",
                "caminatas" => "naturaleza"
            ],
            "Tipos de motos que te gustan" => [
                "deportivas" => "r1",
                "trial" => "honda",
                "bobber" => "fsxb"
            ],
            "Deportes favoritos" => [
                "futbol" => "america",
                "motocros" => "equipo honda",
                "futbol americano" => "the rams"
            ]
        );
        Log::debug($usuarios);
        return ($usuarios);
    }


    // servicio 2 obtiene parametros de la url
    public function rut2($number){
        $cont = 0;
        Log::debug("El numero ingresado es: ");
        Log::debug($number);
        while ($number >= $cont) {
            echo $number . "<br>";
            $number--;
            Log::debug($number);
        }
        Log::debug("Se le hace un decremento de: ");
        Log::debug($number);
    }


    //servicio 3 obtiene un numero del body lo multiplica por si mismo
    public function rut3Request(Request $request){
        Log::debug("Numero ingresado en el JSON");
        Log::debug($request);
        $number = $request->input("number"); //este dato tiene que ser el mismo nombre que se ingresa en el body de postman
        $resultado = $number * $number;
        Log::debug("El resultado de la operacion es: ");
        Log::debug($resultado);

        return json_encode(array(
            "Numero ingresado al body en postman $number" => array(
                "Resultado de multiplicar por si mismo el numero ingresado es:" => $resultado
            )
        ));
    }
}
