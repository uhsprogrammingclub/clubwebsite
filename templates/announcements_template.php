
    <div class="articles container">

    <?php

    $i = 0;
        foreach ($rows as $row)
        {
        
        $currentArticleForFirstIteration = "";
         if($i == 0)
         {
            $currentArticleForFirstIteration = " current";
         }
         $i += 1;
         print 
          "
          <div class=\"article" . $currentArticleForFirstIteration . "\">
        <div class=\"item row\">
          <div class=\"col-xs-3\">
            <p class=\"source\">" . $row["type"] . "</p>
          </div>
          <div class=\"col-xs-6\">
            <p class=\"title\">" . $row["title"] . " - posted by <em>" . $row["poster"] .  "</em></p>
          </div>
          <div class=\"col-xs-3\">
            <p class=\"pubdate\">" . $row["date"] . "</p>
          </div>
        </div>
        <div class=\"description row\">
          <div class=\"col-xs-3\">&nbsp;</div>
          <div class=\"col-xs-6\">
            <h1>" . $row["title"] . "</h1>
            <p>" . $row["body"] . "</p>
          </div>
          <div class=\"col-xs-3\">&nbsp;</div>
        </div>
      </div>";
            //. $row["title"] . $row["body"] .  $row["poster"]
        }

    ?>


    </div>
    <br>
    <?php if (isset($_SESSION["permissionsLevel"]) &&  $_SESSION["permissionsLevel"] == 3) print "<a href = \"admin_tools.php\">Post an announcement</a>"; ?>
    