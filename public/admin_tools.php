<?php

     require("../includes/config.php");

	if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
   
        render("admin_tools_template.php", array("title" => "Admin Tools"));
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        // validate submission
        if ($_SESSION["permissionsLevel"] != 3)
        {
            apologize("Only admins can post announcements.", "Permissions Error");
            
        }
        else if (empty($_POST["title"]) || ctype_space($_POST["title"]))
        {
            apologize("No title provided.", "No Title Provided");
            
        }
        else if (!isset($_POST["type"]) || $_POST["type"] == "Unspecified")
        {
            apologize("No announcement type selected.", "No Announcement Type Selected");
        }
        if (empty($_POST["body"]) || ctype_space($_POST["body"]))
        {
            apologize("Empty announcement body.", "Empty Announcement Body");
            
        }
        else
        { 
                $result = query("INSERT INTO announcements (type, title, body, poster) VALUES (?, ?, ?, ?)", $_POST["type"], $_POST["title"], $_POST["body"], $_SESSION["username"]);

                if($result !== false)
                {	
                	congratulate("Successfully posted announcement.", "Post Successful");
                }
                else
                {
                	apologize("Error querying to database.", "Query Failed");
                }
               
        }
        
        
    }



?>
