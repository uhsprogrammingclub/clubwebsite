<?php

    // configuration
    require("../includes/config.php"); 
    $rows = query("SELECT * FROM announcements");
    render("announcements_template.php", array("title" => "Announcements", "rows" => $rows));
    	
?>