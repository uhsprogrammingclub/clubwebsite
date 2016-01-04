<!DOCTYPE html>
<html lang="en">

<?php require("../templates/head.php"); ?>
   <!-- Navigation -->
<body>
    <?php
            require '../templates/navigation_bar.php';
    ?>

     
    <!-- Page Content -->
    <div id = "header_container" class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            
                <h1 class="page-header"> 

                    <?php

                 if (isset($title))
                    {
                        print $title;
                    }
                    else
                    {
                        print 'Unnamed Page';
                    }

                    ?>
            
                    <small>

                    <?php

                 if (isset($subtitle))
                    {
                        print $subtitle;
                    }
                    else
                    {
                        print '';
                    }

                    ?>
                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php print "http://" . $_SERVER['HTTP_HOST'] . "/" ?>public/index.php">Home</a></li>
                <?php
                 if (isset($firstBreadCrumbDisplayName) && isset($firstBreadCrumbFileName))
                    {
                        print "<li><a href=\"" . "http://" . $_SERVER['HTTP_HOST'] . "/" . "public/" . $firstBreadCrumbFileName . "\">" . $firstBreadCrumbDisplayName . "</a></li>";
                    }
                    else
                    {
                        print '';
                    }

                if (isset($secondBreadCrumbDisplayName) && isset($secondBreadCrumbFileName))
                    {
                        print "<li><a href='http://lernerone.com/public/$secondBreadCrumbFileName'>$secondBreadCrumbDisplayName</a></li>";
                    }
                    else
                    {
                        print '';
                    }

                    ?>

                    <li class="active">

                    <?php
                 if (isset($title))
                    {
                        print $title;
                    }
                    else
                    {
                        print 'Unnamed Page';
                    }

                    ?>

                    </li>

                </ol>
            </div>
        <!-- /.row -->

