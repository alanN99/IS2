<?php   

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$producto = $num1 * $num2;
$exponencia = $n1 ** $n2;

if ($num2 == 0){
    $division = "No se puede dividir entre 0";
}else{
    $division = $num1 / $num2;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultados:</h1>
    <?php echo "<p>La suma de $num1 + $num2 = $suma</p>";
          echo "<p>La resta de $num1 - $num2 = $resta</p>";
          echo "<p>El producto de $num1 * $num2 = $producto</p>";
          echo "<p>El cociente de $num1 / $num2 = $division</p>";
          echo "<p>La exponenciación de  $num1 elevado a $num2 = $exponencia</p>";
    ?>
</body>
</html>
