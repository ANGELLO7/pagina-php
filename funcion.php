<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Miguel Angel</title>
</head>
<body>



<p>Mi Pagina en PHP </p>
<?php 
$variable1=1;
echo $variable1;
echo '<h1>Pagina Personal</h1>';
  echo '<p>Miguel Angel Lopez Martinez</p>';
  
  echo '<br>';
  echo '</br>';
  echo "Esta es una pagina programada en php";
    echo '<p>Para la materia de Lenguaje de Programacion Visual</p>';
	echo '<p>Ingenieria en computacion</p>';

  function sumar($num1, $num2){
      $resultado = $num1 + $num2;
      echo "El resultado de la suma es $resultado";
   }
   sumar(20, 7);

         ?>
</body>
</html>