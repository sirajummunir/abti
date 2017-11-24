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
      <li style="float:left" class="active"><a href="index.php">Home</a></li>
      <li style="float:left" class="dropdown"><a href="#">About us</a>
		<div style="text-align:center" class="dropdown-content">
			<a href="the_company.php">The Company</a>
			<a href="our_mission.php">Our Mission</a>
			<a href="#">Contact Us</a>
		</div>
	  </li>
      <li style="float:left"><a href="course.php">Courses</a></li>
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
<div class="wrapper col3">
  <div id="featured_slide">
    <div id="featured_wrap">
      <ul style="width:hide;" id="featured_tabs">
        <li><a href="#fc1"><br /></a></li>
        <li><a href="#fc2"><br /></a></li>
        <li><a href="#fc3"><br /></a></li>
        <li class="last"><a href="#fc4"><br /></a></li>
      </ul>
      <div id="featured_content">
        <div class="featured_box" id="fc1"><img src="images/img1.png" alt="" />
        </div>
        <div class="featured_box" id="fc2"><img src="images/img2.jpg" alt="" />
        </div>
        <div class="featured_box" id="fc3"><img src="images/img3.jpg" alt="" />
        </div>
        <div class="featured_box" id="fc4"><img src="images/img4.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <div id="hpage">
      <ul>
        <li>
          <center><h2>Courses</h2></center>
          <div class="imgholder"><a href="#"><img src="images/course.jpg" alt="" /></a></div>
          <p>Network based<br>Web based<br>Design based<br>Application Development Based<br>Database<br>Office Management<br>Corporate Training</p>
          <p class="readmore"><a href="course.html">Continue Reading &raquo;</a></p>
        </li>
        <li>
          <center><h2>Events</h2></center>
          <div class="imgholder"><a href="#"><img src="images/upcomingevents.jpg" alt="" /></a></div>
          <p></p>
        </li>
        <li>
          <center><h2>Facilities</h2></center>
          <div class="imgholder"><a href="#"><img src="images/facility.png" alt="" /></a></div>
          <p>Learning room environment.<br>Attractive computer lab.<br>UPS backup with each computer.<br>All time internet facility.<br>High configured computers.<br>Multimedia projector.<br>3660 Cisco Router used for CCNA students.</p>
          <p class="readmore"><a href="facilities.html">Continue Reading &raquo;</a></p>
        </li>
        <li class="last">
          <center><h2>Notice</h2></center>
          <div class="imgholder"><a href="#"><img src="images/notice.jpg" alt="" /></a></div>
          <p></p>
        </li>
      </ul>
      <br class="clear" />
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