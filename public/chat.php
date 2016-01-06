<?php

    require("../includes/config.php");

    /* --- Possible array values for render --- 
	- title: sets title of browser page, page heading, and of active breadcrumb
	- subtitle (optional): if turned on, displays a subtitle next to the page heading.
	- firstBreadCrumbDisplayName (optional): if turned on with firstBreadCrumbFileName, displays a bread crumb with this name
    - firstBreadCrumbFileName (optional): if turned on with firstBreadCrumbDisplayName, displays a bread crumb linking to WEBSITE-BASENAME/public/$firstBreadCrumbFileName
    - secondBreadCrumbDisplayName and secondBreadCrumbFileName are also possible. They have not been tested yet though.
       ---                       		    --- */

    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {

    	
		$rows = query("SELECT * FROM chat");
        // else render form
        render("chat_template.php", array("title" => "Chat", "rows" => $rows, "script" => "chat.js"));

    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	if (ctype_space($_POST["message"])) 
	    {
	    	apologize("Your message needs to contain at least one non-whitespace character.", "Message Empty");
	    }
	    else if (strlen($_POST["message"]) > 1500) 
	    {
	    	apologize("Your message cannot exceed 1500 characters.", "Message Exceeds Maximum Length");
	    }
	    else
	    {
	    	$result = query("INSERT INTO chat (message, username) VALUES (?, ?)", $_POST["message"], $_SESSION["username"]);

					if($result === false)
					{
						//render apology

						apologize("Error querying to database.", "Query Failed");
					}
					else
					{
							redirect("chat.php");
					}

	    }
	}
?>

