<?php 
session_start();
	include("config/connection.php");
	include("config/functions.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
    <link rel="stylesheet" href="styles/createCompany.css">
</head>
<body>
    <div id="box">
      <form method="post" id="login">
        <h1 id="title">Create company</h1>
        <input id="text" type="text" name="company_name" placeholder="Company name" />
        <input id="text" type="text" name="first_name" placeholder="First name" />
        <input id="text" type="text" name="last_name" placeholder="Last name" />
        <input id="text" type="password" name="password" placeholder="Password" />
		<input id="button" type="submit" value="Signup">
		<a href="admin.php"></a> 
      </form>
    </div>
  </body>
</body>
</html>