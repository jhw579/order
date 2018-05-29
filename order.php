<?php
	$User=$_GET['name'].$_GET['pass'];
	$MyUser='zhangsan';
	$MyPass='123123';
	if($User==$MyUser.$MyPass){
		echo 'ok';
	}else{
		echo 'error';
	}
?>