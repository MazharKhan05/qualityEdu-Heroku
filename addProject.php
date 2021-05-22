<?php 
include('connect.php');
session_start();
$currUser = $_SESSION['usn'];
$currId = $_SESSION['userId'];

if(isset($_POST['projectSubmit'])){
    $projTitle = $_POST['title'];
    $projRepo = $_POST['link'];
    $projDescription = $_POST['desc'];
    $projTech = $_POST['techStack'];

    $database=new DatabaseManager();

    $query = "INSERT INTO `projects` (`projectId`, `userId`,`userName`, `project_Title`,`repoLink`, `project_Desc`, `tech_Stack`) VALUES (NULL, '$currId','$currUser', '$projTitle','$projRepo', '$projDescription', '$projTech');";
    
    $status=$database->fireSafeQuery($query,NUll);
    if($status){
        header("Location:projectShowcase.php");
    }
    else{
        echo 'Query execution issue-->' . $status; 
    }
}

if(isset($_POST['submit_comment'])){
    $projectId = $_GET['pId'];
    $commentText= $_POST['comment_text'];
    
    $database=new DatabaseManager();

    $query = "INSERT INTO `projectcomments` (`commentId`, `projectId`, `comment_Text`, `comment_Created`, `userId`, `userName`) VALUES (NULL, '$projectId', '$commentText', current_timestamp(), '$currId', '$currUser');";

    $status=$database->fireSafeQuery($query,NUll);
    if($status){
        header("Location:projectShowcase.php");
    }
}

if(isset($_POST['post__like'])){
    $projectId = $_GET['pId'];
    
    $database=new DatabaseManager();

    
    $check_query = "SELECT * FROM  `projectLikes` WHERE projectId ='$projectId'";
    $status=$database->safeRetrieve($check_query,NUll);

    if(count($status) == 0){
        $query = "INSERT INTO `projectLikes` (`likeId`, `projectId`,  `no_Likes`) VALUES (NULL, '$projectId', 1);";
        $status=$database->safeRetrieve($query,NUll);

        if(count($status) == 0){
            header("Location:projectShowcase.php");
        }
    }
    
    //chcking for another user to like

    else{
        $prevLikes =  $status[0]['no_Likes'];
        $prevLikes = $prevLikes + 1;

        $update_Userquery = "UPDATE `projectlikes` SET `no_Likes` = '$prevLikes' WHERE `projectId` = '$projectId';";
        $query_Status=$database->safeRetrieve($update_Userquery,NUll);
    }
    
    if($status){
        header("Location:projectShowcase.php");
    }
}
?>