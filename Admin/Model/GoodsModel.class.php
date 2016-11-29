<?php 
	namespace Admin\Model;
	use Think\Model;
	class GoodsModel extends Model{
		protected $_validate=array(
			array('goods_name','3,12','商品名必须为3到12的字符','1','length','3'),
			array('goods_sn','','商品货号不能重复','1','unique','3')
		);
		protected $_auto=array(
			array('add_time','time',1,'function'),
			array('last_update','time',2,'function')
			);
		protected $insertFields=array('goods_id','goods_sn','cat_id','brand_id','goods_name','shop_price','market_price','goods_number','click_count','goods_weight','goods_brief','goods_desc','thumb_img','goods_img','ori_img','is_on_sale','is_delete','is_best','is_new','is_host');
		protected $updateFields=array('shop_price','market_price','goods_weight','goods_brief','goods_desc','thumb-img','goods_img','ori_img','is_on_sale','is_delete','is_best','is_new','is_host');
	}
 ?>