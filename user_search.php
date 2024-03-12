<?php
if (isset($_COOKIE["login"])) {
	$email = $_COOKIE["login"];
	$conn = mysqli_connect("localhost", "root", "", "matrimonial");
	if (strlen(trim($_REQUEST["sch"])) > 0) {
		$sch = mysqli_real_escape_string($conn, trim($_REQUEST["sch"]));
		$rs = mysqli_query($conn, "select * from profile where (fname LIKE '%$sch%' OR lname LIKE '%$sch%' OR code='$sch') AND email<>'$email'");
		while ($rec = mysqli_fetch_array($rs)) {

?>

			<div class="profile_top"><a href="view_profile.php?id=<?= $rec["code"] ?>">
					<h2><?= $rec['code'] ?></h2>
					<div class="col-sm-3 profile_left-top">
						<img src="profile/<?= $rec["code"] ?>.jpg" class="img-responsive" alt="<?= $rec["fame"] . " " . $rec["lname"] ?>" />
					</div>
					<div class="col-sm-6">
						<table class="table_working_hours">
							<tbody>
								<tr class="opened_1">
									<td class="day_label1">Name :</td>
									<td class="day_value"><?= $rec["fname"] ?>&nbsp;<?= $rec["lname"] ?></td>
								</tr>
								<tr class="opened">
									<td class="day_label1">Date Of Birth :</td>
									<td class="day_value"><?= $rec['birth'] ?></td>
								</tr>
								<tr class="opened">
									<td class="day_label1">Caste :</td>
									<td class="day_value"><?= $rec['caste'] ?></td>
								</tr>
								<tr class="opened">
									<td class="day_label1">Religion :</td>
									<td class="day_value"><?= $rec['religion'] ?></td>
								</tr>
								<tr class="opened">
									<td class="day_label1">Marital Status :</td>
									<td class="day_value"><?= $rec['status'] ?></td>
								</tr>
								<tr class="opened">
									<td class="day_label1">Location:</td>
									<td class="day_value"><?= $rec['city'] ?>,&nbsp;<?= $rec['state'] ?>,&nbsp;<?= $rec['country'] ?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="clearfix"> </div>
				</a></div>
<?php
		}
	}else{
		header("location:profile.php?data_not=1");
	}
}else{
	header("location:index.php?again=1");
}
?>