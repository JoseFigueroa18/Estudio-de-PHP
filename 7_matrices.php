<?php 
/*Matrices o arreglos multidimensionales*/
//No son muy utilizadas en la parte práctica.
//simplemente son arreglos en más de una dimensión o mejor dicho:
//array's dentro de un array.

$matriz = array(
        /*0*/ /*1*/ /*2*/
    array(1,    2,    3)/*0*/,
    array(4,    5,    6)/*1*/,
    array(7,    8,    9)/*2*/
);//Esta es una matriz de 3x3

//Cuando teniamos un array con una sola dimensión, 
//solo necesitabamos una posición, pero aquí necesitamos 2
//el valor de la fila y el valor de la columna
echo 'Resultado de la matriz: ';
echo $matriz[1][2]; //El resultado será 6, 
//porque es el dato que está en la fila 1 y columna 2.

















?>