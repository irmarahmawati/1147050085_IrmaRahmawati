<?php
// including the database connection file
include_once("classes/Crud2.php");


$crud = new Crud();


if(isset($_POST['update']))
{	
	$id = $crud->escape_string($_POST['id']);
	$serial = $crud->escape_string($_POST['serial']);
	$title = $crud->escape_string($_POST['title']);
	$author = $crud->escape_string($_POST['author']);
	$synopsis = $crud->escape_string($_POST['synopsis']);
	$id_books_categories = $crud->escape_string($_POST['id_books_categories']);
	
	
		//updating the table
		$result = $crud->execute("UPDATE books SET serial='$serial',title='$title',author='$author',synopsis='$synopsis',id_books_categories='$id_books_categories' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: buku_data.php");
	
}
?>
