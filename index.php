


<!DOCTYPE html>
<html>
<head>
	<title>Test Project</title>
	          <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
			  	
			  </script>
</head>
<body>

<div class="container">
  <h2>Data</h2>
             
  <table class="table table-hover">
    <thead>
      <tr>
      	<th>Id</th>
        <th>Firstname</th>
        <th>Team</th>
        
      </tr>
    </thead>
    <tbody>
   
    
    
<?php
	$connect = mysqli_connect('localhost', 'root', '', 'upwork');


			        $query = mysqli_query($connect," 
            select users.user_id,teams.name,users.first_name from ((users inner join teamuser on users.user_id = teamuser.user_id) inner join teams on teamuser.team_id = teams.team_id)");
			        if($query){
			            while($row = mysqli_fetch_array($query)){
			                  $id=$row['user_id'];
                               $fname=$row['first_name'];
                               $lname=$row['name'];

                             
        	        ?>
				
			

				   <tr>
        <td><?php echo $id;?></td>
        <td><?php echo $fname;?></td>
        <td><?php echo $lname;?></td>
      </tr>

        	    <?php }}?>


</tbody>
  </table>
</div>
</body>
</html>