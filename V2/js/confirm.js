

$('document').ready(function(){
button=document.getElementById("button");
username=document.getElementById("username");
password=document.getElementById("password");
button.onclick=function () {
	var data=$("#loginform").serialize();
$.ajax({
	type:'POST',
	url:'./php/welcome.php',
	data:data,

	success: function(response){
		if(response=="Login Succesfull"){
			window.location="./homepage.php";
			console.log(response);

		}
		else if(response=="Login Failed"){
			$("#error").fadeIn(5000, function(){
				$("#error").html('<div class="alert alert-info" role="alert">Wrong Username and Password  </div>');
				username.value="";
				password.value="";
			});
			
		}

	}


});

return false;
}
});