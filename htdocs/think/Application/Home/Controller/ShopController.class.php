<?php
namespace Home\Controller;
use Think\Controller;

class ShopController extends Controller{
	
	public function index(){
		$this->display();
	}
	
	public function shop_list(){
		
		$size = 3;
		$p = empty($_GET['p']) ? 1:$_GET['p'];
		$count = M('shop')->count();
		print_r($p);
		$Page       = new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		
		$list = M('shop')->page($p,$size)->select();
//		echo M('shop')->_sql(); 查看sql语句
//		print_r($list);
		$this->assign('list',$list);
		$this->assign('show',$show);
		
		$this->display();
		
	}
	public function shop_add(){
		
		$this->display();
	}
	public function shop_post(){
		$url = $_POST['url'];	
	
		$data['title'] = strip_tags($_POST['title']);
		$data['price'] = $_POST['price'];
		
		if(!empty($_POST['id'])){
			$id = $_POST['id'];
			$re = M("shop")->where("id=$id")->save($data);
		}else{
			$re = M("shop")->add($data);
		}
		
		
		if($re){
			$this->success('操作成功',$url,1);
		};
	}
	public function shop_edit(){	
		$url = $_SERVER['HTTP_REFERER'];		
		$id = $_GET['id'];

		$list = M("shop")->where("id=$id")->find();
		$this->assign('url',$url);
		$this->assign('list',$list);
		$this->assign('id',$id);
		$this->display();	
	}
	
	public function shop_del(){
		$url = $_SERVER['HTTP_REFERER'];
		$id = $_GET['id'];
		print_r($id);
		$re = M("shop")->where("id=$id")->delete();
		
		if($re){
			$this->success('操作成功',$url,1);
		};
	}
	
}	
	
?>