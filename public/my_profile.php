<?php

    require("../includes/config.php");
    $rows = query("SELECT * FROM users WHERE username = ?", $_SESSION["username"]);

    	
    	if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];
            render("my_profile_template.php", array("title" => "My Profile", "email" => $row["email"], "username" => $row["username"], "permissionsLevel" => $row["permissionsLevel"], "dateJoined" => $row["dateJoined"]));

        }
        else
        {
        	apologize("User not found.", "User Not Found");
        }


    
     
?>
