<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.table {
  margin-left: 16px; /* Same as the width of the sidenav */
  font-size:20px; /* Increased text to enable scrolling */
  padding: 0px 1px;
}


}
</style>
</head>
<body>

<div class="sidenav">
<a href="applicationform.php">Fill Application form</a>
  <a href="profile.php">view own profile</a>
  <a href="listofcompanies.php">list of companies</a>
  <a href="logout.php">logout</a>
</div>

<div class="main">
  <h1>Student panel</h1>
  <h6> profile</h6>
  


 
<table border="2" class="table">
<tr>
<td> Name</td>
<td>fathername</td>
<td>mothername</td>
<td>date of birth</td>
<td>Email</td>
<td>branch</td>
<td>highschool</td>
<td>intermediate</td>
<td>graduation</td>
<td>Action</td>
 

</tr>

<?php

include "dbConn1.php"; // Using database connection file here


$records = mysqli_query($db,"select * from applicationform where name="sadiq ali"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
<tr>
<td><?php echo $data ['name']; ?></td>
<td><?php echo $data['fathername']; ?></td>
<td><?php echo $data['mothername']; ?></td>
<td><?php echo $data['dob']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['branch']; ?></td>
<td><?php echo $data['highschool']; ?></td>
<td><?php echo $data['intermediate']; ?></td>
<td><?php echo $data['graduation']; ?></td>
<td> <a href='edit.php?id=<?php echo $data>['companyid'];?>'>Edit</a> </td>
</tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection
?>

  
</div>
   
</body>
</html> 
