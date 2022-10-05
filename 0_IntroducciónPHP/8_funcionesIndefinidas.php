<?php
/*Funciones o también llamadas métodos*/
//Las funciones nos sirven para realizar una operación, 
//esta puede funcionar mediante el uso de parámetros para mejorar su eficacia.
//Aunque no es necesario.

//Para crear una función basta con utilizar la palabra reservada function y dentro de las llaves definir 
//la acción que se realizará al llamarla.

function suma1($numero1,$numero2){
    echo "La operación es:";
    echo "<br>";
    echo "Primer número: $numero1<br>";
    echo "Segundo número: $numero2<br>";
    echo "la suma de los números es: ".$numero1+$numero2.'<br>';
    echo "<br>";
}

function suma2(){
    $numero1 = 1;
    $numero2 = 2;
    $resultado = $numero1 + $numero2;
    echo "La operación es:";
    echo "<br>";
    echo "Primer número: $numero1 <br>";
    echo "Segundo número: $numero2 <br>";
    echo "la suma de los números es: ".$resultado.'<br>';
    echo "<br>";
}

//Para llamar la función simplemente basta con escribir el nombre, 
//los parentesis y los parámetros si esta los requiere.
suma1(1,2);//Esta los requiere.
suma2();//Esta no.
?>