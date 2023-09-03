<?php include ('check_session.php')?>

<!DOCTYPE html>

<html>
<head>
	<title>Notebook Signup</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h1> Notebook Dashboard</h1>
    <br>
    <br>

    <?php
        if (isset($_SESSION['username'])) 
        {
            // This session already exists, should already contain data
            echo "Username:", $_SESSION['username'], "<br />";
        }
    
    ?>

    <?php 
        echo '<form method="POST" action="logout.php">
        <input type="submit" value ="Logout"/> 
        </form>';
    ?>
</body>

</html>