<?php 
session_start();
	include("config/connection.php");
	include("config/functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_login = $_POST['user_login'];
		
		if(!empty($user_login) && !is_numeric($user_login)) 
		{
      //szukanie user_id 
      $query = "select * from users where user_name = '$user_login' limit 1;";
      $result = mysqli_query($con,$query);

      if($result && mysqli_num_rows($result) > 0) // user(pracownik) istnieje
      {
        $user_data = mysqli_fetch_assoc($result);
        $worker_id = $user_data["user_id"];

        //sprawdzenie czy juz ma firme
        $query = "SELECT * FROM companyWorkers WHERE worker_id = '$worker_id';";
        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0) // pracownik juz ma firme
        {
          echo "This user is already employed!";
        }
        else // pracownik nie ma firmy
        {
          //dodanie pracownika
          $employment_id = random_num(20);
          $company_id = $_SESSION['company_id'];
          $query = "insert into companyWorkers(employment_id,worker_id,company_id) values ('$employment_id','$worker_id','$company_id');";
          mysqli_query($con, $query);
          header("Location: admin_index.php");
          die;
        }
      } 
      else // user nie istnieje
      {
        echo "User with this login doesn't exists";
      }
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
	<title>Clocker - Add user</title>
    <link rel="stylesheet" href="styles/createCompany.css">
</head>
<body>
    <div id="box">
      <form method="post" id="login">
        <h1 id="title">Add new user to company</h1>
        <input id="text" type="text" name="user_login" placeholder="User login" />
		<input id="button" type="submit" value="Add">
		<a href="admin.php"></a> 
      </form>
    </div>
  </body>
</body>
</html>