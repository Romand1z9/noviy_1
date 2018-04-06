<?php 
 if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$phone = $_POST['phone'];
 	$new = array('name' => $name, 'email' => $email, 'phone' => $phone);
 	echo json_encode($new, JSON_UNESCAPED_UNICODE);	
 }
?>