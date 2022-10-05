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
echo '<br>';

//------------------------------------------------------------------------------------------------------------
/*    El siguiente ciclo es mejor verlo luego de ver el apartado 5_arrays.php, sobre arreglos asociativos.  */
//------------------------------------------------------------------------------------------------------------
/*Foreach*/
/*1.*/$paises = array(/*2.*/'Honduras'=>/*3.*/'Jose','Italia' =>'SChema','Rusia' =>'Miguel','Japon'=>'Henry'); //No llevan tilde para efectos de práctica
echo '<br>';
echo 'Resultado del ciclo foreach: ';
echo '<br>';

//Este tipo de ciclo es muy especial, 
//ya que nos permite recorrer datos de arreglos que no tienen un numero como indice; Sino, una palabra.

//Para esto tenemos que entender la estructura del foreach:
// 1. $paises es el nombre del arreglo que queremos recorrer, como podemos ver, es lo mismo.
// 2. $llave se refiere a los indices, si fuera un arreglo común, serían: 0,1,2,3... Pero en este caso son:
//Honduras, Italia, Rusia, Japon.
// 3. $nombre es el valor que se encuentra en cada indice del arreglo, en este caso son los nombres.
//De hecho podemos observar que la estructura 'Honduras' => 'Jose' es igual a $llave => $nombre del arreglo,
//Así que es fácil deducir que va en cada lugar.


foreach (/*1.*/$paises as /*2.*/$llave => /*3.*/$nombre) {
    echo $nombre.'<br>';
}
?>
