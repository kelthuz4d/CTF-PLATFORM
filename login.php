<?php
if(isset($_COOKIE['cookies']))
  echo "<script>alert('you have login');location='index.php';</script>"; 
else
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CTF-2015</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.useso.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="#"></a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class=""><a title="" href="register.php"><i class="icon icon-user"></i> <span class="text">Sign up</span></a></li>
    <li class=""><a title="" href="login.php"><i class="icon icon-user"></i> <span class="text">Sign in</span></a></li>
  </ul>
</div>


<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
  <li class="active"><a href="index.php"> <span>CTF-2015</span></a> </li>
  <li><a href="rules.php"> <span>RULES</span></a> </li>
  <li class="submenu "> <a href="#"> <span>CHALLENGE</span></a>
  <ul>
        <li><a href="basic.php">basic</a></li>
        <li><a href="penetration.php">penetration</a></li>
        <li><a href="reverse.php">reverse</a></li>
        <li><a href="pwn.php">pwn</a></li>
        <li><a href="mis.php">mis</a></li>
      </ul>
  <li><a href="rank.php"> <span>RANK</span></a> </li>
  <li><a href="notice.php"> <span>NOTICE</span></a> </li>
  <li><a href="study-guide.php"> <span>STUDY-GUIDE</span></a> </li>
</li>

  </ul>
</div>



<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
	<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> 
	<a href="#" class="current">LOGIN WIZARD</a> </div>
    
	<h1>Please Login</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>login wizard &amp; validation</h5>
          </div>
          <div class="widget-content nopadding">
            <form id="form-wizard" class="form-horizontal" method="post" action="logincheck.php">
              <div id="form-wizard-1" class="step">
                <div class="control-group">
                  <label class="control-label">Username</label>
                  <div class="controls">
                    <input id="username" type="text" name="username" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Password</label>
                  <div class="controls">
                    <input id="password" type="password" name="password" />
                  </div>
                </div>
                <input id="next" class="btn btn-primary" type="submit" value="Next" />
                <div id="status"></div>
              </div>
              <div id="submitted"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> ctf platform by youmeng <a href="#" ></a> - Collect from <a href="#"></a>NET </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.wizard.js"></script>
</body>
</html>

<? } ?>