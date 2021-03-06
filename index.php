<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require('config.php');

?>

<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- add the jQuery script -->
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>	
    <!-- add the jQWidgets framework -->
    <script type="text/javascript" src="js/jqwidgets/jqxcore.js"></script>

    <link rel="stylesheet" href="styles/normalize.css" type="text/css" />
    <link rel="stylesheet" href="styles/foundation.css?v=1" type="text/css" />
    <link rel="stylesheet" href="styles/hamburger.css?v=1" type="text/css" />

    <!-- add the jQWidgets base styles and one of the theme stylesheets -->
    <link rel="stylesheet" href="js/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="js/jqwidgets/styles/jqx.darkblue.css" type="text/css" />

    <!-- add one or more widgets -->
    <script type="text/javascript" src="js/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="js/jqwidgets/jqxslider.js"></script>
    <script type="text/javascript" src="js/jqwidgets/jqxwindow.js"></script>
    <script type="text/javascript" src="js/jqwidgets/jqxinput.js"></script>
    <script type="text/javascript" src="js/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="js/jqwidgets/jqxdraw.js"></script>
    <script type="text/javascript" src="js/jqwidgets/jqxsortable.js"></script>
    <script type="text/javascript" src="js/jqwidgets/jqxchart.core.js"></script>

    <script type="text/javascript" src="js/jqwidgets/jqxtooltip.js"></script>
    <script type="text/javascript" src="js/jqwidgets/jqxbulletchart.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
	<link href="fonts/dmt/styles.css?v=1" rel="stylesheet">
	
	<link href="app.css?<?php print(rand()); ?>" rel="stylesheet">


    <script type="text/javascript" src="js/velocity.js"></script>
    <script type="text/javascript" src="js/velocity.ui.js"></script>

<!--  CUSTOM CSS, inline for testing, will be in its own file later -->


</head>


<body>
<header id="header">
     <div class="row">
	<div class="small-12 medium-12 large-12 columns">
	   <div id="header-content">
		<h1>Divide My Time!</h1>
			<button id="menu-icon" class="hamburger hamburger--3dx" type="button">
  			<span class="hamburger-box">
			<span class="hamburger-inner"></span>
			</span>
			</button>
	   </div>
	</div>
</header>


<div id="mySidenav" class="sidenav">
  <a href="#" onclick="loginUserEmail()">Login</a>
  <div id="login-form">
	<form id="email-login-form" action="api.php">
		<input type="text" id="loginEmail" name="loginEmail" value = "student@email.com" />
		<input type="text" id="loginPassword" name="loginPassword" value = "password" />
		<input type="button" id="btnLoginEmail" value="Go" />
	</form>
  </div>
  <a href="#" onclick="restartSession(); window.location.href.split('#')[0];">Restart session</a> 
  <a href="#">Something else?</a>
  <a href="#">Help</a>
</div>



<div id="canvas">
  <div class="row">
     <div class="small-12 medium-12 large-12 columns">
	<div id="app">
	  <div id="step-1" class="page">
	   <div class="padded-bigscreen padded-vert">
		<h2 class="numberCircle"><div>1</div>Session name<i>This is optional</i></h2>
		<input type="text" style="width: 275px; border: 1px solid #aaa" id="inputSessionName" value=""/>
		<input type="button" value="Let's Start!" id='btnSubmitSessionName'/>
	   </div>
	  </div>

	  <div id="step-2" class="page">
	   <div class="padded-bigscreen">
		<h2 class="numberCircle"><div>2</div>How many hours do you have?<i>Move slider across to the nearest half hour</i></h2>
		<div id='sliderHours'></div>
		<div class="padded-bigscreen padded-vert text-center">
		   <input type="button" value="Next: Add the tasks" id='btnGoToAddTasksPage'/>
		</div>
	   </div>
	  </div>

	  <div id="step-3" class="page">
	   <div class="padded-bigscreen">
		<h2 class="numberCircle"><div>3</div>Add your tasks<i>Re-order tasks by priority, 1 being highest</i></h2>
		<ul id="task-list-container">

		</ul>
		<input type="text" style="width: 275px; border: 1px solid #aaa" id="inputAddTask" />
		<input type="button" value="Add Task" id='btnaddTask'/>
		<div style="height:20px"></div>
	   </div>
	  </div>

	  <div id="step-4" class="page">
	   <div class="padded-bigscreen">
		<h2 class="numberCircle"><div>4</div>Task progress<i>Some more description here</i></h2>
		<div id="task-progression-chart"></div>
	   </div>
	  </div>

	</div>
     </div>
  </div>

</div>

<footer id="footer">
     <div class="row">
	<div class="small-12 medium-12 large-12 columns">
	   <div id="footer-content">
		<div id="timer-controls">
			<input type="button" value="h" id='btntimerStartPause'/>
			<input type="button" value="s" id='btntimerRestart'/>
			<input type="button" value="a" id='btntimerNewSession'/>
		</div>
		
	   </div>
	</div>
     </div>
</footer>

</body>
</html>

<script type="text/javascript" src="dmt.js?<?php print(rand()); ?>"></script>
