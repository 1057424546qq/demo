// include require
var m = require('./model');
var a = require('ejs');
var obj1 = new m(1,'mynode');
obj1.myfun();

var obj2 = new m(2,'php');
obj2.myfun();
