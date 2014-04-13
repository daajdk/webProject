<?php session_start(); ?>

<!DOCTYPE html>
    <head>
   	 <meta charset="utf-8">
    	 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   	 <title>The Store</title>
   	 <meta name="description" content="">
   	 <meta name="viewport" content="width=device-width">

         <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
	<?php 
	    require_once 'connectDB.php';
            require_once 'createNew.php';
	    require_once 'login.php';
	?>
