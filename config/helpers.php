<?php


function redirect($path)
{
	return header('location:'.$path);
}

function redirection($path)
{
	echo '<script>window.location.href="'.$path.'";</script>';
}

function dd($data)
{
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}

function ShowMessage($message, $messageType){
	switch ($messageType) {
		case 'success':
			$_SESSION['msg'] = '<div class="alert alert-success fade in">
                                  <button data-dismiss="alert" class="close close-sm" type="button">
                                      <i class="icon-remove"></i>
                                  </button>
                                  <strong>Well done!</strong>'.$message.'
                              	</div>';
			break;
		
		default:
			
			break;
	}
}

function DisplayMessage(){
	 if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

}


function UploadFile($path,$file){
	//dd($file);
	$source = $file['tmp_name'];
	$oldName = $file['name'];
	$temp = explode('.', $oldName);
	$newName = md5(rand(111111,999999).time().$temp[0]).'.'.$temp[1];
	
	if(!is_dir($path)){
		mkdir($path,777);
	}

	if(move_uploaded_file($source,$path.'/'.$newName)){
		return $newName;
	}
	else{
		return false;
	}


}

?>