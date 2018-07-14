<?php 



function checklogin($email,$password){
	$pdo =new PDO('mysql:host=localhost;dbname=login;charset=utf8mb4','root','root');
	$stmt=$pdo->prepare("SELECT * from user where email=:email and password = :password");
	$stmt->execute(
		array(
			":email"=>$email,
			":password"=>md5($password)
		)
	);
	return $stmt->fetch(PDO::FETCH_ASSOC);
}



 ?>