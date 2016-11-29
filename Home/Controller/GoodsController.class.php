<?php 
	namespace Home\Controller;
	use Think\Controller;
	use Home\Controller\BuyController;
	class GoodsController extends Controller{
		public function goods(){
			$goods=D('Goods');
			$goods_info=$goods->find(I('goods_id'));//查询单个goods商品信息
			$goods_comment=$goods->relationGet('comment');//关联查询,查询某个goods下的评论
			//print_r($goods_comment);
			//exit();
			//查看过的商品信息写入浏览记录中
			if($goods_info){
				$this->history($goods_info);
			}
			//某商品上架时间格式化
			$goods_info['add_time']=date('Y-m-d H:i:s',$goods_info['add_time']);
			//通过的所属栏目制作goods商品的面包屑层级
			$tree=$this->goods_nav($goods_info['cat_id']);
			//输出获取的goods商品面包屑层级数据到当前的类属性
			$this->assign('gnav',$tree);
			$this->assign('comment',$goods_comment);//输出某商品下的评论
			$this->assign('goods_info',$goods_info);//输出获取的某goods商品的信息到当前的类属性
			//print_r($this->comment);
			$this->display();
		}
		//获取goods商品页的面包屑
		public function goods_nav($cat_id){
			//通过某Goods商品所属的栏目类查询栏目信息
			$row=D('Cat')->find($cat_id);
			$tree=array();
			$tree[]=$row;//某goods商品栏目信息写入数组
			//循环查找栏目的父类,直至底层parent_id=0结束
			while($row['parent_id']>0){
				$row=D('Cat')->find($row['parent_id']);//栏目的parent_id!=0写入数组
				$tree[]=$row;
			}
			return array_reverse($tree);//返回反转后某商品所属栏目的层级关系的数组
		}
		//记录浏览过的商品信息
		public function history($info){
			//判断是否有session值
			$row=session('?his') ? session('his'):array();
			//var_dump($row);
			//exit();
			$g=array();
			$g['goods_name']=$info['goods_name'];//获取商品名字段
			$g['goods_id']=$info['goods_id'];//获取商品ID字段
			$g['shop_price']=$info['shop_price'];//获取商品本店价字段
			$row[$info['goods_id']]=$g;//获取的商品信息写入到数组
			//var_dump($row);
			//exit();
			//判断浏览过的商品品种记录是否超过7条
			if(count($row)>7){
				$key=key($row);//取出数组当前的键值
				unset($row[$key]);//商品品种记录大于7条,删除第一条商品记录
			}
			session('his',$row);//浏览过的商品记录写入session
		}
		//商品添加至购物车,下单
		public function checkOut(){
			$Buy=new BuyController();
			$add=$Buy->add();//添加商品至购物车
			$cart=\Home\Tool\CartTool::getIns();
			//session('cart',null);
			//var_dump(session('cart'));
			//exit();
			$this->assign('cart',session('cart'));//
			$this->assign('calcMoney',$cart->calcMoney());//输出购物车中总金额(本店价)至本类属性中
			$this->assign('marketMoney',$cart->marketMoney());//输出购物车中总金额(市场价)至本类属性中
			$this->assign('calcCnt',$cart->calcCnt());//输出购物车商品数量
			$this->assign('per',$cart->per());//输出优惠百分比至本类属性中
			//$this->clear();
			//var_dump(session('calcCnt'));
			//exit();
			$this->display();
		}
		//商品提交支付
		public function done(){
			$oi=D('ordinfo');
			$cart = \Home\Tool\CartTool::getIns();
			//print_r($_POST);
			//exit();
			$oi->create();//获取$_POST提交的数据;
			$oi->ord_sn=$ord_sn=date('Y-m-d').rand(1111,9999);//添加订单号,写入数组
			$oi->user_id=cookie('user_id')?cookie('user_id'):0;//判断用户身份,写入数组
			$oi->money=$cart->calcMoney();//添加支付的总金额(本店价),写入数组
			$oi->ordtime=time();//下单时间写入数组;
			//var_dump($oi->add());
			//exit();
			//判断下单是否成功(订单信息是否成功入库)
			if($ordinfo_id=$oi->add()){
				$og=D('ordgoods');
				$data=array();
				//获取购买商品信息,按商品品种写入$data数组中
				foreach($cart->items() as $k=>$v){
					$row=array();
					$row['ordinfo_id']=$ordinfo_id;
					$row['goods_id']=$k;
					$row['goods_name']=$v['goods_name'];
					$row['shop_price']=$v['shop_price'];
					$row['goods_num']=$v['num'];//获取购买的某种商品的数量
					$data[]=$row;//按商品品种依次写入$data数组中
				}
				//print_r($data);
				//exit();
				//判断购买的商品是否成功入库
				if($og->addAll($data)){
					$this->assign('ord_sn',$ord_sn);//输出购买的商品订单号至本类属性中
					$this->assign('money',$cart->calcMoney());//输出购买的商品总价格
					//session('cart',null);
					//var_dump(session('cart',null));
					//exit();
					$this->display();
					//$this->redirect('checkOut');
				}		
			}else{
				exit('订单提交失败!');
			}		
		}
		//商品留言评论功能
		public function addComment(){
			//print_r(I());
			//exit();
			D('comment')->create($_POST);
			if(D('comment')->add()){
				$this->success('评价成功!','',3);
			}else{
				$this->error('评价失败!','');
			}
		}
		//清空购物车
		public function clear(){
			session('cart',null);
		}
	}
 ?>
