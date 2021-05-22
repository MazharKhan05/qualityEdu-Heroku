<!DOCTYPE html>
<html>
<head>
  <title>Create User</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <style type="text/css">
       body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-image: url("lbk.jpg");
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
        }
        .user_card {
            height: 460px;
            width: 350px;
            margin-top: auto;
            margin-bottom: auto;
            background: white;
            position: relative;
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 5px;

        }
        .brand_logo_container {
            position: absolute;
            height: 170px;
            width: 170px;
            top: -75px;
            border-radius: 50%;
            background: white;
            padding: 10px;
            text-align: center;
        }
        .brand_logo {
            height: 150px;
            width: 150px;
            border-radius: 50%;
            border: 2px solid white;
        }
        .form_container {
            margin-top: 100px;
        }
        .login_btn {
            width: 100%;
            background: purple !important;
            color: white !important;
        }
        .login_btn:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }
        .login_container {
            padding: 0 2rem;
        }
        .input-group-text {
            background: #0066ff !important;
            color: white !important;
            border: 0 !important;
            border-radius: 0.25rem 0 0 0.25rem !important;
        }
        .input_user,
        .input_pass:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }
        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #c0392b !important;
        }
    </style>
</head>
<script type="text/javascript">
  function valid(){
    var us_name=document.forms["cr_user"]["usn"];
    var us_pass=document.forms["cr_user"]["pwd"];
    var us_mail=document.forms["cr_user"]["mail"];
    var us_ph=document.forms["cr_user"]["ph"];
    if(us_name.value == "")
    {
      window.alert("Please enter your username.");
      us_name.focus();
      return false;
    }
    if(us_pass.value == "")
    {
      window.alert("Please enter your password");
      us_pass.focus();
      return false;
    }
    if(us_mail.value == "")
    {
      window.alert("Please enter your email");
      us_mail.focus();
      return false;
    }
    if(us_ph.value == "")
    {
      window.alert("Please enter your Phone");
      us_ph.focus();
      return false;
    }
  }
</script>
<body>
<div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="group1.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form action="" onsubmit="valid()" id="cr_user" method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="usn" class="form-control input_user"  placeholder="username">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="pwd" class="form-control input_pass" value="" placeholder="password">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-envelope-open"></i></span>
                            </div>
                            <input type="text" name="mail" class="form-control input_user"  placeholder="Mail">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" name="ph" class="form-control input_user"  placeholder="Phone No">
                        </div>
                            <div class="d-flex justify-content-center mt-3 login_container">
                    <button type="submit" name="reg" class=" btn btn-success col md-4">Create</button>
                   </div>
                    </form>
                </div>
                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        Already have an account?
                    </div>
                <div class="d-flex justify-content-center mt-3 login_container">
                   <a href="login.php" class="btn btn-primary col md-6">Sign In</a>
                   </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
include("connect.php");
if(isset($_POST['reg'])){
$u=$_REQUEST["usn"];
$ps=$_REQUEST["pwd"];
$ps=md5($ps);
$e_m=$_REQUEST["mail"];
$p=$_REQUEST["ph"];
$database=new DatabaseManager();
$query ="INSERT INTO users (name,password,email,phone) VALUES ('$u','$ps','$e_m','$p')"; 
//echo $query;
$status=$database->fireSafeQuery($query,NUll);
}
 ?>         

