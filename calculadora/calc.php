<?php
$d1s1e1= $_POST['d1s1e1'];
$d1s1e2= $_POST['d1s1e2'];
$d1s1e3= $_POST['d1s1e3'];
$d1s2e1= $_POST['d1s2e1'];
$d1s2e2= $_POST['d1s2e2'];
$d1s2e3= $_POST['d1s2e3'];
$d1s3e1= $_POST['d1s3e1'];
$d1s3e2= $_POST['d1s3e2'];
$d2s1e1= $_POST['d2s1e1'];
$d2s1e2= $_POST['d2s1e2'];
$d2s1e3= $_POST['d2s1e3'];
$d2s2e1= $_POST['d2s2e1'];
$d2s2e2= $_POST['d2s2e2'];
$d2s2e3= $_POST['d2s2e3'];
$d2s3e1= $_POST['d2s3e1'];
$d2s3e2= $_POST['d2s3e2'];

$D1C1= ($d1s1e1+$d1s1e2+$d1s1e3)/3*0.85;
$D1C2= ($d1s2e1+$d1s2e2+$d1s2e3)/3*0.1;
$D1C3= ($d1s3e1+$d1s3e2)/2*0.05;
$D2C1= ($d2s1e1+$d2s1e2+$d2s1e3)/3*0.85;
$D2C2= ($d2s2e1+$d2s2e2+$d2s2e3)/3*0.1;
$D2C3= ($d2s3e1+$d2s3e2)/2*0.05;
$D1=round(($D1C1 + $D1C2 + $D1C3)*0.5, 3);
$D2=round(($D2C1 + $D2C2 + $D2C3)*0.5, 3);

$med= round(($D1 + $D2), 3);
echo "A tua média do domínio Introdução à programação é " . $D1*2;
echo "<br>";
echo "A tua média do domínio Introdução à multimédia é " . $D2*2;
echo "<br>";
echo  "A tua média total é " . $med;
?>