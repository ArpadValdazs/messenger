function message(text) {
	$('#chatField').append(text);
}
$(document).ready(function(){

	let socket = new WebSocket("ws://localhost:8090/server.php")

socket.onopen = function() {
	message("<div>Соединение установлено</div>");
}

socket.onerror = function(error) {
	message("<div>Ошибка при соединении"+(error.message ? error.message : "") +"</div>");
}

socket.onclose = function(){
	message("<div>Соединение закрыто</div>");
}
socket.onmessage = function(event){
	let data = JSON.parse(event.data);
	message("<div>"+data.type+"-"+ data.message +"</div>")
}


})

