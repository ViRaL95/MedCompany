$(document).ready(function(){
amount=document.getElementById("amount");
amount2=document.getElementById("amount2");
button1=document.getElementById("button1");
button2=document.getElementById("button2");
subtotal1=document.getElementById("subtotal-1");
subtotal2=document.getElementById("subtotal-2");
button1.disabled=true;
button2.disabled=true;

$(amount).bind("keyup input",function(){

if(amount.value==0){
button1.disabled=true;
subtotal1.innerHTML="0";
}

else{
button1.disabled=false;
value=amount.value;
value=value*1.99;
value=value.toFixed(2);
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
	value=value.toFixed(2);
	subtotal2.innerHTML=value;
}
});

button1.onclick=function(){
	var data=$("#medication-product-1").serialize();
	$.ajax({
		type:'POST',
		url:'./php/add-medicine-to-cart.php',
		data:data,
       
		success: function(response){
			console.log(response);
		}
	});


};
button2.onclick=function(){
	var data=$("#medication-product-2").serialize();
	$.ajax({
		type:'POST',
		url:'./php/add-medicine-to-cart.php',
		data:data,

		success: function(response){
			console.log(response);
		}

	});


};



});
