<?php
// including the database connection file
include_once("classes/Crud.php");

$crud = new Crud();

//getting id from url
$id = $crud->escape_string($_GET['id']);

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM categories WHERE id=$id");

foreach ($result as $res) {
	$id = $res['id'];
	$name = $res['name'];
	$description = $res['description'];
}
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
    <title>Halaman Admin</title>
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
<html>
<head>
	<title>UTS Praktikum PI</title>
	<script type="text/javascript">
		function validate() {
			if (document.form1.name.value == '') {
				alert('Please provide your name');
				document.form1.name.focus();				
				return false;
			}
			if (document.form1.email.value == '') {
				alert('Please provide your email');
				document.form1.email.focus();
				return false;
			}
			return true;
		}
	</script>	
</head>

<body style ="background-color:gainsboro">
	<h1>Edit Data Categories</h1>

<body>
	
	<form name="form1" method="post" action="editaction.php">
		<table border="0">
			<tr> 
				<td><label>Id</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="id" value="<?php echo $id;?>"></td>
			</tr>
			<tr> 
				<td><label>Name</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td><label>Description</td>
				<td><label> : </label></td>
				<td><input type="text" name="description" value="<?php echo $description;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
