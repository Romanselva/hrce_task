<?php
$name=$_POST['name'];
$json=array('name'=>'.$name.');
echo json_encode($json);
?>