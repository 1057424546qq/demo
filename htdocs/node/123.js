//1、express 模块（apache）
//路由 params query
//2、mysql 模块
//var app = require('./express'); ./表示自己定义的
//var app = require('http'); 系统内置模块
//var mod = require('./mod');
//mod.name;
var app = require('express')();//安装的系统模块 npm install
	var mysql      = require('mysql');//定义数据库

	var connection = mysql.createConnection({//数据库信息
	  host:'127.0.0.1',user:'root',password:'root',database:'school'
	});
	connection.connect(); //链接数据库

app.get('/get/:id',function(req,res){
//	var id = req.query.id;
//	var name = req.query.name;
	var id = req.params.id;
	var sql = 'select * from student where id='+id;
	connection.query(sql, function (error, results, fields) {
	  res.send(results);
	});
})
app.listen(8080);//监听 locahost
console.log("ok");


