<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PRACTICA 2</title>
    <style type="text/css">
      #rojo { color: red; }
      #rosado {color: pink;}
    </style>
  </head>
  <body>
    <!-- <p>
      <?= $Total_ganancias ?>
    </p> -->
    <h1>PERSONAS</h1>
    <ul>
      <?php
       $nueva = ${"persona"."1"};
       for ($i=0; $i < 6; $i++) {
         $nueva = ${"persona".($i+1)};
          $nom = $nueva['Nombre'];
          $sex = $nueva['Sexo'];
          $sal = $nueva['Salario'];
          if ($sex == "M") {
            echo "<li id='rojo'><p>NOMBRE:$nom&nbsp;&nbsp; SEXO:$sex&nbsp;&nbsp; SALARIO:$sal</p></li>";
          }else{
            echo "<li id='rosado'><p>NOMBRE:$nom&nbsp;&nbsp; SEXO:$sex&nbsp;&nbsp; SALARIO:$sal</p></li>";
          }
       }
      //print_r($nueva['Nombre']);?>
    </ul>
    <h4><?php echo"GANANCIAS TOTALES: ". $Total_ganancias ?></h4>
  </body>
</html>
