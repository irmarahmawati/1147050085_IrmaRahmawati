
<html>
<head>	
	<title>UTS Praktikum PI</title>
		<link rel="stylesheet" type="text/css" href="table.css">
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
	
</head>

<body style ="background-color:gainsboro">
	<h1>Input Users Data</h1>
    <form name="form1" method="post" action="user_add.php" >
    <table>
	<p>
            <tr>
				<td><label>Id</label></td>
				<td><label> : </label></td>
				<td><input type="text" name="id" ><td>
			</tr>
        </p>
        <p>
            <tr>
				<td><label>First Name     </label></td>
				<td><label> : </label> </td>
				<td><input type="first_name" name="first_name"></td>
			</tr>
        </p>
        <p>
		<tr>
            <td><label>Last Name</label></td>
			<td> <label>: </label></td>
            <td><input type="last_name" name="last_name"></td>
        </p>
		 <p>
            <tr>
				<td><label>Username     </label></td>
				<td><label> : </label> </td>
				<td><input type="username" name="username"></td>
			</tr>
        </p>
		 <p>
             <tr>
				<td><label>Email    </label></td>
				<td><label> : </label> </td>
				<td><input type="email" name="email"></td>
			</tr>
        </p>
		 <p>
            <tr>
				<td><label>Password </label></td>
				<td><label> : </label> </td>
				<td><input type="password" name="password"></td>
			</tr>
        </p>
        <p>
		<p>
		</p>
		<tr>
            <td><input type="submit" name="Submit" value="Save Data"></td>
		</tr>
        </p>
    </form>

		</table> </center>
	</form>
	</div>
</body>
</html>

