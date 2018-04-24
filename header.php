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
    </head>

    <body>
        <?php
         if(isset($_SESSION['Cust_id'])){
            echo '<form action="includes/logout.php " method="POST">
                    <div class="form-row toalighright">
                    <div class="form-group col-md-12 float-right padright">
                    <button type="submit" name="submit" class="btn btn-primary">Logout</button>
                    </div>
                    </div>
                  </form>';
         }
         else
         {
             echo ' <form action="includes/login.php " method="POST">
                       <div class="form-row">
                       <div class="form-group col-md-4">
                        <input type="text" class="form-control" name="email" placeholder="email" >
                        </div>
                        <div class="form-group col-md-4">
                        <input type="password" class="form-control" name="password" placeholder="password">
                        </div>
                        <div class="form-group col-md-4">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                       </div>
                      </div>
                     </form>';
         }
        ?>   

    </body>
</html>