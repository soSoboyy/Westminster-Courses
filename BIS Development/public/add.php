<?php
				require_once '../private/initialize.php';	//initialize the web site
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel=stylesheet type=text/css href=style.css>
</head>

<body>
<div class="header">
	Welcome to Web Academy! <br>
	Web Design Principles - HTML - Introduction to Databases - Cyber Security
</div>

<div class="row">
  	<div class="column side">
   			<?php include 'navigation_all.html';?> 
	</div>
<div class="column middle">
		
<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {

			$args=[];									//in $args array we collect all the new values 
  			$args['name']=$_POST['name'];
  		 	$args['email']=$_POST['email'];
  			$args['userName']=$_POST['userName'];
  			$args['courseToAttend']=$_POST['courseToAttend'];

  	
  			$student = new Student;						// we create a new object with the values we just entered
  			$student->name = $args["name"];
  			$student->email = $args["email"];
  			$student->userName = $args["userName"];
  			$student->courseToAttend = $args["courseToAttend"];
  			
  				
  			$results = $student->create();		// we call the function 'create' that is a method of Vehicle class
			
			if($results){
				echo "New Record added successfuly";
				}
			



		} else {

		echo " <p> Use the following form to enter details for the new item (record / object) <br> ";
		echo "ATTENTION: all *** fields must be numbers </p>";
			
				
		 echo  "<form action=add.php method='post'>";
			echo "<table>";
				echo "<tr> <td> name </td> <td> <input type='text' name ='name'> </td> </tr>";
				echo "<tr> <td> email </td> <td> <input type='text' name ='email'> </td> </tr>";
				echo "<tr> <td> userName </td> <td> <input type='text' name ='userName'> </td> </tr>";
				echo "<tr> <td> courseToAttend </td> <td> <input type='text' name ='courseToAttend'> </td> </tr>";
    		
		echo "</table>";    
    			echo " <br> <br> <input type='submit' value='Add New' />";
		echo "</form>";
		
		}

?>

  	 </div>
  	 
  	 
<div class="footer">
 BIS Developerment Course Work<br>
  Not real site, course work application
</div>

</body>


</html>
