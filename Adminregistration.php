<?Php
include "connection.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register Page</title>
<link rel="stylesheet" type="text/css" href="css/all.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
</head>
</head>
<style type="text/css">
  #hide1{
    display: none;
  }
  body{
    background-repeat: no-repeat;
    background-image: url(images/nature1.jpg);
    background-attachment:fixed;
    background-size: cover;
  }
</style>
<body style="background-color: #ccdead">
     <!-- nav bar -->
     <nav class="navbar navbar-expand-md navbar-light bg-dark">
       <div class="navbar-brand">
         <img src="images/Huduma.png" alt="HudumaLogo" style="width: 70px; height: 60px;border-radius: 70%;margin-top:-20px;">
       </div>
       <button class="navbar-toggler ml-auto mb-2 bg-secondary" type="button" data-toggle="collapse" data-target="#gakumo">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="gakumo">
         <div class="container-fluid">
           <div class="row">
            <div class="row align-item-center">
              <div class="col-md-4 mb-2">
                <a href="login.php" class="text-white">
                  <i class="fa fa-power-off fa-lg">Login</i>
                </a>
              </div>
              <div class="col-md-4 mb-2">
                <a href="register.php" class="text-white">
                  <i class="fa fa-user fa-lg">Register</i>
                </a>
              </div>
              <div class="col-md-4 mb-2">
                <a href="help.php" class="text-white">
                  <i class="fa fa-question-circle fa-lg">Help</i>
                </a>
              </div>
            </div>
           </div>
         </div>
       </div>
     </nav>
     <!-- end of nav bar -->
  <div class="container">
    <div class="row justify-content-center mt-5 py-5">
      <div class="col-lg-10" style="width: 600px;margin-left: 250px margin-top:50px;">
      <div class="jumbotron">
        <h4 class="text-dark text-center">Welcome to Huduma Center Website</h4>
        <div class="form-group">
          <h1 class="text-dark text-center mb-2" style="border-bottom: 3px solid grey">Register </h1>
          <form class="form-horizontal" action="" method="post">
            <div class="row mb-2">
              <div class="col-md-6 mb-2">
                  <div class="form-group input-group mb-3">
              <span class="input-group-addon">
                <span class="user">
                  <i class="fa fa-user"></i>
                </span>
              </span>
              <input type="text" class="form-control" name="names" placeholder="Full Names" required="">
            </div>
              </div>
               <div class="col-md-6">
                 <div class="form-group input-group mb-3">
              <span class="input-group-addon">
                <span class="user">
                  <i class="fa fa-user"></i>
                </span>
              </span>
              <input type="text" name="username" placeholder="Username" required="" class="form-control">
            </div>
              </div>
            </div>
            <div class="form-group input-group mb-3">
              <span class="input-group-addon">
                <span class="envelope">
                  <i class="fa fa-envelope"></i>
                </span>
              </span>
              <input type="email" name="email" placeholder="Enter Valid EmailAddress" required="" class="form-control">
            </div>
            <div class="form-group input-group mb-3">
              <span class="input-group-addon">
                <span class="">
                  <i class="fa fa-phone"></i>
                </span>
              </span>
              <input type="text" name="mobile" placeholder="Phone Number" required="" class="form-control">
            </div>
            <div class="form-group input-group mb-3">
                  <input type="file" name="pic" id="fileToUpload" required="" class="form-control"> 
            </div>
            <div class="form-group input-group mb-3">
              <span class="input-group-addon">
                <span class="lock">
                  <i class="fa fa-lock"></i>
                </span>
              </span>
              <input type="password" name="password" placeholder="Enter Valid Password" required="" class="form-control" id="myinput">
              <span class="input-group-addon">
                <span class="eye"  onclick="myfunction()">
                  <i id="hide1" class="fa fa-eye"></i>
                  <i id="hide2" class="fa fa-eye-slash"></i>
                </span>
              </span>
            </div>
            <div class="form-group">
              <label>
                <input type="checkbox" name="check">
                Remember me
              </label>
            </div>
            <div class="form-group input-group mb-2">
              <button class="btn btn-secondary btn-lg btn-block" name="submit">Register</button>
            </div>
          </form>
         <div class="row mb-5">
           <div class="col-md-6 mb-2">
             <b><a href="forgotpassword.php" class="nav-link text-success">Forgot Password?</a></b>
           </div>
           <div class="col-md-6 mb-2">
             <b><a href="login.php" class="nav-link text-dark">Login Here</a></b>
           </div>
         </div>
         <p class="text-dark">By Login and Reistering with us you agree to <span class="text-primary">Our terms, </span><span class="text-secondary">Policies</span><span class="text-danger"> & Conditions</span></p>
        </div>
      </div>
    </div>
    </div>
    
  </div>
  <!-- end of start of form -->
  <!-- start of footer -->
<footer class="footer sticky-bottom">
  <div class="container-fluid">
    <div class="row align-content-center justify-content-center" >
      <div class="col-md-12 bg-secondary">
        <div class="col-sm-6 col-md-6">
          <h2 class="footer-heading-1 text-center text-info" style="border-bottom: 1px solid #cddead">About Us</h2>
          <p class="text text-light">
            Welcome to HudumaCenter Website,We offer different facilities to our customers with the ease.We value our customer and we aim in delivering our services with effectiveness and effeciency as possible to our customer via this website
          </p>
        </div>
        <div class="col-md-6 col-sm-6 footer-widget">
          <h2 class="footer-heading-1 text-center text-info" style="border-bottom: 1px solid #cddead">Contact</h2>
          <ul class="footer-social list-unstyled float-md-center float-lft">
            <li class="footer-animated "><span class="icon"><a href=""><i class="fa fa-facebook-official fa-3x text-light"></i></a>&nbsp&nbspYou can contact us via Facebook</span></li>
            <li class="footer-animated "><span class="icon"><a href=""><i class="fa fa-twitter-square fa-3x text-light"></i></a>&nbsp&nbspyou can contact us via Twitter</span></li>
            <li class="footer-animated "><span class="icon"><a href=""><i class="fa fa-whatsapp fa-3x text-light"></i></a>&nbsp&nbspyou can contact us via Whatsapp</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

   
  <?php

  if (isset($_POST['submit'])) {

    $count=0;
    $sql="SELECT username FROM `adminregister`";
    $result=mysqli_query($db,$sql);

    while ($row=mysqli_fetch_assoc($result)) {
     if ($row['username']==$_POST['username']) {
      $count=$count+1;
           if ($row['email']==$_POST['email']) {
            $count=$count+1;
               if ($row['mobile']==$_POST['mobile']) {
                 $count=$count+1;
               }
        }
     }
    }
    if($count==0)
      {
        $password = md5($password);
       mysqli_query($db, "INSERT INTO `adminregister` VALUES ('', '$_POST[names]', '$_POST[username]', '$_POST[email]', '$_POST[mobile]', '$_POST[password]', '$_POST[pic]');");
    ?>
    <script type="text/javascript">
      alert("registration was successful!!... progress to Login");
    </script>
    <?php
    ?>
    <script type="text/javascript">
      window.location="loginAdmin.php";
    </script>
    <?php
  }
  else
  {
    ?>
    <script type="text/javascript">
      alert("Username or EmailAddress or Phone Number already Exists");
    </script> 
         
    <?php
  }
  }
  ?>
  <script type="text/javascript">
    function myfunction(){
      var x = document.getElementById("myinput")
      var y = document.getElementById("hide1")
      var z = document.getElementById("hide2")

      if (x.type === 'password') {
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";

      }
      else{

            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";

      }
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>






