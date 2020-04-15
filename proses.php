<?php
if(!empty($_POST)){
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $q9 = $_POST['q9'];
    $q10 = $_POST['q10'];
    $q11 = $_POST['q11'];
    $q12 = $_POST['q12'];

    $s1 = $q1+$q2+$q3+$q4;
    $s2 = $q6;
    $s3 = $q7+$q8;
    $s4 = $q9+$q10+$q11+$q12;

    $sTotal = $s1+$s2+$s3+$s4;

    if($sTotal >= 2){
        header("location:input-data.php");
    }else{
        header("location:success.php");
    }
}
?>