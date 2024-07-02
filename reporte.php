<?php
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

