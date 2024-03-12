<?php
if (empty($_POST["mother_tongue"]) || empty($_POST["complexion"]) || empty($_POST["body_type"]) || empty($_POST["height"]) || empty($_POST["weight"]) || empty($_POST["drink"]) || empty($_POST["smoke"]) || empty($_POST["blood_group"]) || empty($_POST["diet"]) || empty($_POST["education"]) || empty($_POST["annual_income"]) || empty($_POST["father_occupation"]) || empty($_POST["mother_occupation"]) || empty($_POST["brothers"]) || empty($_POST["sisters"])) {
    header("location:more_info.php?empty=1");
} else {
    if (isset($_COOKIE["login"])) {
        $email = $_COOKIE["login"];
        $conn = mysqli_connect("localhost", "root", "", "matrimonial");
        $rs = mysqli_query($conn, "select * from profile where email='$email'");
        if ($r = mysqli_fetch_array($rs)) {
            $code = $r["code"];
            $mother_tongue = $_POST["mother_tongue"];
            $complexion = $_POST["complexion"];
            $body_type = $_POST["body_type"];
            $height = $_POST["height"];
            $weight = $_POST["weight"];
            $drink = $_POST["drink"];
            $smoke = $_POST["smoke"];
            $blood_group = $_POST["blood_group"];
            $diet = $_POST["diet"];
            $education = $_POST["education"];
            $annual_income = $_POST["annual_income"];
            $father_occupation = $_POST["father_occupation"];
            $mother_occupation = $_POST["mother_occupation"];
            $brothers = $_POST["brothers"];
            $sisters = $_POST["sisters"];
            if (mysqli_query($conn, "insert into more_info values('$code','$email','$mother_tongue','$complexion','$body_type','$height','$drink','$weight','$blood_group','$diet','$smoke','$education','$annual_income','$father_occupation','$mother_occupation',$brothers,$sisters)") >0 ) {
                header("location:profile.php?more_info=1");
            }
        }else{
            header("location:more_info.php?data_not=1");
        }
    } else {
        header("location:index.php?again=1");
    }
}
?>
