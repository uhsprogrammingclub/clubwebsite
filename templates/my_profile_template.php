<div class = "col-md-4">
	<h4><u>Personal Information</u></h4>
	<h5>Username: <?php print htmlspecialchars($username); ?></h5>
	<h5>Email: <?php print $email; ?></h5>
	<h5>Date &amp; time joined: <?php print $dateJoined; ?></h5>
</div>

<div class = "col-md-2">
	<h4><u>Permissions Level</u></h4>
		<div class="radio">
		  <label><input type="radio" onclick="return false" name="optradio" <?php if ($permissionsLevel == 1) print "checked"; ?>>User</label>
		</div>
		<div class="radio">
		  <label><input type="radio" onclick="return false" name="optradio" <?php if ($permissionsLevel == 2) print "checked"; ?>>Club Member</label>
		</div>
		<div class="radio">
		  <label><input type="radio" onclick="return false" name="optradio" <?php if ($permissionsLevel == 3) print "checked"; ?>>Admin</label>
		</div>
</div>

<div class = "col-md-6">
	<h4><u>Priveleges Chart</u></h4>
		<table>
		  <tr>
		  	<th>Privelege</th>
		    <th>User</th>
		    <th>Club Member</th>		
		    <th>Admin</th>
		  </tr>
		  <tr>
		    <td>Post Comments</td>
		    <td><i class="fa fa-check"></i></td>		
		    <td><i class="fa fa-check"></i></td>
		    <td><i class="fa fa-check"></i></td>
		  </tr>
		  <tr>
		    <td>Post Announcements</td>
		    <td></i></td>		
		    <td></i></td>
		    <td><i class="fa fa-check"></i></td>
		  </tr>

	</table>
</div>
<br>