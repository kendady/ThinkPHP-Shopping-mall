<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->cat();
    	$this->getImage('is_hot');
    	$this->getImage('is_best');
    	$this->getImage('is_new');
        $this->display();
    }
    public function help(){
        $this->display();
    }
    public function getImage($list){
    		$lists=D('Goods')->field('goods_id,goods_name,shop_price,market_price,thumb_img,goods_img')->where("$list=1")->order('goods_id desc')->limit(4)->select();
    		$this->assign("$list",$lists);	
    }
    public function cat(){
    	$tree=D('Admin/Cat')->getTree();
    	$this->assign('tree',$tree);
    	//print_r($tree);
    	//exit();
    }
}