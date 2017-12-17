<?php
	$db = mysqli_connect("127.0.0.1","root","root","school");
	$sql = "select * from student";
	$result = mysqli_query($db,$sql);
	$list = mysqli_fetch_all($result,MYSQLI_ASSOC);
//<link href="https://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script type="text/javascript" src="https://cdn.bootcss.com/Chart.js/2.6.0/Chart.js"></script>
</head>
<body>

<div style="width:1000px;">
<canvas id="myChart" width="1000" height="400"></canvas>
</div>


<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
        				<?php 
        					foreach($list as $v){
        				?>
        					"<?php echo $v['name'] ?>",
        				<?php
        					}	
        				?>
        	],
        datasets: [{
            label: '',
            data: [
            <?php 
        					foreach($list as $v){
        				?>
        					0,"<?php echo $v['scroe'] ?>",
        				<?php
        					}	
        				?>
        			]
        }]
        
    }
});
</script>

</script>
</body>
</html>