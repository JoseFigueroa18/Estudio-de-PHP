<?php 
$numero = 1;
/*While*/
//En este ciclo primero se cumple la condición para ejecutar la condicional.
echo 'Resultado con el ciclo while: ';
echo '<br>';
while ($numero <= 10) //Condición.
{
    echo $numero; //Condicional.
    $numero ++;
}
echo '<br>';
//------------------------------------------------------------------------------------------------------------

/*do while*/
//Este es como el while; Pero, al revés, ya que primero se ejecuta la condicional,
//para luego, revisar la condición.
$numero = 1;
echo '<br>';
echo 'Resultado con el ciclo do while: ';
echo '<br>';
do {
    echo $numero; //Condicional.
    $numero ++;
} while ($numero <= 10); //Condición.
echo '<br>';
//------------------------------------------------------------------------------------------------------------

/*For*/
//En este se utiliza un valor prefijado para repetir el ciclo hasta que nosotros lo deseemos.
echo '<br>';
echo 'Resultado con el ciclo for: ';
echo '<br>';
for ($numero=0; $numero <=10 ; $numero++) { 
    echo $numero;
}
?>
