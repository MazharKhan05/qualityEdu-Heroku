<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find a Book</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
.jumbotron {
    background-color: black;
    color: white;
  }

        table{
            text-align: center;
          
        }
        th{
            text-align: center;
            background:black;
            color:white;
        }
          .navbar {
    margin-bottom: 0;
    background-color: black;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: skyblue !important;
    background-color: #fff !important;
  }
  </style>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">ABOUT</a></li>
        <li><a href="home.php">SERVICES</a></li>
        <li><a href="home.php">PORTFOLIO</a></li>
        <li><a href="home.php">PRICING</a></li>
        <li><a href="home.php">CONTACT</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>
<form action="" method="POST" enctype="multipart/form-data">
<div class="jumbotron text-center">
  <h1 style="">Library Management</h1> 
  <p>(Learn From anywhere Anytime in the World)</p>
</div>
<br><br>
<h1 style="text-align:center;"><center>Enter The Book Name</center></h1><br>
</div>
<center>
<div class="input-group col-md-6 xs-6">
      <input type="text" class="form-control" size="50" placeholder="Search.." id="sk" name="sk">
      <div class="input-group-btn">
        <button type="submit" class="btn btn-success" id="sub" name="sub" ><span class="glyphicon glyphicon-search"></span> Search</button>
      </div>
    </div>
    </center>
    </form>
	</body>
	 <?php
    require("connect.php");

if(isset($_POST['sub'])){
    $cs=$_POST['sk'];
//echo $cs;
$database=new DatabaseManager();
 $query ="SELECT * from books where bk_nm='".$cs."'";
//echo "<br>query:".$query; 
$status=$database->safeRetrieve($query,NUll);

             for ($i=0; $i<count($status); $i++)
    { echo"<br><center>";   echo"<table class='table table-hover table-bordered'>";
                 echo"<th>Book Id</th><th>Book Name</th><th>Book Author</th><th>Category</th><th>Book Pdf</th>";
   echo "<tr>
    <td>" . $status[$i]['id'] . "</td>
    <td>" . $status[$i]['bk_nm'] . "</td>
    <td>" . $status[$i]['bk_aut'] . "</td>
    <td>" . $status[$i]['bk_catg'] . "</td>
    <td>" . '<a class="btn btn-primary" href="download.php?file='.$status[$i]['bk_pd'] .'">Download</a>'."</td>
    
    </tr>";
                 echo"</table>";echo"</center>";
    }
}
    ?>