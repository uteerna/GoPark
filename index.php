<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html>

	<head>
	    <meta charset="UTF-8">
	    <title>go park</title>
	    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
	        crossorigin="anonymous">
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
	        crossorigin="aonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js" integrity="sha384-lZmvU/TzxoIQIOD9yQDEpvxp6wEU32Fy0ckUgOH4EIlMOCdR823rg4+3gWRwnX1M"
	        crossorigin="anonymous"></script>
	     <link rel="stylesheet" type="text/css" href="styles/style.css">
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	     <script src="js/script.js"></script>
	</head>
	<script type="text/javascript">
		var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };  
    if(getUrlParameter("msg"))
    alert(getUrlParameter("msg"));
	</script>
	<body>
	    <nav class="row navbar navbar-light navbar-right navbar-right bg-light myclass">
	        <a class="navbar-brand" href="#">
	            <img src="resource/img/logo.jpg" width="60" height="60" alt=""> <strong style="font-family: sans-serif;"> INDIANA UNIVERSITY PARKING OPERATIONS </strong> 
	        </a>
	        <div class="col-md-6 signin">
	        	<?php include 'header.php';?>
	        </div>
	    </nav>
	    <div id="book" style="display:none;">
	    </div>
	    <div id = "main">
	    <?php 
	         if(isset($_SESSION['Cust_id'])){
	         	if($_SESSION['Cust_email'] == "admin")
	         		{include('admin.php');}
	         	else
	            	{include('main.php');}
	         }
	         else {
	            include('register.php');
	         }
	    
	    ?>
	    <br/> <br/>
	    <footer>
	 		<small>&copy; Copyright 2018, Group-09, Indiana University </small>
		</footer>
	</body>
</html>