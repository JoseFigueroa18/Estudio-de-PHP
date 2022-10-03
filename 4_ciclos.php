<?php 
$numero = 1;
/*While*/
//En este ciclo primero se cumple la condición para ejecutar la condicional
while ($numero < 10) //Condición.
{
    echo $numero; //Condicional.
    $numero ++;
}
//------------------------------------------------------------------------------------------------------------

/*do while*/
//Este es como el while; Pero, al revés, ya que primero se ejecuta la condicional,
//para luego, revisar la condición.
do {
    echo $numero; //Condicional.
    $numero ++;
} while ($numero <= 10); //Condición.
//------------------------------------------------------------------------------------------------------------

/*For*/
//En este se utiliza un valor prefijado para repetir el ciclo hasta que nosotros lo deseemos.
for ($numero=0; $numero <=10 ; $numero++) { 
    echo $numero;
}
?>
