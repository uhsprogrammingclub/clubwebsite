<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", array("title" => "Register"));
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // TODOx
		if (($_POST["password"] == "") || ($_POST["confirmation"] == ""))
		{
			apologize("Enter a password into both of the password fields to register.", "Password Field Left Empty");
		}
		else if ($_POST["password"]!= $_POST["confirmation"])
		{
			apologize("Password confirmation did not match password given.", "Passwords Do Not Match");
		}
		else if (strlen($_POST["username"]) > 25) 
		{
			apologize("Username exceeds character limit of 20 characters.", "Character Limit Reached");
		}
		else if ($_POST["username"] == "" || ctype_space($_POST["username"]))
		{
			apologize("No username entered.", "No Username Entered");
		}
		else if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) 
		{
			apologize("Invalid email address.", "Invalid Email Address");
		}
		else
		{

				$result = query("INSERT INTO users (email, username, hash) VALUES (?, ?, ?)", $_POST["email"], $_POST["username"], crypt($_POST["password"], "9xk2s"));

				if($result === false)
				{

						//render apology
						apologize("Username/email taken.", "Username/Email Taken");

				}
				else
				{

					$rows = query("SELECT LAST_INSERT_ID() AS id");
					$id = $rows[0]["id"];

					$usernameRows = query("SELECT * FROM users WHERE id = $id");
					$_SESSION["id"] = $id;
					$_SESSION["username"] = $usernameRows[0]["username"];
					$_SESSION["permissionsLevel"] = $usernameRows[0]["permissionsLevel"];
					redirect("index.php");

				}

		}

			
	}
?>