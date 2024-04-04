<?php
session_start();
$q1= $_POST['q1'];
$q2= $_POST['q2'];
$q3= $_POST['q3'];
$q4= $_POST['q4'];
$q5= $_POST['q5'];
$q6= $_POST['q6'];
$q7= $_POST['q7'];
$q8= $_POST['q8'];
$q9= $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$q13 = $_POST['q13'];
$q14 = $_POST['q14'];
$q15 = $_POST['q15'];
$u1 = $_POST['u1'];
$u2 = $_POST['u2'];
$u3 = $_POST['u3'];
$u4 = $_POST['u4'];
$u5 = $_POST['u5'];
$u6 = $_POST['u6'];
$u7 = $_POST['u7'];
$u8 = $_POST['u8'];
$u9 = $_POST['u9'];
$u10 = $_POSTT['u10'];
$u11 = $_POST['u11'];
$u12 = $_POST['u12'];
$u13 = $_POST['u13'];
$u14 = $_POST['u14'];
$u15 = $_POST['u15'];
$r1 = "Artistico";
$r2 = "Social";
$r3 = "Enterprising";
$r4 = "Convencional";
$r5 = "Realista";
$r6 = "Investigação";
$rf = 0
$score = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11 + $q12 + $q13 + $q14 + $q15 + $u1 + $u2 + $u3 + $u4 + $u5 + $u6 + $u7 + $u8 + $u9 + $u10 + $u11 + $u12 + $u13 + $u14 + $u15;

if (-60 <= $score && $score <= -40) {
    $rf = $r1;
} elseif (-40 < $score && $score <= -20) {
    $rf = $r2;
} elseif (-20 < $score && $score <= 0) {
    $rf = $r3;
} elseif (0 < $score && $score <= 20) {
    $rf = $r4;
} elseif (20 < $score && $score <= 40) {
    $rf = $r5;
} elseif (40 < $score && $score <= 60) {
    $rf = $r6;
}
$_SESSION['rf'] = $rf;
var_dump($_SESSION['rf']);
header("Location: quizz.php");
exit();
?>