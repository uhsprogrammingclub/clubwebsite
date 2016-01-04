<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">UHS Software Development Club</a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="projects.php">Projects</a>
                    </li>
                    <li>
                        <a href="information.php">Information</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li> 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="announcements.php">Announcements</a>
                            </li>
                            <li>
                                <a href="chat.php">Chat</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                            <?php 
                            if (empty($_SESSION["id"]))
                            {
                                print  ("My Account");
                            }
                            else
                            {
                                $user = $_SESSION["username"];
                                print  ("Hello, <em>$user</em>");
                            }

                            ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <?php
                            
                            if (empty($_SESSION["id"]))
                            {
                                print ('<li><a href="login.php">Log In</a></li>
                                        <li><a href="register.php">Register</a></li>');
                            }
                            else if ($_SESSION["permissionsLevel"] == 3)
                            {
                                print ("<li><a href=\"my_profile.php\">My Profile</a></li>
                                        <li><a href=\"admin_tools.php\">Admin Tools</a></li>
                                        <li><a href=\"logout.php\">Log Out</a></li>");
                            }
                            else
                            {
                                print ("<li><a href=\"my_profile.php\">My Profile</a></li>
                                        <li><a href=\"logout.php\">Log Out</a></li>");
                            }

                            ?>

                        </ul>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>