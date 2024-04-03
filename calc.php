<?php
$op1= $_GET['op1'];
$op2= $_GET['op2'];
$mat1= $_GET['mat10'];
$mat2= $_GET['mat11'];
$mat3= $_GET['mat12'];
$por1= $_GET['por10'];
$por2= $_GET['por11'];
$por3= $_GET['por12'];
$edf1= $_GET['edf10'];
$edf2= $_GET['edf11'];
$edf3= $_GET['edf12'];
$fil1= $_GET['fil10'];
$fil2= $_GET['fil11'];
$ing1= $_GET['ing10'];
$ing2= $_GET['ing11'];
$fq1= $_GET['fq10'];
$fq2= $_GET['fq11'];
$bi1= $_GET['bi10'];
$bi2= $_GET['bi11'];
$ex1= $_GET['ex1'];
$ex2= $_GET['ex2'];
$ex3= $_GET['ex3'];
$med= ((($mat1+$mat2+$mat3)/3)+(($por1+$por2+$por3)/3)+(($edf1+$edf2+$edf3)/3)+(($fq1+$fq2)/2)+(($bi1+$bi2)/2)+(($fil1+$fil2)/2)+(($ing1+$ing2)/2)+$op1+$op2)/9;
if ($ex1==BLANK()) {
	$ex1=$med
}
if ($ex2==BLANK()) {
	$ex2=$ex1
}
if ($ex3==BLANK()) {
	$ex3=(($ex2+$ex1)/2)
}
$medex= ($ex1+$ex2+$ex3)/3;
$fmedia= ($med+$medex)/2;
echo ($fmedia);
?>	