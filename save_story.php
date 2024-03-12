<?php
if(isset($_COOKIE["login"])){
    $email = $_COOKIE["login"];
    $conn = mysqli_connect("localhost","root","","matrimonial");
    if(empty($_POST["success"]) || empty($_GET["id"])){
        header("location:profile.php?empty=1");
    }else{
        $code = $_GET["id"];
        $success_story = $_POST["success"];
        if(mysqli_query($conn,"insert into success_stories values('$code','$email','$success_story')")>0){
            header("location:profile.php?save_story=1");
        }else{
            header("location:login.php?again=1");
        }
    }
    
}else{
    header("location:login.php?again=1");
}