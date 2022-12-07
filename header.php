<?php
session_start();
?>


<h1 align="center" style="background-color: #171717; margin: 0; padding: 0; color: white;"><span style="border-bottom: solid; border-radius: 5px;"><b>PAROUSIA MINISTRIES INTERNATIONAL </b></span> <br> ..(PMI)..</h1>

<div id="header">
<div id="headinfo">
	<h3 style="color: white;">P.M.I</h3>
</div>

<div class="searchbox">
    <form action = <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> method="get" class="src">
            <input type="text" name="src" value="">
            <input type="submit" name="s_sub" value="SEARCH">
        </form>
</div>

    <div id="navigation" align="rignt" >
		<ul align="right">
		  <li><a href="index.php">Home</a></li>

		  <?php
		  if(!isset($_SESSION['id'])){
			echo '<li><a href="Login.php">Login</a></li>';
		  }else {
			echo '<li>';
			switch ($_SESSION['sex']) {
				case 'm':
					echo "<p style=\"color: white;\">Mr.".$_SESSION['fname']."</p>";
					break;
				
				case 'f':
					echo "<p style=\"color: white;\">Mrs.".$_SESSION['fname']."</p>";
					break;
				
				default:
					echo "<p style=\"color: white;\">".$_SESSION['fname']."</p>";
					break;
			}
				echo '<a href="Logout.php">Logout</a></li>';
			} 
		  ?>
		</ul>
	</div>
</div>
