<?php
	header("content-type:text/html;charset=utf-8");
	
	$GetUser=$_POST['user'];
   	$GetPassWord=$_POST['pass'];
  	
	
	//每次循环第一次是空的,定义UId,补位,直接循环第二次
	$arr1=array(
		array(
			"UId"=>"1",
			'username'=>"zhangsan",
			"password"=>"123123",
		),
		array(
			"UId"=>"2",
			'username'=>"lisi",
			"password"=>"123456",
		),
		array(
			"UId"=>"3",
			'username'=>"wangwu",
			"password"=>"123321",
		),
		array(
			"UId"=>"4",
			'username'=>"asdfg",
			"password"=>"asd123",
		),
		array(
			"UId"=>"5",
			'username'=>"456wed",
			"password"=>"78945",
		),
	);
	
	foreach($arr1 as $key=>$val){
//		echo $key."<hr>";
				
		 for($i=0;$i<count($key);$i++){
			while(list($key,$value)=each($val)){
//				echo each($val)['value'];
//				echo "<br>";
//				echo each($val)['value'];
				$MyUser=each($val)['value'];//用户名
  				$MyPassWord=each($val)['value'];//密码
//				echo $username."=>".$password;
				if($GetUser==$MyUser&&$GetPassWord==$MyPassWord){
			     	echo '登录成功';
			    }else if($GetUser!=$MyUser&&$GetPassWord!=$MyPassWord){
			        echo '账号或密码输入错误,请重新输入';
			    }else{
			    	echo "请重新输入正确的账号或密码";
			    }
			};
		 }		
	};
	
	
//	
	
	
	
?>
