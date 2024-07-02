<?php 
$list=[];
if (isset($_POST['id'])) {
    $id=$_POST['id'];
    $sql="SELECT * FROM encuesta WHERE idUser='$id'";
    $con=mysqli_connect("localhost","root","","prueba");
    $resCon=$con->query($sql);
    while ($fila=$resCon->fetch_array()) {
        $list[]=$fila;
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
    <h2>buscar individual</h2>
    <form action="" method="post">
      <input type="text" name ="id">
      <button>buscar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>nombre</th>
                <th>respuesta 1</th>
                <th>respuesta 2</th>
                <th>respuesta 3</th>

            </tr>
        </thead>
        <tbody>
        <?php foreach ($list as $fila):?>
            <tr>
                <th> <?php echo $fila ['pre1'];?> </th>
                <th> <?php echo $fila ['pre1'];?> </th>
                <th> <?php echo $fila ['pre2'];?> </th>
                <th> <?php echo $fila ['pre3'];?> </th>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</body>
</html>