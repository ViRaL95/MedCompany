$(document).ready(function(){
signout=document.getElementById("sign-out");

signout.onclick=function(){
	$.ajax({
		type:'POST',
		url:'./php/clear.php',

		success:function(response){
			window.location='./index.php'
		}

	})
}
});
