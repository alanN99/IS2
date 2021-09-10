<?php   

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$suma = $num1 + $num2;

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
    <?php echo "<p>La suma de $num1 + $num2 = $suma</p>";?>
</body>
</html>