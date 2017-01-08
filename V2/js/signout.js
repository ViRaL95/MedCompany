$(document).ready(function(){
signout=document.getElementById("sign-out");

signout.onclick=function(){

vex.dialog.buttons.YES.text="Sign Out"
vex.dialog.buttons.NO.text="Continue Shopping"
vex.dialog.confirm({
message: 'If you Signout all your information will be lost!',
callback: function (value) {
    if (value) {
    	$.ajax({
		type:'POST',
		url:'./php/clear.php',
		success:function(response){
		window.location="./index.php";
	}
	})
    } 
}	
});
}
});
