<?php
if(isset($_COOKIE["login"])){
    $email = $_COOKIE["login"];
    $conn = mysqli_connect("localhost","root","","matrimonial");
    if(empty($_POST["profile_code"])){
        header("location:view_profile.php?again=1");
    }else{
        $profile_code=$_POST["profile_code"];
        $rs = mysqli_query($conn,"select * from fav where profile_code='$profile_code' AND user_email='$email'");
        if($r = mysqli_fetch_array($rs)){
            if(mysqli_query($conn,"delete from fav where user_email='$email' AND profile_code='$profile_code'")>0){
                echo "delete";
            }else{
                echo "delete_failed";
            }
        }else{
            if(mysqli_query($conn,"insert into fav values ('$profile_code','$email')")>0){
                echo "success";
            }else{
                echo "failed";
            }
        }
    }
}
?>