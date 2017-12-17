<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index() {
		echo "HELLO THINKPHP";
	}
	public function get_data(){
		echo date('Y-m-d');
	}
	public function show(){
		echo "<h3>江欣欣是个大坏蛋！</h3>";
		for($i=1;$i<6;$i++){
			echo "<h$i>$i</h$i>";
		}
	}

}
