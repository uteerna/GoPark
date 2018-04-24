<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title> Admin Login </title>
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
  <body>
    <div class="tab">
      <button class="tablinks" onclick="openTab(event, 'Add Parking Space')">Add Parking Space</button>
      <button class="tablinks" onclick="openTab(event, 'Delete Parking Space')">Delete Parking Space</button>
    </div>

    <div id="Add Parking Space" class="tabcontent">
      <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
      <h3> Add Parking Space</h3>
      <form action="includes/db_save.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
              <input type="text" class="form-control" name="park_name" placeholder="Park Name" >
          </div>
          <div class="form-group col-md-6">
              <input type="text" class="form-control" name="park_address" placeholder="Park Address">
          </div>
          <div class = "form-group col-md-12">
            <input type="text" class="form-control" name="park_total" placeholder="Total space">
          </div>  
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block col-md-12">Submit</button>
    </form>
    </div>

    <div id="Delete Parking Space" class="tabcontent">
      <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
      <h3> Delete Parking Space </h3>
        <?php include 'includes/parking.php';
          echo '<table class="table table-hover">
          <thead class="thead-dark" style ="text-align:center;">
            <tr style ="text-align:center;">
            <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Address</th>
              <th scope="col">Parking Space</th>
            </tr>
          </thead><tbody>';
          foreach($parkings as $park)
          { echo '<tr style ="text-align:center;">
            <td>'.$park->park_id.'</td>
            <td>'.$park->park_name.'</td>
            <td>'.$park->park_address.'</td>
            <td>'.$park->park_total.'</td>
          </tr>';}
            '
          </tbody>
        </table>';
      ?>
      <form action="includes/db_del.php" method="post">
        <div class="form-row">
          <div> Enter the parking id to delete from the below table: <input type = "text" name = "park_id">
        <button type="submit" name="submit">Submit</button> <br/> <br/> </div>
      </form>

    <script>
      function openTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
    </script>
     
  </body>
</html> 
