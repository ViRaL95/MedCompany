$(document).ready(function(){
var numbenadryl=document.getElementById("num-Benadryl");
var subtotalbenadryl=document.getElementById("subtotal-Benadryl");
var subtotalbenadrylval=document.getElementById("hidden-Benadryl");

var numomega3=document.getElementById("num-Omega 3");
var subtotalomega3=document.getElementById("subtotal-Omega");
var subtotalomega3val=document.getElementById("hidden-Omega");

var nummotrin=document.getElementById("num-Motrin");
var subtotalmotrin=document.getElementById("subtotal-Motrin");
var subtotalmotrinval=document.getElementById("hidden-Motrin");

var numvitamind=document.getElementById("num-Vitamin D Supplements");
var subtotalvitamind=document.getElementById("subtotal-Vitamin");
var subtotalvitamindval=document.getElementById("hidden-Vitamin");

var finaltotal=document.getElementById("Final-Subtotal");
var purchase=document.getElementById("purchase");

$(numbenadryl).bind("keyup input", function(){
var value=numbenadryl.value;
value=value*1.99;
value=value.toFixed(2);
subtotalbenadryl.innerHTML=value;
subtotalbenadrylval.value=value;
});
$(nummotrin).bind("keyup input",function(){
var value=nummotrin.value;
value=value*3.99;
value=value.toFixed(2);
subtotalmotrin.innerHTML=value;
subtotalmotrinval.value=value;
})
$(numomega3).bind("keyup input", function(){
var value=numomega3.value;
value=value*3.99;
value=value.toFixed(2);
subtotalomega3.innerHTML=value;
subtotalomega3val.value=value;
});

$(numvitamind).bind("keyup input",function(){
var value=numvitamind.value;
value=value*1.99;
value=value.toFixed(2);
subtotalvitamind.innerHTML=value;
subtotalvitamindval.value=value;
});

	if(document.getElementById("Benadryl")){		
		var button1=document.getElementById("Benadryl");
		button1.onclick=function(){
			console.log("clicked");
		var data=$("#form-Benadryl").serialize();
			$.ajax({
			type:'POST',
			url:"./php/update-table.php",
			data:data,
			success:function(response){
			finaltotal.innerHTML=response;
			}
			})

		}
	}
	if(document.getElementById("Motrin")){
		var button2=document.getElementById("Motrin");
		button2.onclick=function(){
			var data=$("#form-Motrin").serialize();
			$.ajax({
				type:'POST',
				url:"./php/update-table.php",
				data:data,
				success:function(response){
				finaltotal.innerHTML=response;					
				}
			})

		}
	}
	if(document.getElementById("Vitamin")){
		var button2=document.getElementById("Vitamin");
		button2.onclick=function(){
			var data=$("#form-Vitamin").serialize();
			$.ajax({
				type:'POST',
				url:"./php/update-table.php",
				data:data,
			success: function (response){
			console.log(response);
			finaltotal.innerHTML=response;					
			}	
			});
		}
	}
	if(document.getElementById("Omega")){
		var button2=document.getElementById("Omega");
		button2.onclick=function(){
			var data=$("#form-Omega").serialize();
			$.ajax({
				type:'POST',
				url:"./php/update-table.php",
				data:data,
				success: function (response){
				finaltotal.innerHTML=response;					
				}
			});
		}
	}

	purchase.onclick=function(){
	vex.dialog.buttons.YES.text="My Dope Resume!"
	vex.dialog.buttons.NO.text="Continue Shopping"
		vex.dialog.confirm({
    message: 'Thanks for taking a look at my dummy medical management website!\n Check out my resume below!',
    callback: function (value) {
        if (value) {
            console.log('Successfully destroyed the planet.')
        } else {
            console.log('Chicken.')
        }
    }
})
	}

});