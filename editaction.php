<?php
// including the database connection file
include_once("classes/Crud.php");


$crud = new Crud();


if(isset($_POST['update']))
{	
	$id = $crud->escape_string($_POST['id']);
	
	$name = $crud->escape_string($_POST['name']);
	$description = $crud->escape_string($_POST['description']);
	
	
		//updating the table
		$result = $crud->execute("UPDATE categories SET name='$name',description='$description' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: kategori_data.php");
	
}
?>
