<?php 
/*$GLOBALS*/
//Esta palabra reservada sirve para poder utilizar variables externas
//dentro de un método, de esta manera podemos utilizarlas, as u vez, 
//nos permite crear variables, las cuales nosotros podremos llamar, 
//simplemente usando el simbolo de dolar $.
$n1 = 8;
$n2 = 4;
function Suma(){
    $GLOBALS['suma'] = $GLOBALS['n1'] +$GLOBALS['n2'];
}
suma();
echo 'El contenido de la variable global es: ';
echo '<br/>';
echo $suma; //Solo agregamos simbolo de dolar $ para llamarla.
echo '<br/>';


/*$_SERVER*/
//Esta variable sirve para obtener datos de información.
//Simplemente se deben poner las palabras especiales en máyuscula.
echo '<br/>';
echo $_SERVER ['PHP_SELF']; //Obtenemos la dirección de nuestro archivo.
echo '<br/>';
echo $_SERVER ['SERVER_NAME'];//Esta sirve para obtener nuestra dirección de servidor local.
echo '<br/>';
echo $_SERVER ['HTTP_REFERER'];//Esta nos sirve para obtener las referencias HTTP.
?>