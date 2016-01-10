<?php

     require("../includes/config.php");

if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
   
        $rows = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);

    	
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
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        // validate submission
        if ($_SESSION["permissionsLevel"] != 1)
        {
            apologize("Only normal users can attempt to activate their accounts.", "Permissions Error");
            
        }
        else if (empty($_POST["activation_code"]) || ctype_space($_POST["activation_code"]))
        {
            apologize("No activation code provided.", "No Activation Code Provided");
            
        }
        else
        { //UPDATE `clubwebsite`.`users` SET `permissionsLevel` = '2' WHERE `users`.`id` = 4;
               

            $results = query("SELECT * FROM activation_code");

            if($results[0]["code"] == $_POST["activation_code"])
            { 
                $_SESSION["permissionsLevel"] = 2;
                $insertResult = query("UPDATE users SET permissionsLevel = 2 WHERE id = (?);", $_SESSION["id"]);

                if($insertResult !== FALSE)
                {
                    congratulate("You are now registered as an official club member.", "Activation Successful");
                }
                else
                {
                    apologize("Error querying to database.", "Query Failed");
                }
                
            }
            else
            {
                apologize("Invalid activation code.", "Invalid Activation Code");
            }
            
               
        }
        
        
    }



?>
