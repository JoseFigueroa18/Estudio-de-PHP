<?php
/*Variables*/
//A diferencia de otros lenguajes de programación, 
//no es necesario defenir el tipo de variable con un nombre 'int, string, etc'. 
//Toda variable comienza con el simbolo '$', se diferencian por la asignación de valor que se le da.

$nombre = 'José'; //La variable $nombre se le asignó texto con comillas simples, por lo que sería un string.
$numero = 8; // A la variable se le asignó un entero, ya que es un numero que no está dentro de las comillas.
echo $nombre, $numero;
//------------------------------------------------------------------------------------------------------------

/*Constantes*/
//Para definir una constante, utilizamos la palabra reservada define y asignaremos parametros.
//Para llamarlos no es necesario el uso del simbolo del dolar '$'
define('nombre','José');
echo nombre;
?>