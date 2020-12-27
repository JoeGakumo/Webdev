<?php
include_once 'connection.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title></title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

   </head>
   <body>
   <div class="container mt-5 ">
    <h3 class="text-primary">Huduma Center Website Department of Birth/Death Certificate Issuing</h3>
      <div class="jumbotron">
        <div class="row mb-2">
          <h4 class="offset-md-2 text-dark text-center text-capitalize mr-3" style="border-bottom: 2px dotted #ffcccc;margin-bottom: 2px;">Ensure all the fields are filled correctly before submitting the form</h4>
                     <a href="#" class="nav-link" data-toggle="modal" data-target="#back">
                      <i class="fa fa-home fa-lg text-primary ml-auto"></i>Go Home</a>
        </div>
          <form class=" col-md-12 align-item-center" action="" method="post" style="background-color:#cddead; border-radius: 4px;">
            <!-- modal  -->
            <div class="modal" id="back">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"> Go Home?</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    Click Back to Exit
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-danger" type="button"><a href="dashboard.php" class=" text-warning">Back to Home</a></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- end of modal  -->
        <h1 class="text text-center text-success">Jamhuri Ya Kenya</h1>
        <p>Fill all the fields</p>
        <h3 class="text-dark text-center text-uppercase mb-2">Birth Certificate Application Form</h3>
       <b><p class="text-center text-danger text-uppercase"><span class="text-primary text-uppercase">note:</span>Please complete this form in block letters(delete where inappropriate)</p><b>
          <div class="row mb-2">
            <div class="col-lg-4 mb-2">
              <input type="text" name="first" placeholder="First Name"  class="form-control" required="">
            </div>
            <div class="col-lg-4 mb-2">
              <input type="text" name="second" placeholder=" second Name"  class="form-control" required="">
            </div>
            <div class="col-lg-4 mb-2">
              <input type="text" name="last" placeholder=" Last Name"  class="form-control" required="">
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-lg-4 mb-2">
              <input type="email" name="email" placeholder="Email Adress" required="" class="form-control" required="">
            </div>
            <div class="col-lg-4 mb-2">
              <input type="text" name="mobile" placeholder=" Telephone/Mobile Number"  class="form-control" required="">
            </div>
            <div class="col-lg-4 mb-2">
              <input type="text" name="child" placeholder="Full Names of Child at Time of Birth"  class="form-control" required="">
            </div>
          </div>
          <div class="row mb-2">
          
            <div class="col-lg-4 mb-2">
              <input type="text" name="place" class="form-control" placeholder="Place of Birth" required="">
            </div>
            <div class="col-lg-4 mb-2">
              <input type="text" name="dateofbirth" class="form-control" placeholder="Date of Birth/Death DD/MM/YYYY " required="" maxlength="10">
            </div>
            <div class="col-lg-4 mb-2">
              <input type="text" name="father" class="form-control" placeholder="Full names of Father" required="">
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-lg-4 mb-2">
              <input type="text" name="mother" placeholder="Full names of Mother" required="" class="form-control">
            </div>
            <div class="col-lg-4 mb-2">
              <input type="text" name="deceased" placeholder="Full names of Deceased" required="" class="form-control">
            </div>
            <div class="col-lg-4 mb-2">
              <input type="text" name="registration" placeholder="Date of Registration in DD/MM/YYYY" required="" class="form-control" maxlength="10">
            </div>
          </div>
            <div class="row mb-2">
              <div class="col-lg-6 mb-2">
                <input type="text" name="entrynumber" placeholder="Entry Number(The figure at the top right hand side of the Certificate)" class="form-control" required="">
              </div>
              <div class="col-lg-6 mb-2">
                <input type="text" name="others" placeholder="Other particulars which may assist in tracing the Entry/Entries" class="form-control">
              </div>
            </div>
          <button  class="btn btn-success btn-lg offset-md-5 mb-4" name="submit"><i class="fa fa-share" class="text-dark"></i> Submit</button>
        </form>
      </div>      
   </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <?php

if (isset($_POST['submit']))
 {

 mysqli_query($db, "INSERT INTO `birth` VALUES ('', '$_POST[first]','$_POST[second]', '$_POST[last]', '$_POST[email]', '$_POST[mobile]', '$_POST[child]', '$_POST[place]', '$_POST[dateofbirth]', '$_POST[father]', '$_POST[mother]', '$_POST[deceased]', '$_POST[registration]', '$_POST[entrynumber]', '$_POST[others]');");

}
 ?>

</body>

</html>
<!--  -->