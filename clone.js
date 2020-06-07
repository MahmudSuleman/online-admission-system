

<script>
//Your main page, will contain a list.mainPage.php




// Your php code to create the form. You can create a function if you want
    $arrToJSON = array(
    "myFormHtml"=>"You will put your HTML form code here"    
    );  
    return json_encode(array($arrToJSON));




//Your javaScript code
$(document).on("event", "#idBtnElement", function(){
    //Data you want to send to php evaluate
     var dt={ 
              ObjEvn:"btn_ADDFORM"
            };

    //Ajax      
     var request =$.ajax({//http://api.jquery.com/jQuery.ajax/
                            url: "admit.php",
                            type: "POST",
                            data: dt,
                            dataType: "json"
                        });

    //Ajax Done catch JSON from PHP 
        request.done(function(dataset){
            for (var index in dataset){ 
                 formStrHtml=dataset[index].myFormHtml;
             }

             //JavaScript 
             //Here you can grab formStrHtml in apped at the end of the list in your main page.
 $("#myFORMS ul").append('<li>'+formStrHtml+'</li>');


     }); 

    //Ajax Fail 
        request.fail(function(jqXHR, textStatus) {
            alert("Request failed: " + textStatus);
        }); 
}
</script>
 <script src="js/jquery-3.4.1.min.js"></script>