<?php
if (isset($_COOKIE["login"])) {
    $email = $_COOKIE["login"];
    $conn = mysqli_connect("localhost", "root", "", "matrimonial");
    $rs = mysqli_query($conn, "select * from profile where email<>'$email' ORDER BY RAND() LIMIT 0,5");
    while ($r = mysqli_fetch_array($rs)) {
?>
            <ul class="profile_item">
                <a href="view_profile.php?id=<?=$r["code"]?>">
                    <li class="profile_item-img">
                        <img src="profile/<?= $r["code"] ?>.jpg" class="img-responsive" alt="" />
                    </li>
                    <li class="profile_item-desc">
                        <h4><?= $r["code"] ?></h4>
                        <p><?= $r["fname"] ?>&nbsp;<?= $r["lname"] ?></p>
                        <h5><?= $r["caste"] ?>,&nbsp;<?= $r["religion"] ?></h5>
                    </li>
                    <div class="clearfix"> </div>
                </a>
            </ul>
<?php
    }
} else {
    header("location:index.php?again=1");
}
?>