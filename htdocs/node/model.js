//自定义模块
class myclass{
	constructor(id,name){
		this.id = id;
		this.name = name;
	}
	myfun(){
		console.log(this.id+this.name)
	}
	getname(){
		console.log('this is getname')
	}
}
module.exports = myclass;
