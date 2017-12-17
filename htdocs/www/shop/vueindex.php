<?php
include('admin/validate.php');
	$search = '';
	if(!empty($_GET['pid'])){
		$pid = $_GET['pid'];
		$search = "&sort_id=$pid";
		$where = " where  sort_id='$pid' ";
		$p = $pid;
		$sql2 = "select name from search as n where id='$p'";
		$result2 = mysqli_query($link, $sql2);
		$list2 = mysqli_fetch_assoc($result2);
		
	}else{
		$pid = '';
		$where = '';
	};
	

	
	if(empty($_GET['page'])){
		$page = 1;
	}else{
		$page = $_GET['page'];
	}
	
	$size = 2;
	$start = ($page-1)*$size;
	
	$n = mysqli_query($link, "select count(*) as n from shop $where ");
	$n = mysqli_fetch_assoc($n);
	$n = $n['n'];
	$page_tot = ceil($n/$size);
	
	$pre_page = $page-1;
	if($pre_page<1){
		$pre_page=1;
	}
	$next_page = $page+1;
	if($next_page>$page_tot){
		$next_page=$page_tot;
	}
	
	$sql = "select * from shop $where limit  $start,$size ";
	$list = mylist($link, $sql);
	
	$sql1 = "select * from search";
	$list1 = mylist($link, $sql1);
	
	$re['list'] = $list;
	$re['sort']= $list1;
	
	$re['page']= $page;
	
	$re['pageall']= $page_tot;
	$re['pre_page']= $pre_page;
	$re['next_page']= $next_page;
   
   echo json_encode($re);
?>