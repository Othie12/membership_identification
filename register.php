<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMI REGISTER</title>
    <link rel="stylesheet" href="pmi.css">
</head>
<body>

    <header>
        <?php include "header.php" ?>
    </header>

<main style="padding: 2vw;">

<form class="donor" method="post" action="insertion.php">

        <?php if (isset($_GET['error'])) { ?>
        <h3 class="error"><?php echo $_GET['error']; ?></h3>
        <?php } ?>


        <label for="fname">FIRST NAME:</label><br>
	 <input type="text" name="fname" placeholder="eg, Kimera" required><br><br>	
    
        <label for="mname">MIDDLE NAME:</label><br>
	 <input type="text" name="mname" placeholder="eg, John"><br><br>	
    
		<label for="name">LAST NAME:</label><br>
	 <input type="text" name="lname" placeholder="eg, Bosco" required><br><br>	

		<label for="gender">GENDER:</label><br>
	 <input type="radio" name="gender" style="width:20px;" required value="m">MALE
	 <input type="radio" name="gender" style="width:20px;" required value="f">FEMALE<br><br>	

        <label for="dob">D.O.B:</label><br>
     <input type="date" name="dob" id="dob" required><br><br>

        <label for="chrch">CHURCH:</label><br>
     <input type="text" name="chrch" id="chrch" ><br><br>

        <label for="country">COUNTRY:</label><br>
     <input type="text" name="country" id="country" required><br><br>

		<label for="post">POST:</label><br>
	 <select name="post" required>
		<option value="swimming">Swimming</option>
		<option value="eating" >Eating</option>
		<option value="sleeping" >Sleeping</option>
		<option value="dancing" >Dancing</option>
		<option value="football" >Football</option>
		<option value="sex" >Sex</option>
		</select><br><br>

		<label for="tel">CONTACT:</label><br>
	 <input type="tel" name="tel" placeholder="+256*******" required><br><br>
    
		<label for="email">EMAIL:</label><br>
	 <input type="email" name="email" placeholder="me@gmail.com"><br><br>
    
        <label for="pwd">PASSWORD(4 to 6 characters):</label><br>
     <input type="password" name="pwd" id="pwd" placeholder="Any password they won't forget" minlength="4" maxlength="6"><br><br>
    
        <label for="pwdr">REPEAT PASSWORD:</label><br>
     <input type="password" name="pwdr" id="pwdr" placeholder="Repeat that password again" minlength="4" maxlength="6"><br>

     <input type="submit" class="submit" name="regsub" value="SUBMIT">
</form>
</main>

    <footer>
        <?php include "footer.php"?>
    </footer>

</body>
</html>