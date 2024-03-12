<?php
    if(empty($_POST['email']) || empty($_POST['pass'])){
        header("location:login.php?empty=1");
    }else{
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $conn = mysqli_connect("localhost","root","","matrimonial");
        $rs = mysqli_query($conn,"select * from profile where email='$email'");
        if($r=mysqli_fetch_array($rs)){
            if($r["password"]==$password){
                setcookie("login",$email,time()+3600);
                header("location:profile.php");
            }
            else{
                header("location:login.php?invalid_pass=1");
            }
        }
        else{
            header("location:login.php?invalid_email=1");
        }
    }
?>