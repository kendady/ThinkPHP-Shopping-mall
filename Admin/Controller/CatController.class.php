<?php 
	namespace Admin\Controller;
	use Think\Controller;
	class CatController extends Controller{
		//添加栏目
		public function catAdd(){
			if(!IS_POST){
				$this->display();
				exit();
			}
			//var_dump($_POST);
			$CatModel=D('Cat');
			echo $CatModel->add($_POST);
				
		}
		//栏目列表
		public function catList(){
			$CatModel=D('Cat');
			if(S('catlist')){
				$catlist=S('catlist');
				echo "缓存";
			}else{
				$catlist=$CatModel->getTree();
				S('catlist',$catlist,10);
				echo 'mysql';
			}
			//$catlist=$CatModel->select();
			$this->assign('catlist',$catlist);
			$this->display();
		}
		//栏目编辑	
		public function catEdit(){
			$CatModel=D('Cat');
			if(!IS_POST){
				$catinfo=$CatModel->find(I('cat_id'));
				$this->assign('info',$catinfo);
				$this->display();
			}else{
				//print_r(I());
				//exit();
				$CatModel->where("cat_id=".I('cat_id'))->save(I());	
			}
		}
		//栏目删除
		public function catDel(){
			$CatModel=D('Cat');
			if($CatModel->delete(I('cat_id'))){
				$this->redirect('Admin/Cat/catList');
			}else{
				echo "删除失败!";
			}
		}
	}
 ?>