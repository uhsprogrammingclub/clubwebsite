<?php

    /**
     * config.php
     *
     * Taken and modified from Harvard's Computer Science 50 - Problem Set 7.
     *
     * Configures pages.
     */

    //display errors, warnings, and notices
       

    //enable sessions
    session_start();


    ini_set("display_errors", true);
    error_reporting(E_ALL);

    
    if (file_exists("../includes/constants.php"))
        {
            require("../includes/constants.php");
        }
        else
        {
            trigger_error("../includes/constants.php does not exist", E_USER_ERROR);
        }
    if (file_exists("../includes/functions.php"))
        {
            require("../includes/functions.php");
        }
        else
        {
            trigger_error("../includes/functions.php does not exist", E_USER_ERROR);
        }
        
    //requirements
 

    //require authentication for all pages in the array shown below
    if (in_array($_SERVER["PHP_SELF"], array("/public/my_profile.php", "/public/logout.php", "/public/admin_tools.php")))
    {   
        
        if (empty($_SESSION["id"]))
        {
            redirect("index.php");
        }
        //only admins can access the admin tools page
        else if (in_array($_SERVER["PHP_SELF"], array("/public/admin_tools.php")) && $_SESSION["permissionsLevel"] != 3)
        {
            redirect("index.php");
        }
    }
    //logged in users cannot access the pages in the array shown below
    else if (in_array($_SERVER["PHP_SELF"], array("/public/register.php", "/public/login.php")))
    {
        if (!empty($_SESSION["id"]))
        {
            redirect("index.php");
        }
    }
    
?>
