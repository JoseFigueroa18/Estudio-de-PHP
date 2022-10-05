<?php
/*Funciones Definidas*/ 
//Arreglos de ejemplo, para utilizar las funciones.
//Podríamos utilizar solo uno para utilizar el principio de DRY; Pero,
//utilizamos varias, porque php ejecuta de manera lineal, 
//por lo tanto cada función afecta a la siguiente.
$numeros = array('uno','dos','tres','cuatro','cinco','seis');
$numeros2 = array('uno','dos','tres','cuatro','cinco','seis');
$numeros3 = array('uno','dos','tres','cuatro','cinco','seis');
$numeros4 = array('uno','dos','tres','cuatro','cinco','seis');
$numeros5 = array('uno','dos','tres');
$numeros6 = array('cuatro','cinco','seis');
$numeros7 = array('uno','dos','tres','cuatro','cinco','seis');

/*Count*/
//Sirve para contar elementos.
echo 'Resutado de la función count:';
echo '<br>';
echo count($numeros);
echo '<br>';
//------------------------------------------------------------------------------------------------------------

/*Asort*/
//Sirve para ordenar alfabéticamente elementos.
asort($numeros);
echo '<br>';
echo 'Resultado de la función asort:';
echo '<br>';
print_r($numeros);
echo '<br>';
//------------------------------------------------------------------------------------------------------------

/*Rsort*/
//Sirve para ordenar los elementos ordenados alfabéticamanete 
//a la inversa, de la Z a la A.
rsort($numeros);
echo '<br>';
echo 'Resultado de la función rsort:';
echo '<br>';
print_r($numeros);
echo '<br>';
//------------------------------------------------------------------------------------------------------------

/*Arsort*/
//Sirve para ordenar elementos alfabeticamente, 
//a la inversa, de la Z a la A.
//Pero conservando el indice correspondiente.
arsort($numeros2);
echo '<br>';
echo 'Resultado de la función arsort:';
echo '<br>';
print_r($numeros2);
echo '<br>';
//------------------------------------------------------------------------------------------------------------

/*array_chunk*/
//Sirve para dividir un arreglo en las partes que nosotros deseemos.
//Tenemos que darle como primer parametro el nombre del array.
//Como segundo parametro, en grupos de cuanto lo vamos a dividir.
$arrayDividido = array_chunk($numeros3,3);

echo '<br>';
echo "Array's dividido en grupos de 3 con la función chunk:";
echo '<br>';
for ($i=0; $i < count($arrayDividido); $i++) { 
    echo 'Array numero:'.$i.' ';
    print_r($arrayDividido[$i]);
    echo '<br>';
}


//------------------------------------------------------------------------------------------------------------

/*Array_merge*/
//Sirve para fucionar arreglos
//Tenemos que darle como primer parametro el nombre del array.
//Como segundo parametro el nombre del otro array que queramos fucionar.
$arrayFusion = array_merge($numeros5,$numeros6);
echo '<br>';
echo "Array fusionado con la función merge:";
echo '<br>';
print_r($arrayFusion);
echo '<br>';
//------------------------------------------------------------------------------------------------------------

/*Array_pop*/
//Sirve para buscar el último elemento
$arrayUltimo = array_pop($numeros6);
echo '<br>';
echo "Último elemento del array:";
echo '<br>';
print_r($arrayUltimo);
echo '<br>';
//------------------------------------------------------------------------------------------------------------

/*Array_search*/
//Sirve para buscar la posición de un elemento en un arreglo, por su nombre.
//Tenemos que darle como primer parametro el nombre del elemento.
//Como segundo parametro el nombre del array.
$arrayBuscar = array_search('cinco',$numeros6);
echo '<br>';
echo "La posición del elemento usando la función search:";
echo '<br>';
print_r($arrayBuscar);
echo '<br>';
//------------------------------------------------------------------------------------------------------------

/*Array_reverse*/
//Sirve para ordenar al reves los elementos de un array.
$arrayReves = array_reverse($numeros7);
echo '<br>';
echo "Elementos del array al revés usando la función reverse:";
echo '<br>';
print_r($arrayReves);
echo '<br>';

?>