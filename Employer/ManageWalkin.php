<?php
session_start();
if (isset($_SESSION['$UserName_emp'])) {
} else {
	header('location:../index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="cs" />

	<title>Manage Walkin - JOB PORTAL</title>

	<link rel="index" href="./" title="Home" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
	<link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
	<style type="text/css">
		.style3 {
			font-weight: bold
		}
	</style>
</head>

<body>
	<!-- Main -->
	<div id="main" class="box">
		<?php
		include "Header.php"
		?>
		<?php
		include "menu.php"
		?>
		<!-- Page (2 columns) -->
		<div id="page" class="box">
			<div id="page-in" class="box">
				<!-- Content -->
				<div id="content">
					<!-- Article -->
					<div class="article">
						<h2><span><a href="#">Welcome <?php echo $_SESSION['Name']; ?></a></span></h2>


						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td bgcolor="#A0B9F3"><strong>Manage Walkin</strong></td>
							</tr>
							<tr>
								<td>
									<form id="form1" method="post" action="InsertWalkin.php">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td><strong>Job Title:</strong></td>
												<td>
													<label>
														<input type="text" name="txtTitle" id="txtTitle" />
													</label>
													<span class="textfieldRequiredMsg">A value is required.</span>
												</td>
											</tr>
											<tr>
												<td><strong>Total Vacancy:</strong></td>
												<td>
													<label>
														<input type="number" name="txtTotal" id="txtTotal" />
													</label>
													<span class="textfieldRequiredMsg">A value is required.</span>
												</td>
											</tr>
											<tr>
												<td><strong>Qualification:</strong></td>
												<td><input type="text" name="cmbQual" id="cmbQual">

												</td>
											</tr>
											<tr>
												<td><strong>Salary:</strong></td>
												<td><label>
														<input type="number" name="txtOther" id="txtOther" />
													</label></td>
											</tr>
											<tr>
												<td><strong>Description:</strong></td>
												<td>
													<label>
														<textarea name="txtDesc" id="txtDesc" cols="25" rows="3"></textarea>
													</label>
													<span class="textareaRequiredMsg">A value is required.</span>
												</td>
											</tr>
											<tr>
												<td><strong>Interview Date:</strong></td>
												<td>
													<label>
														<input type="date" name="txtDate" id="txtDate" />
													</label>
													<span class="textfieldRequiredMsg">A value is required.</span>
												</td>
											</tr>
											<tr>
												<td><strong>Interview Time:</strong></td>
												<td>
													<label>
														<input type="text" name="txtTime" id="txtTime" />
													</label>
													<span class="textfieldRequiredMsg">A value is required.</span>
												</td>
											</tr>
											<tr>
												<td>&nbsp;</td>
												<td><label>
														<input type="submit" name="button" id="button" value="Submit" />
													</label></td>
											</tr>
										</table>
									</form>
								</td>
							</tr>
							<tr>
								<td bgcolor="#A0B9F3"><strong>Posted Walkin </strong></td>
							</tr>
							<tr>
								<td>
									<table width="100%" border="1" bordercolor="#1CB5F1">
										<tr>
											<th height="32" bgcolor="#1CB5F1" class="style3">
												<div align="left" class="style9 style5"><strong>Id</strong></div>
											</th>
											<th bgcolor="#1CB5F1" class="style3">
												<div align="left" class="style9 style5"><strong>Job Title</strong></div>
											</th>
											<th bgcolor="#1CB5F1" class="style3">
												<div align="left" class="style9 style5"><strong>Vacancy</strong></div>
											</th>
											<th bgcolor="#1CB5F1" class="style3">
												<div align="left" class="style9 style5"><strong>Qualification</strong></div>
											</th>
											<th bgcolor="#1CB5F1" class="style3">
												<div align="left" class="style9 style5"><strong>Description</strong></div>
											</th>
											<th bgcolor="#1CB5F1" class="style3">
												<div align="left" class="style9 style5"><strong>Date</strong></div>
											</th>
											<th bgcolor="#1CB5F1" class="style3">
												<div align="left" class="style9 style5"><strong>Time</strong></div>
											</th>
											<th bgcolor="#1CB5F1" class="style3">
												<div align="left" class="style12">Delete</div>
											</th>
										</tr>
										<?php
										// Establish Connection with Database
										$con = mysqli_connect("localhost", "gokul", "Gokul0309", "job");

										// Specify the query to execute
										$sql = "select * from walkin_master where CompanyName='" . $_SESSION['Name'] . "'";
										// Execute query
										$result = mysqli_query($con, $sql);
										// Loop through each records 
										while ($row = mysqli_fetch_array($result)) {
											$Id = $row['WalkInId'];
											$JobTitle = $row['JobTitle'];
											$Vacancy = $row['Vacancy'];
											$MinQualification = $row['MinQualification'];
											$Description = $row['Description'];
											$InterviewDate = $row['InterviewDate'];
											$InterviewTime = $row['InterviewTime'];

										?>
											<tr>
												<td class="style3">
													<div align="left" class="style9 style5"><strong><?php echo $Id; ?></strong></div>
												</td>
												<td class="style3">
													<div align="left" class="style9 style5"><strong><?php echo $JobTitle; ?></strong></div>
												</td>
												<td class="style3">
													<div align="left" class="style9 style5"><strong><?php echo $Vacancy; ?></strong></div>
												</td>
												<td class="style3">
													<div align="left" class="style9 style5"><strong><?php echo $MinQualification; ?></strong></div>
												</td>
												<td class="style3">
													<div align="left" class="style9 style5"><strong><?php echo $Description; ?></strong></div>
												</td>
												<td class="style3">
													<div align="left" class="style9 style5"><strong><?php echo $InterviewDate; ?></strong></div>
												</td>
												<td class="style3">
													<div align="left" class="style9 style5"><strong><?php echo $InterviewTime; ?></strong></div>
												</td>

												<td class="style3">
													<div align="left" class="style9 style5"><strong><a href="DeleteWalkin.php?WalkinId=<?php echo $Id; ?>">Delete</a></strong></div>
												</td>
											</tr>
										<?php
										}
										// Retrieve Number of records returned
										$records = mysqli_num_rows($result);
										?>
										<tr>
											<td colspan="8" class="style3">
												<div align="left" class="style12"><?php echo "Total " . $records . " Records"; ?> </div>
											</td>
										</tr>
										<?php
										// Close the connection
										mysqli_close($con);
										?>
									</table>
								</td>
							</tr>
						</table>
						<p>&nbsp;</p>

						<p class="btn-more box noprint">&nbsp;</p>
					</div> <!-- /article -->
				</div> <!-- /content -->

				<?php
				include "right.php"
				?>

			</div> <!-- /page-in -->
		</div> <!-- /page -->


		<?php
		include "footer.php"
		?>
	</div> <!-- /main -->
</body>

</html>