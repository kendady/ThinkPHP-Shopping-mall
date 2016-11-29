<?php 
	namespace Home\Controller;
	use Home\Tool\CartTool;
	use Think\Controller;
	class BuyController extends Controller{
		public function add(){
			$goods_info=D('goods')->find(I('goods_id'));
			$cart= CartTool::getIns();
			if($goods_info){
			$cart->add($goods_info['goods_id'],$goods_info['goods_name'],$goods_info['shop_price'],$goods_info['market_price']);
			 $this->redirect('Home/Goods/checkout');
			}
		//$this->redirect('Home/Goods/checkOut');	
		}
	}
 ?>