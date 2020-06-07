<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script>
        function copy(){
            var text1 = document.getElementById("val1").value;
            document.getElementById("val4").value=text1;

            var text2 = document.getElementById("val2").value;
            document.getElementById("val5").value=text2;

            var text3 = document.getElementById("val3").value;
            document.getElementById("val6").value=text3;
        }
    </script>
</head>
<body>
     <form action="" method="post" onchange="copy()">
         <input type="text" name="val1" id="val1">
         <br>
         <input type="text" name="val2" id="val2">
         <br>
         <input type="text" name="val3" id="val3">
         <br>
         <br>
         <br>
         <input type="text" name="val4" id="val4" readonly>
         <br>
         <input type="text" name="val5" id="val5" readonly>
         <br>
         <input type="text" name="val6" id="val6" readonly>
         <br>
         <input type="submit" value="submit">
     </form>
</body>
</html> -->
<!-- <script>
        function copy(){
            var text1 = document.getElementById("c1").value;
            document.getElementById("fc1").value=text1;

            var text2 = document.getElementById("c2").value;
            document.getElementById("fc2").value=text2;

            var text3 = document.getElementById("c3").value;
            document.getElementById("fc3").value=text3;
        }
    </script>

 -->
 <script src="js/jquery-3.4.1.min.js"></script>
 <script>

      $("document").ready(function(){

        $("#show").on("click",function(){
            $("#form2").show();
            $("#btn").hide()
           
        });
    
    }); 
    $("document").ready(function(){

        $("#show1").on("click",function(){
            $("#form3").show();
            $("#btn1").hide()
           
        });
    
    }); 
 </script>

<form action="" method="post">
    <div id="dynamicInput">
        <input type="text" name="c1[]" id="c1">
        <br>
        <input type="text" name="c2[]" id="c2">
        <br>
        <input type="text" name="c3[]" id="c3">
    </div>
    <div id="btn">
       <input type="button" value="Add another text input" id="show"> 
    </div>



    <!-- second form -->
     <div id="form2" style="display: none">
        <input type="text" name="c1[]" id="c1">
        <br>
        <input type="text" name="c2[]" id="c2">
        <br>
        <input type="text" name="c3" id="c3">
        <br>
    <div id="btn1">
       <input type="button" value="Add another text input" id="show1"> 
    </div>
    </div>


     <div id="form3" style="display: none;">
        <input type="text" name="c1[]" id="c1">
        <br>
        <input type="text" name="c2[]" id="c2">
        <br>
        <input type="text" name="c3[]" id="c3">
    </div>
    <input type="submit" name="submit" value="submit">
    
    <!-- <input type="button" value="Add another text input" onclick="addForm('dynamicInput');"> -->

    <!-- <div id="dynamicInput">
        Entry 1 <br><input type="text" name="myInputs[]">
    </div>
    <input type="submit" value="submit" name="submit">
    <input type="button" value="Add another text input" onclick="addForm('dynamicInput');"> -->
</form>
<?php 
        if (isset($_POST['submit'])) {
        
        $c1 = $_POST['c1'];
        $c2 = $_POST['c2'];
        $c3 = $_POST['c3'];



   

}
 ?>
 <script>
          //  function Duplicate(){

            //         var text1 = document.getElementById("c1").value;
            //         document.getElementById("sc1").value=text1;
            //         document.getElementById("tc1").value=text1;

            //         var text2 = document.getElementById("c2").value;
            //         document.getElementById("sc2").value=text2;
            //         document.getElementById("tc2").value=text2;

            //         var text3 = document.getElementById("c3").value;
            //         document.getElementById("sc3").value=text3;
            //         document.getElementById("tc3").value=text3;

            //         var text111 = document.getElementById("e1").value;
            //         document.getElementById("se1").value=text111;
            //         document.getElementById("te1").value=text111;

            //         var text22 = document.getElementById("e2").value;
            //         document.getElementById("se2").value=text22;
            //         document.getElementById("te2").value=text22;

            //         var text33 = document.getElementById("e3").value;
            //         document.getElementById("se3").value=text33;
            //         document.getElementById("te3").value=text33;
            // }

        </script>