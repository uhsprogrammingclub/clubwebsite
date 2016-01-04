        <div class="col-md-10">
                <h3 class = "small-heading">Post Announcement</h3>
        <form action="post_announcement.php" method="post">
    <fieldset>
        <div class="form-group col-md-9">
            <input autofocus class="form-control" name="title" placeholder="Title" type="text"/>
        </div>
       

        <div class="form-group col-md-3">
  <select class="form-control" id="sel1" name = "type">
    <option value="Unspecified" selected disabled>Type</option>
    <option value="Club">Club</option>
    <option value="Schedule">Schedule</option>
    <option value="Project: Chess Robot">Project: Chess Robot</option>
    <option value="Project: Club Website">Project: Club Website</option>
    <option value="Other">Other</option>
  </select>
        </div>
        <div class="form-group col-md-12">
          <textarea class="form-control status-box" name = "body" rows="3" placeholder="Body"></textarea>
        </div>
        <!-- ADD DROPDOWN FOR TYPE AND ADD BOX FOR MESSAGE -->
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-default">Post Announcement</button>
        </div>
    </fieldset>
    </form>
    </div>
     <div class = "col-md-10">
    <h3 class = "small-heading">Club Members</h3>
        <table>
          <tr>
            <th>Number</th>
            <th>Username</th>
            <th>Email</th>
            <th>Date &amp; Time Joined</th>       
            <th>Is Admin</th>
          </tr>
    <?php 

     $i = 0;
     $results = query("SELECT * FROM users WHERE permissionsLevel > 1");

     foreach ($results as $result) 
     {
        $i += 1;

        print  "<tr>
                <td>" . $i . "</td>
                <td>" . $result["username"] . "</td>        
                <td>" . $result["email"] . "</td>
                <td>" . $result["dateJoined"] . "</td>
                <td>" .  (($result["permissionsLevel"] == 3) ? "<i class=\"fa fa-check\"></i>" : " ") . "</td>
                </tr>";  
     }

    ?>


    </table>
</div>

     