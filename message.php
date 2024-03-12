<?php
if(empty($_POST["msg"]) || empty($_GET["to_code"]) ){
    header("location:view_profile.php?empty=1");
}else{
    if(isset($_COOKIE["login"])){
        $email = $_COOKIE["login"];
        $msg = $_POST["msg"];
        $to_code=$_GET["to_code"];
        $date = date("l F d, Y");
        $conn = mysqli_connect("localhost","root","","matrimonial");
        $sn=0;
        $rs1=mysqli_query($conn,"select MAX(sn) from message");
        if($r1=mysqli_fetch_array($rs1)){
            $sn=$r1[0];
        }
        $sn++;

        $a=array();
        for($i='A'; $i<='Z'; $i++){
            array_push($a,$i);
            if($i=='Z')
            break;
        }
        for($i='0'; $i<='9'; $i++){
            array_push($a,$i);
            //if($i=='9')
            //break;
        }
        for($i='a'; $i<='z'; $i++){
            array_push($a,$i);
            if($i=='z')
            break;
        }
        shuffle($a);
        $code="";
        for($i=0; $i<6; $i++){
            $code = $code.$a[$i];
        }
        $code=$code."_".$sn;
        $rs = mysqli_query($conn,"select * from profile where email='$email'");
        if($r=mysqli_fetch_array($rs)){
            $from_code=$r["code"];
            $rs2 = mysqli_query($conn,"select * from profile where code='$to_code'");
            if($r2=mysqli_fetch_array($rs2)){
                $to_email = $r2["email"];
                if(mysqli_query($conn,"insert into message values($sn,'$code','$to_email','$email','$to_code','$from_code','$msg','$date')")>0){
                    header("location:view_profile.php?sent=1&id=$to_code");
                }else{
                    header("location:view_profile.php?not_sent=1&id=$to_code");
                }
            }else{
                header("location:view_profile.php?data_not_found=1&id=$to_code");
            }

        }else{
            header("location:view_profile.php?data_not_found=1");
        }
    }else{
        header("location:index.php?again=1");
    }
}
?>