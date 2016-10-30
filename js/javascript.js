
	$(document).ready(function() {
	    button=document.getElementById("button");
		button.disabled="true";
			
		$("#loginname").keyup(function(){
			loginname=document.getElementById("loginname");
			password=document.getElementById("password");
			//if login name does contain a value
			if(loginname.value){
				//if the password contains a value
				if(password.value){
					button.disabled=false;
				}
				//if the password doesnt contain a value
				else {
					button.disabled=true;
				}
			}
			//if the login name doesnt contain a value
			else
				button.disabled=true;
		});	

		$("#password").keyup(function(){
			//if a key press has occured in the password field 
			password=document.getElementById("password");
			loginname=document.getElementById("loginname");

			if(password.value){
				if(loginname.value){
					button.disabled=false;
				}
				else
					button.disabled=true;
			}
			else
				button.disabled=true;
		});
	});

