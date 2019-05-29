<?php

function Verify($conn,$data){
	$data['password'] = md5($data['password']);
	$stmt = $conn->prepare("SELECT * FROM table_admin WHERE email=:email AND password=:pass AND status='active'");
	$stmt->bindParam(':email',$data['email']);
	$stmt->bindParam(':pass',$data['password']);
	if($stmt->execute()){
		
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		/* 
		if($stmt->rowCount()>0){
			$info = $stmt->fetch();
			print_r($info);
			return true;
		}
		*/

		$info = $stmt->fetch();
		if(!$info==NULL){
			$_SESSION['email'] = $info['email'];
			$_SESSION['role'] = $info['role'];
			$_SESSION['id'] = $info['id'];
			$_SESSION['user'] = $info['first_name'].' '.$info['last_name'];
			return true;
		}

		

		
	}
	else{
		return false;
	}
}


function CheckAdminLogin(){
	if(isset($_SESSION['email']) && isset($_SESSION['role'])){
		return true;
	}
	else{
		return false;
	}
}

function Logout(){
	session_destroy();

	return true;
}

function CheckUserLogin(){
	if(isset($_SESSION['customer']) && isset($_SESSION['c_id'])){
		return true;
	}
	else{
		return false;
	}
}

function VerifyCustomer($conn,$data){
	//$data['password'] = md5($data['password']);
	$stmt = $conn->prepare("SELECT * FROM table_customer WHERE c_username=:username AND c_password=:pass");
	$stmt->bindParam(':username',$data['c_username']);
	$stmt->bindParam(':pass',$data['c_password']);
	if($stmt->execute()){
		
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		/* 
		if($stmt->rowCount()>0){
			$info = $stmt->fetch();
			print_r($info);
			return true;
		}
		*/

		$info = $stmt->fetch();
		if(!$info==NULL){
			$_SESSION['customer'] = $info['c_username'];
			$_SESSION['c_id'] = $info['c_id'];
			return true;
		}

		

		
	}
	else{
		return false;
	}
}

?>