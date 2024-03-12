<?php
if (empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"]) || empty($_POST["gender"]) || empty($_POST["caste"]) || empty($_POST["religion"]) || empty($_POST["occupation"]) || empty($_POST["dob"]) || empty($_POST["city"]) || empty($_POST["state"]) || empty($_POST["country"])) {
    header("location:edit_profile.php?empty=1");
} else {
    if (isset($_COOKIE["login"])) {
        $email = $_COOKIE["login"];
        $conn = mysqli_connect("localhost", "root", "", "matrimonial");
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $caste = $_POST["caste"];
        $religion = $_POST["religion"];
        $occupation = $_POST["occupation"];
        $birth = $_POST["dob"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $country = $_POST["country"];
        $status = $_POST["status"];
        if (mysqli_query($conn, "update profile set fname='$fname',lname='$lname',email='$email',gender='$gender',birth='$birth',occupation='$occupation',caste='$caste',religion='$religion',city='$city',state='$state',country='$country',status='$status' where email='$email'")) {
            header("location:profile.php?success=1");
        } else {
            header("location:edit_profile.php?try_again=1");
        }
    } else {
        header("location:index.php?again=1");
    }
}
?>
