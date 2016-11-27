$(document).ready(function(){
amount=document.getElementById("amount");
amount2=document.getElementById("amount2");
button=document.getElementById("button");
button2=document.getElementById("button2");
subtotal1=document.getElementById("subtotal-1");
subtotal2=document.getElementById("subtotal-2");
button.disabled=true;
button2.disabled=true;

$(amount).bind("keyup input",function(){

if(amount.value==0){
button.disabled=true;
subtotal1.innerHTML="0";
}

else{
button.disabled=false;
value=amount.value;
value=value*1.99;
subtotal1.innerHTML=value;
}
});

$(amount2).bind("keyup input",function(){

if(amount2.value==0){
	button2.disabled=true;
	subtotal2.innerHTML="0"
}else{
	button2.disabled=false;
	value=amount2.value;
	value=value*3.99;
	subtotal2.innerHTML=value;
}
});

button.onclick=function(){
	console.log("entered button click ");	
	var data=$("#vitamins-product-1").serialize();
	console.log(data);
	$.ajax({
		type:'POST',
		url:'../MedCompany/php/add-vitamins-to-cart.php',
		data:data,

		success: function(response){
			console.log(response);
			if(response=="Success"){
				console.log("yo");
			}
			else{



			}
		}





	});


};




});
