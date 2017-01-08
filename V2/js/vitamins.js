window.onload=function(){
button1=document.getElementById("button1");
button2=document.getElementById("button2");
number1=document.getElementById("amount1");
number2=document.getElementById("amount2");
number1.value=0;
number2.value=0;
button1.disabled=true;
button2.disabled=true;


var medicine=angular.module("myModule2",[])
.controller("mycontroller2",function($scope){
		var subtotal={
			subtotal1:0,
			subtotal2:0

		}
	$scope.subtotal=subtotal;

		$scope.changed=function(){
		if(subtotal.subtotal1>0){
			button1.disabled=false;
		}
		else {
			button1.disabled=true;
		}

		}

	$scope.changed2=function(){
		if(subtotal.subtotal2>0){
			button2.disabled=false;
		}
		else{
			button2.disabled=true;
		}

	}	
});


button1.onclick=function(){
	vex.dialog.buttons.YES.text="Purchase"
	vex.dialog.buttons.NO.text="Cancel"
	vex.dialog.confirm({
	message:"Are you sure you want to purchase this item?",
	callback: function(value){	
	var data=$("#vitamins-product-1").serialize();
	$.ajax({
		type:'POST',
		url:'./php/add-vitamins-to-cart.php',
		data:data,
       
		success: function(response){
			console.log(response);
		}
	});
}
});

};
button2.onclick=function(){
	vex.dialog.buttons.YES.text="Purchase"
	vex.dialog.buttons.NO.text="Cancel"
	vex.dialog.confirm({
	message:"Are you sure you want to purchase this item?",
	callback: function(value){	
	var data=$("#vitamins-product-2").serialize();
	$.ajax({
		type:'POST',
		url:'./php/add-vitamins-to-cart.php',
		data:data,
       
		success: function(response){
			console.log(response);
		}
	});
}
});
};
}
