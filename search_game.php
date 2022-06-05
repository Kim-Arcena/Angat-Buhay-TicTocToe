<?php
session_start();
// store session data
$_SESSION['user']=$_GET["fname"];
$_SESSION['enter']=1;
$_SESSION["lastActiveTime"] = time();
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
			
	    <script type="text/javascript" src="js/user.js">
	    </script>
	    
	    <script type="text/javascript">
		
		function redirect_to_home()
		{

		    window.location="index.php";
		    
		}
		</script>
	</head>

	<body onLoad="javascript:sndReq2();">

		<div class="header" id="header"><h1>Welcome <?php echo $_GET["fname"]; ?></h1></div>		
		
		<div class="container" id="container">
					
			<?php if ($_SESSION['enter']=1) 
					{echo '<script type="text/javascript">', 'reset_invites();', '</script>'; $_SESSION['enter']=2;} ?>
			
			<!-- Your session is <?php print_r(array_values($_SESSION)); ?> <br> -->
			
			<div class="menu" id="menu">
				<b>Menu</b><br>
				<div class="menu-container">
					<form> 
						<button id="home-page" type="submit" onclick="redirect_to_home(); return false;">Home</button>
					</form>	
					<form> 
						<button id="user-play" type="submit" onclick="showUser('playing'); return false;">Online</button>
					</form>
					<br>
					<form> 
						<button id="user-avail" type="submit" onclick="showUser('available'); return false;">Find Opponent</button>
					</form>
					<br>
					<form> 
						<button id="user-history" type="submit" onclick="showUser('history'); return false;">history</button>
					</form>			
				</div>
			</div>
			<div class="content" id="content">
				
				<div id="txtHint"><b></b></div>
				<div id="messages"></div>
				<div id="messages2"></div>
				
				<div id="messages3"></div>
				<div id="messages4"></div>
				<div id="clockmain"></div>
				<div id="clockinvite"></div>
				<div id="clockgame"></div>
				<div id="clocksession"></div>
				<div id="sessionblock"></div>
			</div>			
		</div>
	</body>
</html>