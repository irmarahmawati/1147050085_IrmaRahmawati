<?php
//including the database connection file
include_once("classes/Crud2.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM books ORDER BY id DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>

<html>
<head>	
	<title>UTS Praktikum PI</title>
		<link rel="stylesheet" type="text/css" href="table.css">
	</head>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="gaya.css">
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
    <script src="js/jquery1.12.4.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </head>
<!--boostrap menu-->
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
    	<div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
          	<span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
      </div>
           <div class="navbar-collapse collapse" >
           	<ul class="nav navbar-nav">
            <li><a href="kategori_data.php"><span class="glyphicon glyphicon-sign-in"> Categories Data</span></a></li>	
             <li><a href="buku_data.php"><span class="glyphicon glyphicon-sign-in"> Books Data</span></a></li>  
			  <li><a href="user_data.php"><span class="glyphicon glyphicon-sign-in"> Users Data</span></a></li>  
			  <li><a href="index.php"><span class="glyphicon glyphicon-log-out"> Close Application</span></a></li>  
            </ul>
	  </div>
   	  </div>
   </div>
   <br><br><br>
 <!--akhir-->
<!--header-->
<body bgcolor="blue" >
<table border="1" align="center" width="80%">
<tr>

<br>
<body style ="background-color:gainsboro">
<br><h1><center>Books Data</center></h1></br>
 <a class="btn btn-primary pull-right" href="buku_add.html">
            <i class="glyphicon glyphicon-plus"></i> Add New Data
          </a>
<br>
<br>
<p>

	<table class="zebra-table" width='80%' border=10>

	<tr bgcolor='#000080'>
		<td><strong>Id</strong></td>
		<td><strong>Serial</strong></td>
		<td><strong>Title</strong></td>
		<td><strong>Author</strong></td>
		<td><strong>Synopsis</strong></td>
		<td><strong>Id Books Categories</strong></td>
		<td><strong>Action</strong></td>
	</tr>
	<?php 
	foreach ($result as $key => $res) {
	//while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['serial']."</td>";
		echo "<td>".$res['title']."</td>";
		echo "<td>".$res['author']."</td>";
		echo "<td>".$res['synopsis']."</td>";
		echo "<td>".$res['id_books_categories']."</td>";
		echo "<td><a href=\"buku_edit.php?id=$res[id]\">Update</a> | <a href=\"buku_delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
