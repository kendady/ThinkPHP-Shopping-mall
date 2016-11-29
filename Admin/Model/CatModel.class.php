<?php 
	namespace Admin\Model;
	use Think\Model;
	class CatModel extends Model{
		public $Cats;
		public function __construct(){
			parent::__construct();
			$this->Cats=$this->select();//查询cat表中的数据
		}
		public function getTree($id=0,$lev=0){
			$tree=array();
			foreach($this->Cats as $v){
				if($v['parent_id']==$id){
					$v['lev']=$lev;
					$tree[]=$v;
					$tree=array_merge($tree,$this->getTree($v['cat_id'],$lev++));
				}
			}
			return $tree;
		}
	}
 ?>