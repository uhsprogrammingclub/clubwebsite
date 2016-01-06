
    <div class="articles container">

    <?php

    $i = 0;
        foreach ($rows as $row)
        {
        
        $firstArticle = "";
         if($i == 0)
         {
            $firstArticle = " current";
         }
         $i += 1;
         print 
          "
          <div class=\"article" . $firstArticle . "\">
        <div class=\"item row\">
          <div class=\"col-xs-3\">
            <p class=\"source\">" . htmlspecialchars($row["type"]) . "</p>
          </div>
          <div class=\"col-xs-6\">
            <p class=\"title\">" . htmlspecialchars($row["title"]) . " - posted by <em>" . htmlspecialchars($row["poster"]) .  "</em></p>
          </div>
          <div class=\"col-xs-3\">
            <p class=\"pubdate\">" . $row["date"] . "</p>
          </div>
        </div>
        <div class=\"description row\">
          <div class=\"col-xs-3\">&nbsp;</div>
          <div class=\"col-xs-6\">
            <h1>" . htmlspecialchars($row["title"]) . "</h1>
            <p>" . htmlspecialchars($row["body"]) . "</p>
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
    