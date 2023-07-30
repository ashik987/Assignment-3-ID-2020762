<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    
    <link rel="stylesheet" href="css/style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
   <header>
      <div id="CustomHeader"class="container">
     
	 <div class="row">
	  
     <div id="CustomList"class="col-md-6">
      <ul type="none">
	  
	  <li><a href="index.php">Back</a></li>
	      
	  
	  </ul>
	  
	 </div> 
	 </div>
  </div>
</header>
  
<div class="container table_section">
    <div class="row">
        <div class="col-lg-12">
            <?php

$connection = mysqli_connect("localhost","root","","contact_db");

if($connection==false){
    die("Error: Could not connect the server.".mysqli_connect_error());
}

$query = "SELECT * FROM contact_info";

$adanprodan = mysqli_query($connection,$query);

$count = mysqli_num_rows($adanprodan);

if($count>0){

?>

<table class="table">
   <thead class="thead-dark">
      <tr>
          <th>fname</th>
          <th>lname</th>
          <th>email</th>
          <th>mobile</th>
          <th>message</th>
          <th>action</th>
      </tr>
       
   </thead>

<?php
    while($row = mysqli_fetch_assoc($adanprodan)){
//    echo "<pre>";
//    print_r($row);
//    echo "</pre>";
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $message = $row['message'];
        
?>

  <tbody>
       <tr>
           <td><?php echo $fname; ?></td>
           <td><?php echo $lname; ?></td>
           <td><?php echo $email; ?></td>
           <td><?php echo $mobile; ?></td>
           <td><?php echo $message; ?></td>
           <td><a href="#">Delete</a></td>
       </tr>
   </tbody>
    



<?php

}
?>

</table>

<?php

}
else{
    echo "Your database is empty.";
}


?>
  
        </div>
    </div>
</div>
   
 
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>





