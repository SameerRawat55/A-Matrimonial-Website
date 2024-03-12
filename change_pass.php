<?php
if (empty($_POST["np"]) || empty($_POST["cp"]) || empty($_POST["rp"])) {
    header("location:change_pass_page.php?empty=1");
}else{
    if (isset($_COOKIE["login"])) {
        $email = $_COOKIE["login"];
        $new_password = $_POST["np"];
        $current_password = $_POST["cp"];
        $confirm_password = $_POST["rp"];
        $conn = mysqli_connect("localhost", "root", "", "matrimonial");
        $rs1 = mysqli_query($conn,"select * from profile where email='$email'");
        if($r=mysqli_fetch_array($rs1)){
            $old_password = $r["password"];
            if($old_password == $current_password){
                if($new_password == $confirm_password){
                    if(mysqli_query($conn, "update profile set password='$new_password' where email='$email'")){
                        header("location:profile.php?pwd_changed=1");
                    }else{
                        header("location:change_pass_page.php?change_again=1");
                    }
                }else{
                    header("location:change_pass_page.php?pwd_not_same=1");
                }
            }else{
                header("location:change_pass_page.php?old_not_same=1");
            }
        }else{
            header("location:change_pass_page.php?again=1");
        }
    }else{
        header("index.php?again=1");
    }
   
}
