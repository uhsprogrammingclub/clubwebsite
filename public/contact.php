<?php

    require("../includes/config.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        render("contact_template.php", array("title" => "Contact"));
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	congratulate("Actually, your message was NOT sent at all.", "Message Sent Successfuly");

    }



     
?>
