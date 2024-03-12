<?php
     setcookie("login","",time()-1);
     header("location:login.php?logout=1");
?>