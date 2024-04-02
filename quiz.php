<?php
$q1= $_GET['q1'];
$q2= $_GET['q2'];
$q3= $_GET['q3'];
$q4= $_GET['q4'];
$q5= $_GET['q5'];
$q6= $_GET['q6'];
$q7= $_GET['q7'];
$q8= $_GET['q8'];
$q9= $_GET['q9'];
$q10 = $_GET['q10'];
$q11 = $_GET['q11'];
$q12 = $_GET['q12'];
$q13 = $_GET['q13'];
$q14 = $_GET['q14'];
$q15 = $_GET['q15'];
$u1 = $_GET['u1'];
$u2 = $_GET['u2'];
$u3 = $_GET['u3'];
$u4 = $_GET['u4'];
$u5 = $_GET['u5'];
$u6 = $_GET['u6'];
$u7 = $_GET['u7'];
$u8 = $_GET['u8'];
$u9 = $_GET['u9'];
$u10 = $_GET['u10'];
$u11 = $_GET['u11'];
$u12 = $_GET['u12'];
$u13 = $_GET['u13'];
$u14 = $_GET['u14'];
$u15 = $_GET['u15'];
$score = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11 + $q12 + $q13 + $q14 + $q15 + $u1 + $u2 + $u3 + $u4 + $u5 + $u6 + $u7 + $u8 + $u9 + $u10 + $u11 + $u12 + $u13 + $u14 + $u15;

if (-60 <= $score && $score <= -40) {
    echo "Artistico";
} elseif (-40 < $score && $score <= -20) {
    echo "Social";
} elseif (-20 < $score && $score <= 0) {
    echo "Enterprising";
} elseif (0 < $score && $score <= 20) {
    echo "Convencional";
} elseif (20 < $score && $score <= 40) {
    echo "Realista";
} elseif (40 < $score && $score <= 60) {
    echo "Investigação";
}
?>