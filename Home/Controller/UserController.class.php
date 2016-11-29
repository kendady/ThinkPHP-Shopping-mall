<?php 
	namespace Home\Controller;
	use Think\Controller;
	class UserController extends Controller{
		public function login(){
			if(!IS_POST){
				$this->display();
			}else{
				$this->check_vcode(I('post.vcode'));
				$user=D('User')->where('username='."'".I('username')."'")->find();
				if(MD5(I('password').$user['salt'])!=$user['password']){
					$this->error('密码或用户名错误!','');
				}else{
					cookie('username',$user['username']);
					cookie('code',MD5($user['username'].C('salt')));
					$this->redirect('Home/Index/index');
				}	
			}
		}
		public function reg(){
			if(!IS_POST){
				$this->display();
			}else{
				$UserModel=D('User');
				$salt=mt_rand(1111,9999);
				$_POST['salt']=$salt;
				if(!$UserModel->create(I())){
					echo $UserModel->getError();
				}else{
					$UserModel->password=MD5(I('post.password').$salt);
					//print_r(I('post.password'));
					//exit();
					$UserModel->add();
					$this->success('注册成功','login','5');
				}
			}
			
		}
		public function logOut(){
			cookie('username',null);
			cookie('code',null);
			$this->redirect('Home/Index/index');
		}
		public function vcode(){
			$code=new \Think\Verify();
			$code->imageW=150;
			$code->imageH=50;
			$code->fontSize=15;
			$code->length=1;
			$code->useNoise=false;
			$code->entry();
		}
		public function check_vcode($vcode){
			$verify=new \Think\Verify();
			if(!$verify->check($vcode)){
				$this->error('验证码错误!','login');
			}else{
				return true;
				//echo 11;
			}
		}
	}
 ?>