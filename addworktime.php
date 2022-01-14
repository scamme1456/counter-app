<?php 
session_start();
	include("config/connection.php");
	include("config/functions.php");

  
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
        <input id="text" type="text" name="start_work" placeholder="Work start time" />
        <input id="text" type="text" name="stop_work" placeholder="Work stop time" />
        <input id="text" type="text" name="description" placeholder="Description" />
		<input id="button" type="submit" value="Add">
		<a href="user_index.php"></a> 
      </form>
    </div>
  </body>
</body>
</html>