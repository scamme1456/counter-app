<?php 
session_start();
	include("config/connection.php");
	include("config/functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$start_work = $_POST['start_work'];
        $stop_work = $_POST['stop_work'];
    	$description = $_POST['description'];
        $user_id = $_SESSION['user_id'];


		if(!empty($start_work) && !empty($stop_work) && !empty($description))
		{

			$company_id = random_num(20);
            $workrecord_id = random_num(20);
			$query = "insert into workrecord(workrecord_id,worker_id,start_work,stop_work,description,date) values('$workrecord_id','$user_id','$start_work','$stop_work','$description', NOW());";
			
			mysqli_query($con, $query);
			header("Location: user_index.php");
			die;
		}
		else
		{
			echo "Please enter some valid information!";
		}
	}
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Clocker - Add new work record</title>
    <link rel="stylesheet" href="styles/createCompany.css">
</head>
<body>
    <div id="box">
      <form method="post" id="login">
        <h1 id="title">Add new work record</h1>
        <input id="text" type="text" name="start_work" placeholder="Work start time e.g. 12-01-2012 21:24:00" />
        <input id="text" type="text" name="stop_work" placeholder="Work stop time e.g. 12-01-2012 23:24:00" />
        <input id="text" type="text" name="description" placeholder="Description" />
		<input id="button" type="submit" value="Add">
		<a href="user_index.php"></a> 
      </form>
    </div>
  </body>
</body>
</html>