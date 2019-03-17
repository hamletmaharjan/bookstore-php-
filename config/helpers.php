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
?>