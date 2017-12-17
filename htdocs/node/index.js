class myClass{
	myfun(){
		this.name = "hi";
		this.aga = 20;
		this.sex = "男";
		this.info = {id:1,name:"node.js"};
	}
	getname(){
		console.log(this);
	}
}

var myObj = new myClass;
myObj.myfun();
myObj.getname();