<?php
    if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["gender"]) || empty($_POST["caste"]) || empty($_POST["religion"]) || empty($_POST["occupation"]) || empty($_POST["dob"]) || empty($_POST["city"]) || empty($_POST["state"]) || empty($_POST["country"])){
        header("location:register.php?empty=1");
    }
    else{
        $conn = mysqli_connect("localhost","root","","matrimonial");
        $sn=0;
        $rs=mysqli_query($conn,"select MAX(sn) from profile");
        if($r=mysqli_fetch_array($rs)){
            $sn=$r[0];
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
        
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["pass"];
        $gender = $_POST["gender"];
        $caste = $_POST["caste"];
        $religion = $_POST["religion"];
        $occupation = $_POST["occupation"];
        $birth = $_POST["dob"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $country = $_POST["country"];
        $status=$_POST["status"];
        $target="profile/";
        $target=$target.$code.".jpg"; //profile/xyz.jpg

        if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)){
            if(mysqli_query($conn,"insert into profile values($sn, '$code', '$fname','$lname','$email', '$password', '$gender', '$birth','$occupation','$caste', '$religion', '$city', '$state', '$country','$status')")>0){
                header("location:register.php?success=1");
            }
            else{
                header("location:register.php?again=1");
            }
        }
        else{
            header("location:register.php?img_err=1");
        }
        
        
    }
