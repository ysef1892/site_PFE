
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="index.css">

</head>

<body>
  <header class="rrr">

    <ul id="ul1">
      <a href="/index.php"><img class="iii" src="est.png" alt=""></a>
      <li class="xo1"><a href="mailto:youssef.elmir2016@gmail.com?subject=Demande de cours">Support</a> </li>
      <li class="xo2" onclick="window.location.href='page2.html'">Account</li>
      <li class="xo3">Login</li>
      <li class="xo4"><a href="index.php">Home</a> </li>
    </ul>
  </header>


  <div class="xxx">
    <h1>Connexion</h1>
    <form class="all" method="post" action="/login.php">
      
      <label for="email" id="em">Email</label>
      <input type="email" placeholder="Email" id="email" name="mail" class="inpt" required>
      <label for="pass" id="ps">Password</label>
      <input type="password" name="pass" id="pass" placeholder="password" required>
      <input type="submit" value="Se connecter" class="sub" >
  
    </form>
    <?php if(isset($_GET ['error'])){ ?>
        <label id="error"><?php echo $_GET['error']; ?></label>
      <?php }?>
  </div>
  <h1 class="titre">WE ARE HERE TO <span>HELP</span> YOU</h1>



</body>

</html>
