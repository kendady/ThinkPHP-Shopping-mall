<?php 
	namespace Admin\Controller;
	use Think\Controller;
	class GoodsController extends Controller{
		//添加商品
		public function goodsAdd(){
			if(!IS_POST){
				$this->display();
			}else{
				$GoodsModel=D('Goods');
				$upload=new \Think\Upload();
				$upload->maxSize=31457286;
				$upload->exts=array('jpg','png','gif','jpeg');
				$upload->rootPath='Public/upload/';
				$info=$upload->upload();
				if(!info){
					echo $upload->getError();
				}else{
					$_POST['goods_img']='Public/upload/'.$info['goods_img']['savepath'].$info['goods_img']['savename'];
					$img=new \Think\Image();
					$img->open($_POST['goods_img']);
					$thumb_path='Public/upload/thumb/'.$info['goods_img']['savename'];
					$img->thumb(150,150)->save($thumb_path);
					$_POST['thumb_img']=$thumb_path;
				}
				if(!$GoodsModel->create()){
					exit($GoodsModel->getError());
				}else{
					$GoodsModel->add();
					$this->success('添加成功','',5);
				}
			}
		}
		//商品列表
		public function goodsList(){
			$GoodsModel=D('Goods');
			//查询满足条件的总条数
			$count=$GoodsModel->count();
			//实例化分页类,传入总条数和每页条数
			$Page=new \Think\Page($count,10);
			//调用分页方法,分页输出
			$show=$Page->show();
			$list = $GoodsModel->order('goods_id')->limit($Page->firstRow.','.$Page->listRows)->select();
			//$Goods=$GoodsModel->select();
			$this->assign('list',$list);
			$this->assign('Page',$show);
			$this->display();
		}
		//编辑商品
		public function goodsEdit(){
			$GoodsModel=D('Goods');
			if(!IS_POST){
				$GoodsList=$GoodsModel->find(I('goods_id'));
				//print_r($GoodsList);
				$this->assign('list',$GoodsList);
				$this->display();
			}else{
				$GoodsModel->where('goods_id='.I('goods_id'))->save(I());
				$this->redirect('Admin/Goods/goodsList');
			}
			
		}
		//删除商品
		public function goodsDel(){
			$GoodsModel=D('Goods');
			if(!$GoodsModel->delete(I('goods_id'))){
				exit($GoodsModel->getError());
			}else{
				$this->redirect('Admin/Goods/goodsList');
			}
		}
	}
 ?>