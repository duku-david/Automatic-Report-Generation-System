
function amountAndMonth(amount,amountError)
{
       var amount1 =$("#"+amount);
        var amountError1 =$("#"+amountError);
        if(amount1.val().trim()=="")
	    {
	      $(amount1).css("border","0.5px solid red");
	      $(amountError1).html(amount+" "+"Is Required").css("color","red");
	      return false;
	    }else if(isNaN(amount1.val()))
	    {
	   		$(amount1).css("border","0.5px solid red");
	      $(amountError1).html("Only Number is Required").css("color","red"); 
	      return false;	
	    }else
	    {
	   		$(amount1).css("border","0.5px solid green");
	      	$(amountError1).html("");
	      	return true;	
	    }
	
}

// function year(amount,amountError)
// {

//        var amount1 =$("#"+amount);
//         var amountError1 =$("#"+amountError);
//         if(amount1.val().trim()=="")
// 	    {
// 	      $(amount1).css("border","0.5px solid red");
// 	      $(amountError1).html(amount+" "+"Is Required").css("color","red");
// 	      return false;
// 	    }else if(!isNaN(amount1.val()))
// 	    {
// 	   		$(amount1).css("border","0.5px solid red");
// 	      $(amountError1).html("Only Character is Required").css("color","red"); 
// 	      return false;	
// 	    }else
// 	    {
// 	   		$(amount1).css("border","0.5px solid green");
// 	      	$(amountError1).html("");
// 	      	return true;	
// 	    }
	
// }