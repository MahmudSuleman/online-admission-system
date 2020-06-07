
<?php 
	
	include_once '../config.php';
	//include_once '../functions.php';

	if (isset($_POST['submit'])) {
		
		$program1 = $_POST['program1'];
		$program2 = $_POST['program2'];
		$program3 = $_POST['program3'];

		$c1 = $_POST['c1'];
		$c2 = $_POST['c2'];
		$c3 = $_POST['c3'];
		$cg1 = $_POST['cg1'];
		$cg2 = $_POST['cg2'];
		$cg3 = $_POST['cg3'];

		$fc = array($c1=>$cg1,$c2=>$cg2,$c3=>$cg3);

		$fc1 = array_key_exists($c1, $fc);
		$fc2 = array_key_exists($c2, $fc);
		$fc3 = array_key_exists($c3, $fc);

		$fc1 = $fc[$c1];
		$fc2 = $fc[$c2];
		$fc3 = $fc[$c3];

		$sc1 = $_POST['sc1'];
		$sc2 = $_POST['sc2'];
		$sc3 = $_POST['sc3'];
		$scg1 = $_POST['scg1'];
		$scg2 = $_POST['scg2'];
		$scg3 = $_POST['scg3'];
		
		$src = array($sc1=>$scg1,$sc2=>$scg2,$sc3=>$scg3);

		$src1 = array_key_exists($sc1, $fc);
		$src2 = array_key_exists($sc2, $fc);
		$src3 = array_key_exists($sc3, $fc);
		
		$query1 = mysqli_query($connect,"SELECT * FROM eligibility  WHERE program = '$program1' ");
		$count1 = mysqli_num_rows($query1);

		$query2 = mysqli_query($connect,"SELECT * FROM eligibility  WHERE program = '$program2' ");
		$count2 = mysqli_num_rows($query2);

		$query3 = mysqli_query($connect,"SELECT * FROM eligibility  WHERE program = '$program3' ");
		$count3 = mysqli_num_rows($query3);


		if ($count1 === 1) {
			
				if (!empty($fc1 && $fc2 && $fc3) && empty($src1 && $src2 && $src3)) {

					echo "program1 result one";
				}
				elseif (!empty($c1 && $c2 && $c3) && !empty($src1 || $src2 || $src3)) {
				
					echo "program1 result two";

				}
			
		}
		// elseif ($count2 === 1) {
			
		// 	echo "program2";
		// }
		// elseif ($count3 === 1) {
			
		// 	echo "program3";
		// }



}


?>