<?php
// including the database connection file
include_once("classes/Crud3.php");


$crud = new Crud();


if(isset($_POST['update']))
{	
	$id = $crud->escape_string($_POST['id']);
	$first_name = $crud->escape_string($_POST['first_name']);
	$last_name = $crud->escape_string($_POST['last_name']);
	$username = $crud->escape_string($_POST['username']);
	$email = $crud->escape_string($_POST['email']);
	$password = $crud->escape_string($_POST['password']);
	
	
		//updating the table
		$result = $crud->execute("UPDATE users SET first_name='$first_name',last_name='$last_name',username='$username',email='$email',password='$password' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: user_data.php");
	
}
?>
