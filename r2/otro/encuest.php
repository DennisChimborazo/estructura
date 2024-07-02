
<?php 
$cob=mysqli_connect("localhost","root","","prueba");
if ($_SERVER["REQUEST_METHOD"] ==$_POST) {

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
    <form action="">
        <h3>Pregunta 1</h3>
        <input type="radio" name="res1" value="si">
        <label for="">si</label><br>
        <input type="radio" name="res1" value="no">
        <label for="">no</label><br>
        
        <h3>Pregunta 2</h3>
        <input type="radio" name="res2" value="si">
        <label for="">si</label><br>
        <input type="radio" name="res2" value="no">
        <label for="">no</label><br>
        
        <h3>Pregunta 3</h3>
        <input type="radio" name="res3" value="si">
        <label for="">si</label><br>
        <input type="radio" name="res3" value="no">
        <label for="">no</label><br>
        <button> Enviar Encuesta</button>
    </form>
</body>
</html>