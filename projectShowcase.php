<?php
// session_start();

//  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//    header("location: login.php");
//    exit;
//  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pricing - Company Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v2.2.1
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    body{
          background-color:#defce2;
        }
   .custom__Functionality{
        margin: 10px;
    }
    .project__Input{
        
        min-height: 250px;
        
    }
    .input__header{
        
        
        font-family: 'Montserrat', sans-serif;
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 30px;
        border-bottom: 1px solid gray;
    }
    .project__Input form{
        
        width: 100%;
        /* background-color: #ECECEC; */
        min-height: 250px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-top: 20px;
        margin-bottom: auto;
        align-items: center;
        
    }
    .project__innerDiv{
        margin-bottom: 20px;
        display: flex;
        flex-direction: row;
    }
    .project__innerDiv input{
        padding: 5px;
        outline: none;
        border-radius: 4px;
       
        
        margin-left: 5px;
    }
    .project__innerDiv label {
        margin-left: 20px;
        font-size: 1.2rem;
    }
    .desc__input{
        display: flex;
        justify-content:center;
        align-items: center;
        margin-bottom: 15px;
    }
    .desc__input textarea{
        padding: 5px;
        outline: none;
        border-radius: 4px;
    }
    .desc__input label{
        margin-right: 10px;
        font-size: 1.2rem;
    }
     .tech__input label{
        font-size: 1.2rem;
    }
    .tech__input input{
        padding: 5px;
        outline: none;
        border-radius: 4px;
        margin-left: 5px;
        
    }
    
    .container-fluid{
        display: flex;
        justify-content:center;
        
    }
    .post__innerContainer{
        
        width: 75%;
        
    }
    .card{
        border: none !important;
        background-color: #ECECEC;
        border-radius: 6px !important;
    }
    .card-body h4{
        font-size: 1.7rem;
        font-weight: 600;
        
        margin: 3px;
    }
    .card-body h5{
        font-size: 1.2rem;
        font-weight: 400;
        color:#8F8F8F;
        margin-bottom: 20px;
    }
    .card-body .project__desc{
        margin-bottom: 4px;
    }
    .bi-suit-heart{
        margin-right: 5px;
    }
    .action__btns a{
        text-decoration: none;
    }
    .comment__action{
        position: relative;

    }
    .comment__action span{
       position: absolute;
       left: 15px;
    }
    .project__actionBtn{
        font-size: 1.3rem !important;
    }
    .project__comment{
        margin-top: 5px;
    }
    .project__comment input{
        padding: 5px;
        outline: none;
        border-radius: 4px;
        margin-left: 5px;
    }

    .user__comment{
        display: flex;
        
        
    }
    .user__comment p{
        font-size: 1rem;
        font-weight: 600;
        margin-right: 10px;
        margin-bottom: 5px;
    }
    .user__comment span{
        padding: 2px;
        font-size: 0.9rem;
        font-weight: 400;
        
    }

    </style>
</head>

<body>

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html"><span>Quality </span>Education</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li><a href="index.php">Home</a></li>
          <li class="active"><a href="index.php">About Us</a></li>
          <li><a href="index.php">Services</a></li>
          <li><a href="index.php">Portfolio</a></li>
          <li><a href="index.php">Contact</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Project Hub</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Project Hub</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

      

      <div class="m-auto content max-width-1 my-2">
        <div class="content-left">
        <center>
            <h1>Project Hub</h1>
            
            <!-- <p>My Halloween decorations are staying in the box this year. To be honest, they didn’t make it out of the
                box last year either. My Halloween spirit has officially been bludgeoned to death by teenagers who no
                longer care and a persistent October fear of the Northern California wildfires. And speaking of fear,
                isn’t there more than enough of that going around? Maybe all of us can pretend that Halloween isn’t even
                happening this year?</p> -->
                <Button class="btn btn-primary custom__Functionality" onclick="myFunction()">Share project</Button>
                </center>
        </div>
        <!-- <div class="content-right">
            <img src="home.svg" alt="iBlog">
        </div> -->
    </div>

    <div class="max-width-1 m-auto">
        <hr>
    </div>


    
    <div id="userInput" class="project__Input" style="display: none;">
    
        <form method="POST" action="addProject.php">
         <h2 class="btn btn-dark col-md-9">Enter your Project details below.</h2>
           
            <div class="project__innerDiv">
                
                <div class="title__input">
                    <label for="title">
                        Title
                    </label><input type="text" name="title" placeholder="Enter title here..."/>
                </div>

                <div class="tech__input">
                    <label for="">Technologies used</label> <input type="text" name="techStack" placeholder="Enter techStack used here...">
            
                </div>
                
            </div>
            <div class="desc__input">
                <div>
                <label for="title">
                    Description
                    </label> <textarea type="text" name="desc" rows="1" cols="20"  placeholder="Enter description here" >
                    </textarea>
                </div>
                <div>
                <label for="title">
                        Github Link
                    </label><input type="text" name="link" placeholder="Enter github link here..."/>
                </div>
                    
            </div>
            <div class="project__submit">
            <button class="btn btn-primary " type="submit" name="projectSubmit">Post It</button>
            </div>
            
        </form>
    </div>

    <div class="container-fluid ">
        <div class="post__innerContainer">
        <div class="feed__header" >
       <center> <div class="feed__search"><input type="text"  class="form-control col-md-8" id="myInput" onkeyup="searchFeed()" placeholder="Search by name | title"          title="Type in a name"> 
            </div></center> <br>
        <h2 class="btn btn-secondary  col md-12"><i class="bi bi-newspaper mr-2 "></i>All Feed</h2>
            
        
        </div>
        
        <?php 
        include('connect.php');
    
        $database=new DatabaseManager();
        $query = "SELECT * FROM projects ORDER BY createAt DESC";
        $comm_query = "SELECT * FROM projectcomments ORDER BY comment_Created DESC";

        $result=$database->safeRetrieve($query,NUll);

        $comm_result = $database->safeRetrieve($comm_query,NUll);

        for($i= 0; $i < count($result); $i++){

            $projectId = $result[$i]['projectId'];
            $postDate = $result[$i]['createAt'];
            $newDate =  date_create($postDate);

            $postedDate = date_format($newDate,  "d-m-Y");
           ?>
            <div class='card mb-5'>
                <div class='card-header'>
                    Featured at <b><?php echo $postedDate ?></b>
                </div>

                <div class='card-body' id='cardBody'>
                    <h4 class='card-title'><?php echo $result[$i]['userName'] ?></h4>
                    <h5 class='card-title'><?php echo $result[$i]['project_Title'] ?></h5>
                    <p class='card-text project__desc'> <?php echo $result[$i]['project_Desc'] ?></p>
                    <p class='card-text project__tech'>Tech Stack Used: <?php echo $result[$i]['tech_Stack'] ?></p>
                    <?php if(!empty($result[$i]['repoLink'])){
                       echo '<p>Github Repo-Link: <a href="'.$result[$i]['repoLink'] .'" target="_blank">'.$result[$i]['repoLink']. '</a></p>';
                    } ?>
                    
                    <div class='action__btns'>
                    <form action='addProject.php?pId=<?php echo $projectId ?>' method='POST'>
                    
                    <a  class='mr-3 ' >
                        <button style="border: none;cursor:pointer;" class='text-primary' name='post__like' type='submit'>
                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6I0ZEMzAxODsiIGQ9Ik0yNTYsNDgxYy0zLjUzLDAtNy4wNDYtMS4yMy05Ljg3My0zLjcwNmMtMjEuODI2LTE5LjA4Ny00Mi41ODMtMzYuNzgyLTYyLjEwOS01My40MjMNCglDNzMuODE3LDMyOS45NiwwLDI2Ny45MDksMCwxNzcuNTE0QzAsOTMuOTg4LDU5LjAzNywzMSwxMzYsMzFjNjAuNjU5LDAsOTkuNTk1LDQyLjM3OCwxMjAsODAuNTM3QzI3Ni40MDUsNzMuMzc4LDMxNS4zNDEsMzEsMzc2LDMxDQoJYzc2Ljk2MywwLDEzNiw2Mi45ODgsMTM2LDE0Ni41MTRjMCw5MC4zOTYtNzMuODE3LDE1Mi40NDYtMTg0LjAxOCwyNDYuMzU3Yy0xOS41MjYsMTYuNjQxLTQwLjI4MywzNC4zMzYtNjIuMTA5LDUzLjQyMw0KCUMyNjMuMDQ2LDQ3OS43NywyNTkuNTMsNDgxLDI1Niw0ODF6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojRTYxRTE0OyIgZD0iTTI2NS44NzMsNDc3LjI5NGMyMS44MjYtMTkuMDg3LDQyLjU4My0zNi43ODIsNjIuMTA5LTUzLjQyM0M0MzguMTgzLDMyOS45Niw1MTIsMjY3LjkwOSw1MTIsMTc3LjUxNA0KCUM1MTIsOTMuOTg4LDQ1Mi45NjMsMzEsMzc2LDMxYy02MC42NTksMC05OS41OTUsNDIuMzc4LTEyMCw4MC41MzdWNDgxQzI1OS41Myw0ODEsMjYzLjA0Niw0NzkuNzcsMjY1Ljg3Myw0NzcuMjk0eiIvPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo" height=30px width=20px>
                       
                        <?php 
                            $database=new DatabaseManager();
                            $query_likes = "SELECT * FROM projectLikes WHERE projectId = '$projectId'";

                            $query_result = $database->safeRetrieve($query_likes,NUll);

                            if(count($query_result) == 0){
                                echo 0;
                            }
                            else{
                                echo $query_result[0]['no_Likes'];
                            }
                            
                        ?>Likes 
                        </button>
                    </a>
                    
                    <a class='text-primary comment__action' style="cursor:pointer;">
                          <img src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQ0NC4zOTQgMy45OTZoLTI4NS4wNzJjLTM3LjE4MyAwLTY3LjYwNiAzMC40MjMtNjcuNjA2IDY3LjYwNnYyMy4wMDRoMjU3Ljg3MWMzNy4xODMgMCA2Ny42MDYgMzAuNDIzIDY3LjYwNiA2Ny42MDZ2MTY4LjU0N2gyNy4yMDFjMzcuMTgzIDAgNjcuNjA2LTMwLjQyMyA2Ny42MDYtNjcuNjA2di0xOTEuNTUxYzAtMzcuMTg0LTMwLjQyMy02Ny42MDYtNjcuNjA2LTY3LjYwNnoiIGZpbGw9IiM2YzdlZDYiLz48cGF0aCBkPSJtMzk2LjQ2MSA5MS41MTVoLTI4NS4wNzJjLTYuODM2IDAtMTMuNDQxIDEuMDM2LTE5LjY3MyAyLjk0NnYuMTQ1aDI1Ny44NzFjMzcuMTgzIDAgNjcuNjA2IDMwLjQyMyA2Ny42MDYgNjcuNjA2djE2OC41NDdoMjcuMmM2LjgzNiAwIDEzLjQ0MS0xLjAzNiAxOS42NzMtMi45NDZ2LTE2OC42OTJjLjAwMS0zNy4xODMtMzAuNDIyLTY3LjYwNi02Ny42MDUtNjcuNjA2eiIgZmlsbD0iIzRmNjdkMiIvPjxwYXRoIGQ9Im0zNTIuNjc4IDkxLjUxNWgtMjg1LjA3MmMtMzcuMTgzIDAtNjcuNjA2IDMwLjQyMy02Ny42MDYgNjcuNjA2djE5MS41NWMwIDM3LjE4MyAzMC40MjMgNjcuNjA2IDY3LjYwNiA2Ny42MDZoMTcxLjA5NmM3LjMzNSAwIDEyLjgxMSA2LjgyNiAxMS4xMzMgMTMuOTY2LTQuNTM3IDE5LjMxNy0xMS40OCAzOS43NDUtMjEuNzQ0IDYwLjY4Ni00LjYwOSA5LjQwNSA1Ljg3NiAxOC45NjYgMTQuNzgyIDEzLjQ1NCAyNS43NTEtMTUuOTM3IDYyLjM4OS00Mi42MSA5My4yNDQtODAuMzE3IDQuMDU2LTQuOTU3IDEwLjE1Ni03Ljc5IDE2LjU2MS03Ljc5IDM3LjE4MyAwIDY3LjYwNi0zMC40MjMgNjcuNjA2LTY3LjYwNnYtMTkxLjU1YzAtMzcuMTgyLTMwLjQyMy02Ny42MDUtNjcuNjA2LTY3LjYwNXoiIGZpbGw9IiM2MGI4ZmUiLz48cGF0aCBkPSJtMjkzLjYxOCA0MzIuMjQzYzEuNjc3LTcuMTQxLTMuNzk4LTEzLjk2Ni0xMS4xMzMtMTMuOTY2aC00My43ODNjNy4zMzUgMCAxMi44MSA2LjgyNSAxMS4xMzMgMTMuOTY2LTQuNTM3IDE5LjMxNy0xMS40OCAzOS43NDUtMjEuNzQ0IDYwLjY4Ni00LjYwOSA5LjQwNSA1Ljg3NiAxOC45NjYgMTQuNzgyIDEzLjQ1NCA5Ljg4LTYuMTE1IDIxLjM2NS0xMy44MTYgMzMuNTA5LTIzLjEwOCA3LjgzMi0xNy41NjMgMTMuMzk5LTM0LjY5NiAxNy4yMzYtNTEuMDMyeiIgZmlsbD0iIzIzYThmZSIvPjxwYXRoIGQ9Im00My43ODMgMzUwLjY3MXYtMTkxLjU1YzAtMzcuMTgzIDMwLjQyMy02Ny42MDYgNjcuNjA2LTY3LjYwNmgtNDMuNzgzYy0zNy4xODMgMC02Ny42MDYgMzAuNDIzLTY3LjYwNiA2Ny42MDZ2MTkxLjU1YzAgMzcuMTgzIDMwLjQyMyA2Ny42MDYgNjcuNjA2IDY3LjYwNmg0My43ODNjLTM3LjE4NCAwLTY3LjYwNi0zMC40MjItNjcuNjA2LTY3LjYwNnoiIGZpbGw9IiMyM2E4ZmUiLz48ZyBmaWxsPSIjZGZlYmZhIj48Y2lyY2xlIGN4PSI5My43MTQiIGN5PSIyNjAuMzk3IiByPSIyMi40MzQiLz48Y2lyY2xlIGN4PSIxNjYuMTc0IiBjeT0iMjYwLjM5NyIgcj0iMjIuNDM0Ii8+PGNpcmNsZSBjeD0iMjM4LjYzMyIgY3k9IjI2MC4zOTciIHI9IjIyLjQzNCIvPjxjaXJjbGUgY3g9IjMxMS4wOTMiIGN5PSIyNjAuMzk3IiByPSIyMi40MzQiLz48L2c+PHBhdGggZD0ibTkzLjcxNCAyNjAuMzk3YzAtOC4zMDIgNC41MTQtMTUuNTQ2IDExLjIxNy0xOS40MjUtMy4zMDEtMS45MS03LjEyOS0zLjAwOS0xMS4yMTctMy4wMDktMTIuMzkgMC0yMi40MzQgMTAuMDQ0LTIyLjQzNCAyMi40MzRzMTAuMDQ0IDIyLjQzNCAyMi40MzQgMjIuNDM0YzQuMDg4IDAgNy45MTctMS4wOTkgMTEuMjE3LTMuMDA5LTYuNzA0LTMuODc5LTExLjIxNy0xMS4xMjMtMTEuMjE3LTE5LjQyNXoiIGZpbGw9IiNiMWRiZmMiLz48cGF0aCBkPSJtMTY2LjE3NCAyNjAuMzk3YzAtOC4zMDIgNC41MTQtMTUuNTQ2IDExLjIxNy0xOS40MjUtMy4zMDEtMS45MS03LjEyOS0zLjAwOS0xMS4yMTctMy4wMDktMTIuMzkgMC0yMi40MzQgMTAuMDQ0LTIyLjQzNCAyMi40MzRzMTAuMDQ0IDIyLjQzNCAyMi40MzQgMjIuNDM0YzQuMDg4IDAgNy45MTYtMS4wOTkgMTEuMjE3LTMuMDA5LTYuNzA0LTMuODc5LTExLjIxNy0xMS4xMjMtMTEuMjE3LTE5LjQyNXoiIGZpbGw9IiNiMWRiZmMiLz48cGF0aCBkPSJtMjM4LjYzMyAyNjAuMzk3YzAtOC4zMDIgNC41MTQtMTUuNTQ2IDExLjIxNy0xOS40MjUtMy4zMDEtMS45MS03LjEzLTMuMDA5LTExLjIxNy0zLjAwOS0xMi4zOSAwLTIyLjQzNCAxMC4wNDQtMjIuNDM0IDIyLjQzNHMxMC4wNDQgMjIuNDM0IDIyLjQzNCAyMi40MzRjNC4wODggMCA3LjkxNy0xLjA5OSAxMS4yMTctMy4wMDktNi43MDMtMy44NzktMTEuMjE3LTExLjEyMy0xMS4yMTctMTkuNDI1eiIgZmlsbD0iI2IxZGJmYyIvPjxwYXRoIGQ9Im0zMTEuMDkzIDI2MC4zOTdjMC04LjMwMiA0LjUxMy0xNS41NDYgMTEuMjE3LTE5LjQyNS0zLjMwMS0xLjkxLTcuMTMtMy4wMDktMTEuMjE3LTMuMDA5LTEyLjM5IDAtMjIuNDM0IDEwLjA0NC0yMi40MzQgMjIuNDM0czEwLjA0NCAyMi40MzQgMjIuNDM0IDIyLjQzNGM0LjA4OCAwIDcuOTE3LTEuMDk5IDExLjIxNy0zLjAwOS02LjcwNC0zLjg3OS0xMS4yMTctMTEuMTIzLTExLjIxNy0xOS40MjV6IiBmaWxsPSIjYjFkYmZjIi8+PC9zdmc+" height=30px width="20px">
                             <span class="badge badge-info">
                                <?php 
                                    $curr_id= $result[$i]['projectId'];
                                    $project__comments = "SELECT * FROM projectcomments  WHERE projectId ='$curr_id'";
                                    $comment_res = $database->safeRetrieve($project__comments,NUll);

                                    if(count($comment_res) == 0){
                                        echo 0;
                                    }
                                    else{
                                        echo count($comment_res);
                                    }
                                ?>
                            </span>
                        </a>
                    
                    </form>
                        
                        
                    </div>
                    <div class='project__comment' >
                        <form action='addProject.php?pId=<?php echo $projectId ?>' method='POST'> 
                            <input name='comment_text' placeholder='Add a comment...' />
                            <button type='submit' name='submit_comment' class='btn btn-warning'>Post</button>
                            <h6 class="mt-3">Comments</h6>
                            <div style="border:3px solid #FBFCFC; border-radius: 4px;">
                        </form >
                        
                        <?php
                        $target_id= $result[$i]['projectId'];
                         $comm_query = "SELECT * FROM projectcomments  WHERE projectId ='$target_id' ORDER BY comment_Created DESC";
                         $comm_result = $database->safeRetrieve($comm_query,NUll);
                        
                         if(count($comm_result) >= 1){
                            for($j= 0; $j < count($comm_result); $j++){
                                
                                ?>
                                
                            <div style="padding:0 5px" class=" user__comment">
                            <p><?php echo $comm_result[$j]['userName']?>:</p>
                            <span><?php echo $comm_result[$j]['comment_Text']?></span>
                            </div>



                           <?php 
                           }
                         }
                         
                         ?>
                        </div>
                    </div>
                    
                </div>
            </div>

            <?php }
            
            ?>
            
        </div>

    </div>

<script type="text/javascript">
    function myFunction() {
        let x = document.getElementById("userInput");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
    }

    function searchFeed(){
        var input, filter, feedBody, name, title, inputValue;
        input = document.getElementById("myInput");
        inputVal = input.value.toUpperCase();
        feedBody = document.getElementsByClassName('card');
        
        for (let i = 0; i < feedBody.length; i++) {
            name =  feedBody[i].childNodes[3].childNodes[1].childNodes[0].data;
            var newName =  name.toUpperCase()
            title = feedBody[i].childNodes[3].childNodes[3].childNodes[0].data;
            var newTitle =  title.toUpperCase()
            if((newName.indexOf(inputVal) !== -1) || (newTitle.indexOf(inputVal) !== -1)){
                feedBody[i].style.display = "";
            }
            else{
                feedBody[i].style.display = "none";
            }
        }


    }
    

</script>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>About Us</h4>
            <p>
            By providing every student with a quality education, and the materials they need to study and explore various facilities being available on our website, we can help students from all backgrounds learn and thrive.
        </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Link</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
             
              <li><i class="bx bx-chevron-right"></i> <a href="grade.php">Grade Tally</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="ptojectShpwcase.php">Project Hub</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Search with Recommendation</a></li> 
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>View our Newsletter to get Updated with us</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          </a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>