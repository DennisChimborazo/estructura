<?php 
 $res=0;
 $parIn="";
 $fac=0;

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $res = $num1 + $num2;
    if ($res%2==0) {
 $parIn="Par";
        
    }else {
        $parIn="Inpar";

    }
    $fac=1;
    for ($i=1; $i <= $res; $i++) { 
        $fac*=$i;
    }

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
    <br>
    <h2> sumas </h2>
    <form action="" method='post'>
        <label for="">numero 1:</label>
        <input type="text" name="num1"><br><br>
        <label for="">numero 2:</label>
        <input type="text" name="num2"><br><br>
        <button> sumar</button>

    </form>
    <br>
    <label for=""><?php echo "el resultado de la suma es: ". $res;?></label><br>
    <label for=""><?php echo "el resultado es: ". $parIn;?></label><br>
    <label for=""><?php echo "el factorial es: ". $fac;?></label><br>



</body>
</html>