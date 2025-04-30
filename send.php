<?php
$name       = addslashes(strip_tags($_POST['name'])); 
$sub 		= addslashes(strip_tags($_POST['subject']));
$email     	= addslashes(strip_tags($_POST['email'])); 
$message    = addslashes(strip_tags($_POST['message'])); 
 
if(empty($name) || empty($email) || empty($message) || empty($sub)){header("Location:form.php?empty"); }else{
?>