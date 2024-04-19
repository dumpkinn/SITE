<?php
session_start();
$op1= $_POST['op1'];
$op2= $_POST['op2'];
$mat1= $_POST['mat10'];
$mat2= $_POST['mat11'];
$mat3= $_POST['mat12'];
$por1= $_POST['por10'];
$por2= $_POST['por11'];
$por3= $_POST['por12'];
$edf1= $_POST['edf10'];
$edf2= $_POST['edf11'];
$edf3= $_POST['edf12'];
$fil1= $_POST['fil10'];
$fil2= $_POST['fil11'];
$ing1= $_POST['ing10'];
$ing2= $_POST['ing11'];
$fq1= $_POST['fq10'];
$fq2= $_POST['fq11'];
$bi1= $_POST['bi10'];
$bi2= $_POST['bi11'];
$ex1= $_POST['ex1'];
$ex2= $_POST['ex2'];
$ex3= $_POST['ex3'];
$med= round(((($mat1+$mat2+$mat3)/3)+(($por1+$por2+$por3)/3)+(($edf1+$edf2+$edf3)/3)+(($fq1+$fq2)/2)+(($bi1+$bi2)/2)+(($fil1+$fil2)/2)+(($ing1+$ing2)/2)+$op1+$op2)/9 , 2);
if (empty($ex1)==true) {
    $ex1=$med;
}
if (empty($ex2)==true) {
    $ex2=$ex1;
}
if (empty($ex3)==true) {
    $ex3=(($ex2+$ex1)/2);
}
$medex= ($ex1+$ex2+$ex3)/3;
$fmedia= ($med+$medex)/2;
$_SESSION['media'] = $fmedia;
header("Location: service-single.php?media=true#fixrafada");
exit();
?>  