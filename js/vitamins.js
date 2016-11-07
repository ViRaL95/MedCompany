$(document).ready(function(){
amount=document.getElementById("amount");
amount2=document.getElementById("amount2");
button=document.getElementById("button");
button2=document.getElementById("button2");
button.disabled=true;
button2.disabled=true;
console.log("sdfd");

$(amount).bind("keyup input",function(){

if(amount.value==0){
button.disabled=true;
}

else{
button.disabled=false;
}
});

$(amount2).bind("keyup input",function(){

if(amount2.value==0){
	button2.disabled=true;
}else{
	button2.disabled=false;
}
});
});
