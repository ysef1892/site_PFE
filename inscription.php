<?php
$con = mysqli_connect('localhost', 'root', '', 'test');
$NOM = $_POST['nom'];
$FILIERE = $_POST['fil'];
$CNE = $_POST['cne'];
$EMAIL = $_POST['mail'];
$PWD = $_POST['pass'];
$req = "INSERT INTO etudiants (Nom_cp,filiere,CNE,email,pass) values ('$NOM','$FILIERE','$CNE','$EMAIL','$PWD')";
$res = mysqli_query($con, $req);
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Inscription</title>
     <!-- <link rel="stylesheet" href="/page2.css"> -->
     <style>
          * {
               padding: 0;
               margin: 0;
          }

          body {
               background-image: url("original.jpg");

               background-repeat: no-repeat;
               background-size: cover;
               background-attachment: fixed;
               height: 1000px;

          }

          .iii {
               height: 60px;
               width: 60px;
          }

          .iii:hover {
               cursor: pointer;
          }

          ul {
               background-color: rgb(95, 86, 72);
               height: 60px;
          }


          .rrr {
               height: 500px;
          }

          ul {
               position: sticky;
               top: 0px;
          }


          li {

               color: white;
               padding: 10px;
               margin: 10px;
               width: 60px;
               text-align: center;
               float: right;
               list-style: none;

          }

          .titre2 {
               color: whitesmoke;
               font-family: 'Bebas Neue', cursive;
               font-weight: bolder;
               font-size: 60px;
               position: absolute;
               top: 30%;
          }

          .titre3 {
               color: sienna;
               font-family: 'Bebas Neue', cursive;
               font-weight: bolder;
               font-size: 60px;
               position: absolute;
               top: 45%;
          }

          li:hover {
               cursor: pointer;
               color: darkgoldenrod;
               font-size: 15pt;
          }

          .tit {
               text-align: center;
               background-color: rgb(156, 121, 80);
               border-top-left-radius: 20px;
               border-top-right-radius: 20px;
          }

          .xxx {

               width: 300px;
               height: 400px;
               background-color: rgb(124, 119, 112);
               background-attachment: scroll;
               position: fixed;
               left: 40%;
               top: 25%;
               /* H-shadow | V-shadow | blur | spread | color | Inset */
               box-shadow: 5px 5px 20px 0 rgb(104, 80, 52);
               border-radius: 20px;

          }

          a:first-of-type {
               text-decoration: none;
               color: gray;
          }

          a:first-of-type:hover {
               color: darkgoldenrod;
          }

          label {
               display: block;
               margin: 4px;
               font-family: 'Bebas Neue', cursive;
          }

          header {
               height: 400px;
          }

          .one {

               background-color: aqua;

               width: 40%;
               margin-left: auto;
               margin-right: auto;

          }

          input {
               width: 200px;

               height: 25px;

          }

          div form {
               position: absolute;
               left: 23%;
               top: 23%;
               text-align: center;
          }

          .save {
               background-color: rgb(156, 121, 80);
               width: 120px;
               border: none;
               font-weight: bold;
          }

          h3 {
               text-align: center;
               margin: 20px;
               background-color: saddlebrown;
               border-radius: 20px;

          }

          /* visited is first _ secondly is hover _  */


          .all {
               position: absolute;
               left: 18%;
               top: 15%;
          }

          p {
               font-weight: bold;
               margin-top: 40px;
               margin-left: 20px;
          }

          span {
               color: saddlebrown;

          }
          a:first-of-type{
               color:white;
          }
     </style>
</head>

<body>
     <header class="rrr">
          <ul>
               <a href="/index.php"><img class="iii" src="est.png" alt=""></a>
               <li class="xo1"><a href="mailto:youssef.elmir2016@gmail.com?subject=Demande de cours">Support</a> </li>
               <li class="xo2" onclick="window.location.href='page2.html'">Account</li>
               <li class="xo3">Login</li>
               <li class="xo4"><a href="index.php">Home</a> </li>
          </ul>
     </header>

     <div class="xxx">
          <h3>Merci pour l'inscription!</h3>
          <p><span>Nom:</span> <?php echo ($NOM) ?></p>
          <p><span>Filiere:</span> <?php echo ($FILIERE) ?></p>
          <p><span>CNE :</span> <?php echo ($CNE) ?></p>
          <p><span>Email:</span> <?php echo ($EMAIL) ?></p>
     </div>
     <p></p>


</body>

</html>