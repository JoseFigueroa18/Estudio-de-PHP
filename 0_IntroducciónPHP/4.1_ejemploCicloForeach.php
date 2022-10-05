<?php
//Esta es otra forma en la que podemos utilizar el ciclo foreach para recorrer
//las llaves dentro de diferentes arreglos.
$fechas = array(
array("id" => "Lns", "descipcion" => "Lunes"),
    array("id" => "Mrt", "descipcion" => "Martes"),
    array("id" => "Mrc", "descipcion" => "Miercoles"),
    array("id" => "Jvs", "descipcion" => "Jueves"),
    array("id" => "Vrn", "descipcion" => "Viernes"),
    array("id" => "Sbd", "descipcion" => "Sábado"),
    array("id" => "Dmg", "descipcion" => "Domingo")
);
?>
<!--Para mostrar los datos utilizaremos un formato de HTML, pero en realidad en escencia es lo mismo.-->

<!DOCTYPE html>
<html>
       <head>
            <title>Ejercicio</title>
       </head>
       <body>
             <h1>Tabla de Fechas</h1>
             <table border="2"><thead><tr><th>ID</th><th>FECHA</th></tr></thead>
             <tbody>
                <!--Como sabemos la etiqueta php, nos sirve para ejecutar código de este lenguaje-->
                <?php
                //Aquí en lugar de usar un asignador de valor "=>", simplemente le daremos un alias al arreglo.
                //Así podremos llamar a las llaves dentro de este, como ser $fecha["id"] que sería igual a 
                //"id" => "Mrt" del arreglo fechas. Y todo esto lo metemos en una tabla.
                foreach ($fechas as $fecha) {
                    echo '<tr>
                    <td>'.$fecha["id"].'</td><td>'.$fecha["descipcion"].'</td>
                    </tr>';
                }                
                ?>
             </tbody>
             </table>
       </body>
</html>