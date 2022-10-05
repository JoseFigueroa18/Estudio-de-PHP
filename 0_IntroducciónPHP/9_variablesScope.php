<?php 
/*Variables Scope*/
//php no nos permite utilizar las variables de una manera muy libre
//entonces las variables Scope, nos sirven para utilizar de una manera
//interna o externa una variable dentro de una función.
//Y con ayuda de la palabra reservada return, 
//podemos modificar el valor de dichas variables, 
//otra manera sería el uso de variables globales.

function suma3($numero1, $numero2){
    return $numero1 + $numero2; //El return sirve para retornar, 
    //valga la redundancia el valor de una operación realizada dentro de la función;
    //Sin embargo, esta no almacena datos, así que hay que almacenarla en una variable, fuera de la función. -
}

//Para llamar una función con return, hace falta almacenar, para luego mostrar.
$resultado1 = suma3(1,2);
echo "<br>";
echo $resultado1;
echo "<br>";
?>