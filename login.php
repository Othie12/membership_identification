<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMI LOGIN</title>
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

		<label for="id_no">ID NUMBER:</label><br>
	 <input type="text" name="id_no" placeholder="eg, PMI0000001"><br><br>	
    
		<label for="pwd">PASSWORD:</label><br>
	 <input type="password" name="pwd"><br><br>

     <input type="submit" class="submit" name="login" value="LOGIN">
</form>
</main>

    <footer>
        <?php include "footer.php"?>
    </footer>

</body>
</html>