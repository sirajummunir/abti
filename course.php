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
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.tabs.setup.js"></script>
</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
    <div id="slidepanel">
      <div class="topbox">
        <h2>Online Registration</h2>
        <p>Please insert your Name,Email,Mobile Number and choose your course name then click Submit Button.</p>
      </div>
      <div class="topbox">
        <h2>User Information</h2>
        <form action="registration.php" method="POST">
            <label>Name:
              <input type="text" name="name" value="" placeholder="Name" required/>
            </label>
            <label>Email:
              <input type="email" name="email" value="" placeholder="Email" required/>
            </label>
			<label>Mobile:
              <input type="text" name="mobile" value="" placeholder="Mobile" required/>
            </label>
      </div>
      <div class="topbox last">
        <h2>Course Information</h2>
            <label>Course name:
              <input type="text" name="coursename" value="" placeholder="Course Name" required/>
            </label>
            <label for="pupilpass">Date:
              <input type="text" name="date" value="" placeholder="dd/mm/yyyy" required/>
            </label>
            <p>
              <input type="submit" name="submit" value="Submit" />
            </p>
        </form>
      </div>
      <br class="clear" />
    </div>
    <div id="loginpanel">
      <ul>
        <li class="left">Online &raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">Registration</a><a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <a href="index.html"><img src="images/DCS_logo.jpg"/><br><h1>  America Bangladesh Training Institute</h1></a>
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
      <li style="float:left"><a href="index.php">Home</a></li>
      <li style="float:left" class="dropdown"><a href="#">About us</a>
		<div style="text-align:center" class="dropdown-content">
			<a href="the_company.php">The Company</a>
			<a href="our_mission.php">Our Mission</a>
			<a href="#">Contact Us</a>
		</div>
	  </li>
      <li style="float:left" class="active"><a href="course.php">Courses</a></li>
      <li style="float:left"><a href="#">Schedule</a></li>
      <li style="float:left"><a href="#">Testing Center</a></li>
      <li style="float:left"><a href="#">Partners</a></li>
      <li style="float:left"><a href="facilities.php">Facilities</a></li>
      <li style="float:left"><a href="#">Activities</a></li>
      <li style="float:left"><a href="#">Registration</a></li>
      <li style="float:left" class="last"><a href="#">Scholarship</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <div style="margin-left:50px;" id="hpage">
      <center><h1><strong>Course Details</strong></h1></center>
	  <p>
	  <strong>Course Name: <br>
			  Network based-
	  </strong><br>

	A+ (Core Hardware & Operating Systems)<br>
	Network + (Data Communication System)<br>
	Professional Networking<br>
	ISP Setup and Administration using Linux<br>
	CCNA<br>
	Windows Server 2008/2012
<br><br>
<strong>Web based-</strong>
<br>
	Web development using PHP with MySQL and Wordpress<br>
	Developing website Using CodeIgniter framework in PHP and Advanced WordPress<br>
	Search Engine Optimization (SEO)<br>
	Web Development using ASP.Net with C#.Net / MVC<br>
	Web design(Advance)

<br><br>
<strong>Design based-</strong><br>
	Graphics design <br>
	AutoCAD 2D and 3D<br>
	3Ds Studio Max
<br><br>
<strong>Application Development Based-</strong><br>
	C#.Net with Crystal Report
<br><br>
<strong>Database-</strong><br>
	SQL Server
<br><br>
<strong>Office Management-</strong> 
<br>
	Microsoft Office-2013<br>
	Advance Excel<br>
	Advance Access 
<br><br>
<strong>Corporate Training</strong> 
<br>

	  </p>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
    <div id="newsletter">
      <h2>Contact</h2>
	  Tel:  8419040, 01841881123-25 <br> Mail: info@abtibd.com

    </div>
    <div class="footicon">
      <a href="#"><img style="width:50px; height:50px;" src="images/linkedin.png"/></a>
    </div>
	<div class="footicon">
      <a href="#"><img style="width:50px; height:50px;" src="images/g.png"/></a>
    </div>
    <div class="footicon">
      <a href="#"><img style="width:50px; height:50px;" src="images/t.png"/></a>
    </div>
	<div class="footicon">
      <a href="https://www.facebook.com/ameriabangladeshTI/?fref=ts"><img style="width:50px; height:50px;" src="images/f.png"/></a>
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