<?php
if(isset($_COOKIE["login"])){
    $email = $_COOKIE["login"];
    $conn = mysqli_connect("localhost","root","","matrimonial");
    if(mysqli_query($conn,"delete from profile where email='$email'")){
        header("location:index.php?profile_deleted=1");
    }
    else{
        header("location:profile.php?del_err=1");
    }
}
?>