<?php 
	namespace Home\Controller;
	use Think\Controller;
	class CatController extends Controller{
		public function cat(){
			//$cat_id=I('cat_id');
			//$cat_goods=D('Admin/Goods')->Field('goods_id,goods_name,goods_img,shop_price,market_price')->where("cat_id=".i('cat_id'))->order('goods_id desc')->select();
			//print_r(array_reverse(session('history')));
			$tree=D('Admin/Cat')->getTree();
			$goodsAll=$this->goodsAll(I('cat_id'));
			$this->assign('cat_goods',$goodsAll);
    		//print_r($goodsAll);
    		//exit();
			$this->assign('his',array_reverse(session('his')));
			//$this->assign('cat_goods',$cat_goods);
			$this->assign('cat_goods',$goodsAll);
			$this->assign('tree',$this->cat_nav());
			$this->display();
		}
		public function cat_nav($cat_id){
			$cat=D('cat');
			$cat_info=$cat->find(I('cat_id'));
			$tree[]=$cat_info;
			while($cat_info['parent_id']>0){
				$tree[]=$cat_info=$cat->find($cat_info['parent_id']);
			}
			return array_reverse($tree);
		}
		public function goodsAll($id){
			//var_dump($id);
			//exit();
			$cat=D('Admin/Cat');
			$goods=D('Admin/Goods');
			//var_dump($goods);
			//var_dump($cat->Cats);
			//exit();
			$goodsAll=$goods->Field('goods_id,goods_name,goods_img,shop_price,market_price')->where("cat_id=".$id)->select();
			//print_r($goodsAll);
			//exit();
			foreach($cat->Cats as $v){
				//var_dump(($v['parent_id']==$id));
					//exit();
				if($v['parent_id']==$id){
					//$goodsAll=$goods->where("cat_id=".$v['parent_id'])->select();
					//$goodsAll[]=$goodsAll[0];
					//var_dump($goods->getLastSql());
					$goodsAll=array_merge($goodsAll,$this->goodsAll($v['cat_id']));
				}
			}
			return $goodsAll;
		}	
}
 ?>