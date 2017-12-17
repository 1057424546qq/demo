<?php
	namespace Home\Controller;//命名空间
	use Think\Controller; //使用
	
	class BookController extends Controller {
		protected 	
		public function index(){
			$title ='hello';
			$arr['id']= 1;
			$arr['name']= 'ad';
			$arr['num']= 33;
			if(empty($_GET['p'])){
				$p = 1;
			}else{
				$p = $_GET['p'];
			}
			
			$count = M('shop')->count();
			print_r($count);
			
			$size = 5;
			$Page       = new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show       = $Page->show();// 分页显示输出
			$list = M("shop")->page("$p,$size")->select();
			
			$this->assign('list',$list);
			$this->assign('show',$show);
			$this->assign('title',$title);
			$this->assign('arr',$arr);
			$this->display();
		}
		public function add(){
			$this->display();
		}
		public function book_post(){
			$data['name'] = $_POST['title'];
			$data['price'] = $_POST['price'];
			
			$re = M('book') -> add($data);
			if($re){
				echo "1";
			}
		}
		public function book_del(){
			
		}
	}
	
	
?>