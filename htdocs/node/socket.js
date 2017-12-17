var io = require('socket.io')();


io.listen(8080);

io.on('connection', function(socket){
	
  socket.emit('welcome', '你好'); 
  // io.emit('broadcast', /* */); // emit an event to all connected sockets
  socket.on('send', function(data){
  	socket.emit('return_msg','你是男的女的')
  }); // listen to the event
});

console.log(123);