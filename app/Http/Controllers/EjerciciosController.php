<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjerciciosController extends Controller
{

    // Dado un array de enteros distintos, contar el número de pares que tengan diferencia k.
    // Ejemplo:
    // {1, 7, 5, 9, 2, 12, 3} y k = 2, puedo encontrar los
    // siguientes pares:
    // {1, 3}, {3, 5}, {5,7} y {7,9}
    //  se tomara para el ejercicio el k=2 y el array [1, 4, 3, 5, 6, 10 ,14 ,12]

    public function index()
    {
        $salida = array();
        $numbers = array(1, 4, 3, 5, 6, 10, 14, 12);
        for ($i = 0; $i < sizeof($numbers); $i++) {
            $a = $numbers[$i];
            for ($j = 0; $j < sizeof($numbers); $j++) {
                $b = $numbers[$j];
                $call =  $this->substract($a, $b);
                $salida[] = $call;
            }
        }
        $salida = array_values(array_filter($salida));
        return $salida;
    }

    public function substract(int $num1, int $num2)
    {
        $k = 2;
        $substract = $num1 - $num2;
        if ($substract == $k) {
            return array($num1, $num2);
        }
    }
    public function ejercicio1()
    {
        for ($i = 1; $i <= 100; $i++) {
            echo $i . '<br>';

            if ($i % 3 == 0) {
                echo 'Bin <br>';
            }
            if ($i % 5 == 0) {
                echo 'Go <br>';
            }
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo 'Bingo <br>';
            }
        }
    }
    public function ejercicio2()
    {
        $maximo = 1000;
        $contador = 0;
        for ($i = 1; $i <= $maximo; $i++) {
            if ($this->takePrimo($i)) {
                if ($contador <= 50) {
                    echo $i . '<br>';
                }
                $contador++;
            }
        }
    }

    public function takePrimo(int $numero)
    {
        $count = 0;
        for ($j = 1; $j <= $numero; $j++) {
            if ($numero % $j == 0) {
                $count++;
            }
        }
        if ($count == 2) {
            return true;
        } else {
            return false;
        }
    }

    public function ejercicio3(){
      //palabra
      $oracion = "HOLA MUNDO SOY REAL";
      $cadena = explode(" ", $oracion);
      $inversa = implode(" ", array_reverse($cadena));
      return $inversa;

      
}

}
