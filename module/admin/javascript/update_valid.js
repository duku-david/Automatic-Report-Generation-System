 

 function inputs_validate() {
 	 if(Input1_validate()== false){
 	 	return false;
 	 }
 	 if(Input2_validate()==false){
 	 	return false;
 	 }
 }


function Input1_validate() {
	// var inputs = document.getElementById('updateBOT');
	 var inputs = document.getElementById('updateBOT');
  	
	if(inputs.value==""){
		alert("please fill BOT field");
		inputs.style.border = " 2px solid red";
		return false;
	}else if(isNaN(inputs.value)){
        alert("Only digit is required");
		inputs.style.border = " 2px solid red";
		return false;
	}else{

		inputs.style.border = " 2px solid green";

		return true;	
	}
}

function Input2_validate() {
	//var inpute = document.getElementById('updateEOT');
	var inpute = document.getElementById('updateEOT');
	if(inputs.value==""){
		alert("please fill EOT field");
		inpute.style.border = " 2px solid red";
		return false;
	}else if(isNaN(inputs.value)){
        alert("Only digit is required");
		inpute.style.border = " 2px solid red";
		return false;
	}else{
		inpute.style.border = " 2px solid green";

		return true;	
	}
}
