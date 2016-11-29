<?php 
	namespace Home\Model;
	use Think\Model;
	class UserModel extends Model{
		public $_validate=array(
			array('username','3,12','用户名为3到12位','1','length',3),
			array('username','','用户名已注册','1','unique',3),
			array('email','email','非法邮箱','1','',3),
			array('email','','邮箱已注册','1','unique',3),
			array('password','3,12','密码必须为3到12位','1','length',3),
			array('password','confirm_password','密码不一致','1','confirm',3)
			);
	}
 ?>