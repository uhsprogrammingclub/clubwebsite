      <ul class="posts">

    <?php

        foreach ($rows as $row)

        {

          $results = query("SELECT * FROM users WHERE username = ?", $row["username"]);

            if($results[0]["permissionsLevel"] == 3)
            { 
                print("<li>" . $row["message"] . "<br><em> Posted by " . $row["username"] . " <i class=\"fa fa-star\" style = \"color: grey\"></i> on " .  $row["date"] . ".</em></li>");
            }
            else if($results[0]["permissionsLevel"] == 2)
            {
                print("<li>" . $row["message"] . "<br><em> Posted by " . $row["username"] . " <i class=\"fa fa-star-half-empty\" style = \"color: grey\"></i> on " .  $row["date"] . ".</em></li>");
            }
            else
            {
              print("<li>" . $row["message"] . "<br><em> Posted by " . $row["username"] . " <i class=\"fa fa-star-o\" style = \"color: grey\"></i> on " .  $row["date"] . ".</em></li>");
            }


        }



    ?>

      </ul>
  
      <form action="chat.php" method="post">
        <div class="form-group">
          <textarea class="form-control status-box" id = "textarea" name = "message" rows="3" placeholder="What's on your mind?"></textarea>
        </div>
        <div class="form-group pull-right">
            <p class="counter">1500</p>

          <?php
            if (empty($_SESSION["id"]))
            {
               print("<button id = \"no-account\" type=\"button\" class=\"btn btn-primary disabled\">Log in to post</button>");
            }
            else
            {
               print("<button id = \"validButton\" type=\"button\" class=\"btn btn-primary disabled\">Post</button>");
            }
          ?>

        </div>
      </form>
