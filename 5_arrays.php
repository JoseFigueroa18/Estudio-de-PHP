<?php 
/*Array, Arreglo o Vector Normal*/
//Un array es una estructura de datos que contiene una lista de elementos
//Estos se declaran igual que las variables con el simbolo de dolar '$'
//Se igualan a un espacio de memoria ejemplo 'array[] o array()'.

$dias = array('lunes<br>','Martes<br>','Miercoles<br>','Jueves<br>','Viernes');
print_r($dias); //Nos da la posición del Array
echo '<br>';
echo '<br>';
var_dump($dias); //Nos da la posición, el tipo de dato y la cantidad de carácteres
echo '<br>';
echo '<br>';
//------------------------------------------------------------------------------------------------------------

/*Array Asociativo*/
//Esto significa que a diferencia de un array normal, no necesariamente se debe relacionar con un valor númerico.
//Esto puede lograrse con un carácter especial, para identificar los datos en memoria de un arreglo.
//En pocas palabras, ya no será necesario utilizar el 0,1,2,3... Para representar posiciones dentro de un array.
//Estas se llamarán 'llaves'.

$datosPersonales = array('nombre'=>'Brayan','apellido'=>'CaraDePerro','novio'=>'Walter');
echo "Mi nombre es:".$datosPersonales['nombre'].' '.$datosPersonales['apellido']."y mi novio se llama".$datosPersonales['novio'];
?>