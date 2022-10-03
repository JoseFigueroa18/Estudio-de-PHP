<?php 
/*Condicionales*/

/*If*/
//Algunos operadores condicionales son:
//Mayor que                       >
//Menor que                       <
//Igual que                       ==
//Diferente que                   <>, !=
//Mayor o igual                   >=
//Menor o igual                   <=
//Igual y mismo tipo              ===
//Diferente o distinto tipo       !==

$numero_uno = 8;
$numero_dos = 4;

if ($numero_uno < $numero_dos) 
{
    echo "$numero_uno es menor que $numero_dos";
}
elseif ($numero_uno == $numero_dos) {
    echo "$numero_uno es igual que $numero_dos";
}
else {
    echo "$numero_uno es mayor que $numero_dos";
}
//------------------------------------------------------------------------------------------------------------

/*Case*/
//Para usar la condicional case, simplemente basta con definir el valor de la variable,
//acorde a esta nos dará una respuesta.
$numero = 'java'; //El valor de la variable es igual a el caso numero 2
switch ($numero) {
    case 'php':
        echo 'lunes y martes';
        break;
    
    case 'java': // Igual a este.
        echo 'miercoles'; //Imprimirá este resultado.
        break;
    
    case 'python':
        echo 'jueves';
        break;
        
    
    default:
        # code...
        break;
}

?>