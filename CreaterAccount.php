<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP Login System</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }
        #h1{
            background-color: rgba(14,135,130,255);
        }
        body{
            background-color: rgba(254,230,170,255);
        }
        .row{
            background-color:rgba(255,167,129,255);
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            box-shadow: 12px 12px 22px rgba(255,167,129,255) ;
        }
        img{
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
        }
        .btn1{
            border: none;
            outline: node;
            height: 50px;
            width: 100%;
            background-color:black;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn1:hover{
            background: rgba(19,135,132,255);
            border:5px solid;
            color:black;
        }
        .navbar-custom{
            background-color: black;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light
    ">
        <a class="navbar-brand" href="">ID MAKER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="https://www.fonewalls.com/wp-content/uploads/1440x2560-Background-HD-Wallpaper-465-768x1365.jpg" class="img-fluid" alt="">
                </div>
                    <div class="col-lg-7 px-5 pt-5">
                        <h1 class="font-weight-bold py-3">Create Account</h1>
                        <form method='post' action=''>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <h6>Full name</h6>
                                    <input type="text" id="fullname" name="fullname" class="form-control my-3 p-4" placeholder="Enter Your name here" required="required">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <h6>Username</h6>
                                    <input type="text" id="username" name="username" class="form-control my-3 p-4" placeholder="Enter Your Username here" required="required">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <h6>User Type</h6>
                                    <input type="text" id="collegename" name="collegename" class="form-control my-3 p-4" placeholder="Enter Your User type here" required="required">
                                </div>
                            </div>  

                            <div class="form-row">
                                <div class="col-lg-7">
                                    <h6>Number</h6>
                                    <input type="number" id="number" name="number" class="form-control my-3 p-4" required="required" placeholder="Enter your number">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                <h6>Password</h6>
                                    <input type="password" id="password" name="password" class="form-control my-3 p-4" required="required" placeholder="*******">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <button type="submit" id="btn" class="btn1 mt-3 mb-5" value="Login">Create Account</button>                                </div>
                            </div>
                                <p>If already have an account??</p><a href="practice.html">Login here</a> <!--Have to chage while creating web-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    $server = "localhost";  
    $user = "id19260662_root";  
    $pas = 'l](|t}_9ZLQ~V8P+';  
    $db_name = "id19260662_login_page"; 
    
    $con = mysqli_connect($server, $user, $pas, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

$conn = mysqli_connect($server,$user,$pas,$db_name);

$sql = 'SELECT * FROM `login_page_`';
// $result = mysqli_query($conn,$sql);
if(!$con){
    die("connection to this database");
}

$fistname = ($_POST['fullname']);
$collegename = ($_POST['collegename']);
$email = ($_POST['username']);
$passw = ($_POST['password']);
$number = ($_POST['number']);
$query = mysqli_query($conn,"SELECT * FROM `login_page_` WHERE username='$email'");
// $pfpsql = "INSERT INTO `login_page`.`signuppage` (`name`,`college`,`email`,`number`) VALUES ($firstname,$collegename,'$email','$number')";

if(mysqli_num_rows($query)>0){
    echo '</style><div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Please use different email</strong>      Because either the field is empty or this email is already used
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}else{
    $sql = "INSERT INTO `id19260662_login_page`.`login_page_` (`username`,`password`,`usertype`) VALUES ('$email','$passw','$collegename')";
if($con->query($sql)>0){
    echo "<div class='alert alert-success' role='alert'>
    Your account has been created 
  </div>
  ";
}
else{
    echo "Something went wrong";
}

}
$con->close();

?>
