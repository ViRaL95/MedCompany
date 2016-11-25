$('document').ready(function(){
button=document.getElementById("button");
button.onclick=function () {
	var data=$("#loginform").serialize();
$.ajax({
	type:'POST',
	url:'../MedCompany/php/welcome.php',
	data:data,

	success: function(response){
		console.log("response was "+response);
		if(response=="Login Succesfull"){
			<?php
			header("Location: ../MedCompany/homepage.php"); 
			?>
		}
		else{
			$("#error").html('<div class="alert alert-info" role="alert">;' +response+ '</div>');

		}

	}


});


}
});