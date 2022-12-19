<?php 
session_start();

$num=0;
if(isset($_SESION['num'])){
    $num=$SESSION['num'];
}
$SESSION['num'] = ++$num;
echo $num;