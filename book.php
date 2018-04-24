<?php 
 session_start();
 ?>
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
    <script>
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
    $(document).ready(function(){
       $("#name").val(getUrlParameter("name"));
       $("#total").val(getUrlParameter("total"));
       $("#aval").val(getUrlParameter("aval"));
       $("#start").val(getUrlParameter("start"));
       $("#end").val(getUrlParameter("end"));
       $("#price").val(getUrlParameter("price"));
       $("#park_id").val(getUrlParameter("id"));
    });
    //$("input").text(getUrlParameter("name"));
    </script>
    </head>
     
    <body>
        <nav class="row navbar navbar-light navbar-right navbar-right bg-light myclass">
            <a class="navbar-brand" href="#">
               <img src="resource/img/logo.jpg" width="60" height="60" alt=""> <strong style="font-family: sans-serif;"> INDIANA UNIVERSITY PARKING OPERATIONS </strong> 
            </a>
            <div class="col-md-6">
             <?php include 'header.php';?>
            </div>
        </nav>

        <p> <h1 class="maintext myclass" style = "text-align: center;"> Booking Information </h1> </p>  
        <div class="container">
         <form class="col-sm-10 " action="includes/addBooking.php " method="POST">
            <div class="form-group row ">
                <label  class="col-sm-2 col-form-label">Parking Space Name</label>
                <div class="col-10">
                <input class="form-control" type="text" id="name" name="park_name"  readonly require>
                <input class="form-control" type="text" id="park_id" name="park_id" style="display:none;" readonly require >
                </div> 
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Total Space</label>
                <div class="col-10">
                <input class="form-control" type="text" id="total" name="park_total" readonly require>
                </div> 
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Available Space</label>
                <div class="col-10">
                <input class="form-control" type="text" id="aval" name="park_aval" readonly require>
                </div> 
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Start Time</label>
                <div class="col-3">
                <input class="form-control" type="time"  id="start" name="s_time" readonly require> 
                </div> 
                <label  class="col-sm-2 col-form-label">End Time</label>
                <div class="col-3">
                <input class="form-control" type="time"  id="end" name="e_time" readonly require> 
                </div> 
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Price per Hour</label>
                <label  class="col-sm-10 col-form-label">$1.5</label> 
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Total Price</label>
                <div class="col-10">
                <input class="form-control" type="text" id="price" name="price"  readonly require>
                </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-2 col-form-label">Vechicle number</label>
            <div class="col-10">
                <input class="form-control" type="text" name="reg_no" require>
            </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
         </form>
        </div>
        <br/> <br/>
        <footer>
            <small>&copy; Copyright 2018, Group-09, Indiana University </small>
        </footer>
    </body>
</html>