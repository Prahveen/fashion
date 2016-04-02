<?php


	require_once '../core/database/db_func.php';


$ob1 = new Join();
 $reuslt= $ob1->inner_join('users' , 'cover');
print_r($result['username']);
?>