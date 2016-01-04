<?php

    // configuration
	ini_set("display_errors", true);
    error_reporting(E_ALL);
    
    if (file_exists("includes/constants.php"))
    {
        require("includes/constants.php");
    }
    else
    {
        trigger_error("../includes/constants.php does not exist", E_USER_ERROR);
    }

    if (file_exists("includes/functions.php"))
    {
        require("includes/functions.php");
    }
    else
    {
        trigger_error("../includes/functions.php does not exist", E_USER_ERROR);
    }
        
    // requirements
    

    // enable sessions
    session_start();

	redirect("/public/index.php");

?>