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

?>