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
<p>
<p>
<br>
<br>

<center><img src="gambar_web/admin.jpg" class="img-responsive"/></center>
</tr>
<!--akhir header-->

<tr valign="top">
<br>
<center><img src="gambar_web/nulis.gif" class="img-responsive"/></center>
 <!--gambar slide -->
<body style ="background-color:gainsboro">
			<p><CENTER><div class="container">		
	
   </div></CENTER></p><br>
 <!--akhir gambar slide -->  


</tr>
</tr>
   </body>
</table>
</html>
<script type="text/javascript">
    window.setTimeout("waktu()",1000);    
    function waktu() {     
    var tanggal = new Date();    
    setTimeout("waktu()",1000);    
    document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();  
    }   
</script>
</html>
