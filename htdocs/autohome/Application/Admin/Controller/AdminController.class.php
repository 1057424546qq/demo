<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
	public function index(){
		$this->display();
	}
	public function login_post(){	
		$ee = I('post.ee');
		if($ee == 'true'){
			$user =  I('post.user');
			
			$num = M("admin")->Field('login_num')->where("user='$user'")->select();
			$level = M("admin")->field('level')->where("user='$user'")->select();
			$time = M("admin")->field('last_time')->where("user='$user'")->select();
			$time = $time[0]['last_time'];
			if(empty($time)){
				$time = "";
				session('login.time',$time);
			}else{
				session('login.time',$time);
			}
			$level = $level[0]['level'];
			$num = $num[0]['login_num'];
			$ip=get_client_ip();
			session('now_time',date("Y-m-d H:i:s"));
			session('login.user',$user);
			
			session('login.num',$num+1);
			session('login.cou',$count);
			session('login.level',$level);
			session('login.ip',$ip);
			
			$data['last_time'] = $time;
			$data['login_num'] = $num+1;
			M('admin')->where("user='$user'")->save($data);
			
			$pwd =  $_POST['pwd'];
			$result = M('admin')->where("user='$user' and pwd='$pwd'")->count();
			$a = M('admin')->_sql();
			if($result){
				$this->success('登录成功！','index',2);
			}else{
				$this->error('登录失败！');
			}
			
		}else{
			echo "<script>alert('登录失败，请重新登录！');location.replace('login')</script>";
		}
		
	}
	//mian 主页
	public function main (){
		
		$login['user'] = session('login.user');
		$login['time'] = session('login.time');
		$login['num'] = session('login.num');
		$login['level'] = session('login.level');
		$login['ip'] = session('login.ip');
		$count = M("admin")->count();
		$login['count'] = $count;
		$this->assign('login',$login);
		$a =M("admin")->_sql(); 
		
		$this->display();
	}
	//生成验证码
    public function verify(){
        $config =    array(
		    'fontSize'    =>    40,    // 验证码字体大小
		    'length'      =>    4,     // 验证码位数
		    'useNoise'    =>    false, // 关闭验证码杂点
		);
	    $verify = new \Think\Verify($config);
        
        $verify->entry();
    }
    //检测验证码
   	public function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        $res = $verify->check($code, $id);
        $this->ajaxReturn($res, 'json');
    }
	public function user(){
		$user = $_POST['user'];
		$result = M('admin')->where("user='$user'")->count();
		$this->ajaxReturn($result, 'json');
	}
	public function pwd(){
		$user = session('login.user');
		$pwd = $_POST['pwd'];
		$result = M('admin')->where("user='$user' and pwd='$pwd' ")->count();
		$this->ajaxReturn($result, 'json');
	}
	//注册
	public function info(){
		$result = M('admin');
		$data['user'] = $_POST['user'];
		$data['pwd'] = $_POST['pwd'];
	   	if($_POST['level']== 0){
	   		$data['level'] = "信息录入员";
	   	}else if($_POST['level']== 1){
	   		$data['level'] = "一般管理员";
	   	}else if($_POST['level']== 2){
	   		$data['level'] = "超级管理员";
	   	}
		$data['locking'] = $_POST['locking'];
	   	$result->add($data);
	   	
	   	if($result){
	   		echo "<script>alert('操作成功！');location.replace('main_list')</script>";
	   	}else{
	   		echo "<script>alert('操作失败！');location.replace('main_info')</script>";
	   	}
//		window.top.location.replace('index')
	}
	//会员列表
	public function user_list(){
		$result['car_list'] = M("car_list")->select();
		$result['list'] = M('admin')->select();
		$a =M('admin')->_sql(); 
		$result['super_user'] = M('admin')->where("user='myadmin'")->field("super_user")->select();
		echo json_encode($result);
	}
	public function zt(){
		$data['locking'] = $_GET['locking'];
		$user = session('login.user');
		$result = M('admin')->where("user='$user'")->save($data);
	}
	//删除
	public function main_del(){
		$del_id = $_GET['id'];
		$result = M('admin');
		$result->where("id='$del_id'")->delete();
		if($result){
			echo json_encode(1);
		}else{
			echo json_encode(0);
		}
	}
	public function car_del(){
		$del_id = $_GET['id'];
		$result = M('car_list')->where("id='$del_id'")->delete();
		
		if($result){
			echo "<script>alert('操作成功');location.replace('/admin/admin/car_list')</script>";
			
		}else{
			echo "<script>alert('操作成功');location.replace('/admin/admin/car_list')</script>";
			
		}
		
	}
	public function main_edit(){
		if(!empty($_POST['pwd'])){
			$user = session('login.user');
			$pwd['pwd'] = $_POST['pwd'];
			$result = M("admin")->where("user='$user'")->save($pwd);
			if($result){
				echo "<script>alert('操作成功！');location.replace('main_list')</script>";
			}
		}
		$result = M("admin")->where("id='$edit_id'")->select();
		$a =M('admin')->_sql();
		print_r($a);
		$this->assign('list',$result);
		$this->display();
	}
	//退出、注销
	public function login_quit(){
		$user = session('login.user');
		$time['last_time'] = session('now_time');
		M("admin")->where("user='$user'")->save($time);	
		session($user,null);
		redirect(U('Admin/admin/login'));
	}
	//车商城列表
	//文件上传
	public function upload(){
	    if($_FILES['photo']['size']>0){
	    		$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   =     3145728 ;// 设置附件上传大小
		    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->rootPath  =     './public/img/upload/'; // 设置附件上传根目录
		    // 上传文件
		    $info   =   $upload->upload();
		    $data['img'] = $info['photo']['savepath'].$info['photo']['savename'];
		  
	    }else{
	    	  $data['img'] = $_POST['old_img'];
	    }
	    $data['title'] = $_POST['title'];
	    $data['des'] = $_POST['des'];
	    $data['active'] = $_POST['active'];
	    $data['price'] = $_POST['price'];
	    $data['sales'] = $_POST['sales'];
	    $data['url'] = $_POST['url'];
	    
	    if(!empty($_POST['id'])){
	    	 	$id = $_POST['id'];
	    	 	$old_img = $_POST['old_img'];
	    	 	$url = $_SERVER['DOCUMENT_ROOT']."/public/img/upload/".$old_img;
	    	 	unlink($url);
	    		$res = M("car_list")->where("id='$id'")->save($data);
	    }else{
			$res = M("car_list")->add($data);
	    }
			   
	   	if($res){
	   		echo "<script>alert('操作成功！');location.replace('car_list')</script>";
	   	}else{
	   		echo "<script>alert('操作失败！');location.replace('car_info')</script>";
	   	}
	   	
	}
	//车商城列表修改
	public function car_edit(){
		$id = $_GET['id'];
		$list = M('car_list')->where("id='$id'")->select();
		$this->assign('id',$id);
		$this->assign('list',$list);
		$this->display();
	}
	
}
?>