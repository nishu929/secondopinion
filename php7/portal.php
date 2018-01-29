<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title><Table>Portal</title>
  
  
  
      <link rel="stylesheet" href="css/style_table.css">

  
</head>

<body>
  <h1><span class="blue">&lt;</span>Developer's<span class="blue">&gt;</span> <span class="yellow">portal</span></h1>


<table class="container">
	<thead>
		<tr>
            <th><h1>Name</h1></th>
            <th><h1>E-mail</h1></th>
			<th><h1>Message</h1></th>
            <th><h1>Action</h1></th>
			<!--<th><h1>Average</h1></th>-->
		</tr>
	</thead>
	<tbody>
	<?php
    include('connect.php');
    $query="select * from nonuser_complain where solved = 'no';";
    $result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){
    ?>

    <tr>
			<td><?php echo $row[1]?></td>
            <td><?php echo $row[2]?></td>
             <td><?php echo $row[3]?></td>
			<td><a href="solved.php?id=<?php echo $row[0]?>">Solve</a></td>
			<!--<td>01:32:50</td>-->
		</tr>
<?php }?>
	</tbody>
</table>
  
  
</body>
</html>
