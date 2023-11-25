$(document).ready(function() {
	
  
 $('#log').click(function() {
     if(confirm("are you student? Click OK!")){
        window.location.assign('dalib/login.html');
     }else{
     window.location.assign('mudir/login.html');
     }
 });
})
