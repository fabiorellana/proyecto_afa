 
    


	
	function noticomowsp(){
    Notification.requestPermission();

function spawnNotification(theBody,theIcon,theTitle) {
  var options = {
      body: theBody,
      icon: theIcon
  }
  var n = new Notification(theTitle,options);
  setTimeout(n.close.bind(n), 5000); 
}

spawnNotification("Solicitud de traspaso", undefined, "Tienes una nueva Notificacion");
	}
    
	
	//funcion jugadores traspaso

