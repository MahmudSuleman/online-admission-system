
$("document").ready(function(){

	$("#show").on("click",function(){
		$("#second_result").show();
		$("#add_cert").hide()
	   
	});

}); 
$("document").ready(function(){

	$("#show1").on("click",function(){
		$("#third_result").show();
		$("#add_cert1").hide()
	   
	});

}); 


// toggle button function
$("document").ready(function(){

    $(".toggle_btn").click(function(){

        $(".items").toggleClass("active");
    });
});

// function to close success msg 
$("document").ready(function(){

    $("#close").on("click",function(){

        $("#success_msg").hide();
    });
});
// function to close failed msg 
$("document").ready(function(){

    $("#close").on("click",function(){

        $("#fail_msg").hide();
    });
});

// add another cert 
// var counter = 1;
// var limit = 3;
// function addForm (dynamicInput) {
	
// 	if (counter == limit) {

// 		alert("You have reached the limit");
// 	}
// 	else{

// 		var newdiv = document.createElement('div');
// 		newdiv.innerHTML = "Entry" + (counter + 1) + 
// 		"<br><input type='text' id='fc1' name='c1[]' ><br><input type='text' id='fc2' name='c2[]' ><br><input type='text' id='c3' name='sc3[]' > ";
// 		document.getElementById('dynamicInput').appendChild(newdiv);
// 		counter++;
// 	}
// }