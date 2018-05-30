<?php
   header("content-type:text/html;charset=utf-8");
   $GetUser=$_POST['user'];
   $GetPassWord=$_POST['pass'];
// $GetPhone=$_POST['phone'];
   $MyUser='zhangsan';
   $MyPassWord='123456';
// $MyPhone="12345678912";
   
    if($GetUser==$MyUser&&$GetPassWord==$MyPassWord){
     	echo '登录成功';
    }else if($GetUser!=$MyUser&&$GetPassWord!=$MyPassWord){
        echo '账号或密码输入错误,请重新输入';
    }else{
    	echo "请重新输入正确的账号或密码";
    }
?>
