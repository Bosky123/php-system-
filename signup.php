<!DOCTYPE html>
<html>
<head>
	<title>Registrace</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>Registrace</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Jméno</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Jméno"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Jméno"><br>
          <?php }?>

          <label>Uživatelské jméno</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Uživatelské jméno"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Uživatelské jméno"><br>
          <?php }?>


     	<label>Heslo</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Heslo"><br>

          <label>Heslo znovu</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Heslo znovu"><br>

     	<button type="submit">Registrace</button>
          <a href="index.php" class="ca">Máš již účet?</a>
     </form>
</body>
</html>