<?php 
      $lista=[];
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['repo'])) {
            require('fpdf/fpdf186/fpdf.php');
            $con=mysqli_connect("localhost","root","","prueba");
            $sql="SELECT e.pre1, e.pre2, e.pre3, u.nomUser FROM encuesta e INNER JOIN usuario u ON e.idUser=u.idUser";
            $respuesta=$con->query($sql);
            $fpdf=new FPDF();
            $fpdf->Addpage();
            $fpdf->setFont('Arial','B',16);
            $fpdf->cell(33,10,'nombre',1);
            $fpdf->cell(33,10,'pregunta 1',1);
            $fpdf->cell(33,10,'pregunta 2',1);
            $fpdf->cell(33,10,'pregunta 3',1);
            $fpdf->Ln();
            while ($row=$respuesta->fetch_array()) {
            $nomUser=$row['nomUser'];
            $pre1=$row['pre1'];
            $pre2=$row['pre2'];
            $pre3=$row['pre3'];
            $fpdf->cell(33,10,$nomUser,1);
            $fpdf->cell(33,10,$pre1,1);
            $fpdf->cell(33,10,$pre2,1);
            $fpdf->cell(33,10,$pre3,1);
            $fpdf->Ln();
            }
            $fpdf->OutPut();
        }else {
            $user=$_POST['user'];
            $con=mysqli_connect("localhost","root","","prueba");
            $sql="SELECT e.pre1, e.pre2, e.pre3, u.nomUser FROM encuesta e INNER JOIN usuario u ON e.idUser=u.idUser";
            $resCons=$con->query($sql);
            while ($fila=$resCons->fetch_array()) {
            $lista[]=$fila;
            }
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
    <h3>Busqueda</h3>
    <form action="" method="post">
        <input type="text" name="user">
        <br><br>
        <button> buscar</button>
    </form>
    <form action="" method="post">
        <button name="repo">reportes</button>
    </form>
    <table>
        <thead>
        <tr>
            <th>nombre</th>
            <th>pregunta 1</th>
            <th>pregunta 2</th>
            <th>pregunta 3</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($lista as  $fila): ?>
                <tr>
                    <td> <?php echo $fila['nomUser'];?> </td>
                    <td> <?php echo $fila['pre1'];?> </td>
                    <td> <?php echo $fila['pre2'];?> </td>
                    <td> <?php echo $fila['pre3'];?> </td>
                </tr>
            <?php  endforeach;?>

        </tbody>
        
    </table>
</body>
</html>