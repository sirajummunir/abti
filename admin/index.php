<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Educational
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Abti</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.tabs.setup.js"></script>
</head>
<body>
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <a href="index.html"><br><img src="../images/DCS_logo.jpg"/><br><h1>  America Bangladesh Training Institute</h1></a>
    </div>
    <div class="fl_right">
      <ul>
        <li class="last"><a href="#">Search</a></li>
        <li><a href="#">Online Support</a></li>
        <li><a href="#">School Board</a></li>
      </ul>
      <p>Tel: 8419040 | Mail: info@abtibd.com</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topnav">
    <ul>
      <li style="float:left"><a href="../index.php">Home</a></li>
      <li style="float:left" class="dropdown"><a href="#">About us</a>
		<div style="text-align:center" class="dropdown-content">
			<a href="../the_company.php">The Company</a>
			<a href="../our_mission.php">Our Mission</a>
			<a href="#">Contact Us</a>
		</div>
	  </li>
      <li style="float:left"><a href="../course.php">Courses</a></li>
      <li style="float:left"><a href="#">Schedule</a></li>
      <li style="float:left"><a href="#">Testing Center</a></li>
      <li style="float:left"><a href="#">Partners</a></li>
      <li style="float:left"><a href="../facilities.php">Facilities</a></li>
      <li style="float:left"><a href="#">Activities</a></li>
      <li style="float:left" class="active"><a href="#">Registration</a></li>
      <li style="float:left" class="last"><a href="#">Scholarship</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
		<center>	
			<div>	
				<table border="1" style="width:71%">
					<tr>
					<td colspan="5" style="text-align:center; color:blue; text-shadow: 2px 2px 5px #D5181F;"><h1>Student Registrations View</h1></td>
					</tr>
					<tr>
					<th>Name</th>
					<th>E-Mail</th>
					<th>Mobile No</th>
					<th>Course Name</th>
					<th>Date</th>
					</tr>
				<?php
						require '../connect.php';
						$sql = 'select * from student_registration';
						$result = $connect->query($sql);
						if ($result->num_rows > 0)
						{
							while($row = $result->fetch_assoc())
							{
								echo '<tr>';
								echo '<td>'.$row['name'].'</td>';
								echo '<td>'.$row['email'].'</td>';
								echo '<td>'.$row['mobile'].'</td>';
								echo '<td>'.$row['coursename'].'</td>';
								echo '<td>'.$row['date'].'</td>';
								echo '</tr>';
							}	
						}
						else
						{
							echo '<h2>Did Not Find Any Registrations...</h2>';
						}
					?>
				</table>
			</div>
		</center>	
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
    <div id="newsletter">
      <h2>Contact</h2>
	  Tel: 8419040, 01841881123-25 <br> Mail: info@abtibd.com

    </div>
    <div class="footicon">
      <a href="#"><img style="width:50px; height:50px;" src="../images/linkedin.png"/></a>
    </div>
	<div class="footicon">
      <a href="#"><img style="width:50px; height:50px;" src="../images/g.png"/></a>
    </div>
    <div class="footicon">
      <a href="#"><img style="width:50px; height:50px;" src="../images/t.png"/></a>
    </div>
	<div class="footicon">
      <a href="https://www.facebook.com/ameriabangladeshTI/?fref=ts"><img style="width:50px; height:50px;" src="../images/f.png"/></a>
    </div>
    <div class="footbox">
      <h2>Address</h2>
		Ka-54/1(7th Floor) Progati Sarani, Baridhara-Nadda, Dhaka - 1216
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Abti</a></p>
    <p class="fl_right">Design & Developed by :<a target="_blank" href="http://facebook.com/sojib22" title="">Sirajum Munir Sojib</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>