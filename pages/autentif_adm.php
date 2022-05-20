<?php
// require('0config.php');

// if (isset($_POST['envoyer'])){
//   $email = $_POST['email'];
//   $psw =  $_POST['psw'];
//     $query = "SELECT * FROM `administrateur` WHERE email='$email' and mot_de_passe='".hash('sha256', $psw)."'";
//   $result = mysqli_query($conn,$query) or die(mysql_error());
//   $rows = mysqli_num_rows($result);
//   if($rows==1){
//       $_SESSION['email'] = $email;
//       header("Location: accueil.php");
//   }else{
//     $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
//     echo $message;
//     echo (hash('sha256', $psw));
//   }
// }
// echo $rows;
?>
<?php
require('0config.php');
session_start();
if (isset($_POST['envoyer']){

    if (isset($_POST['envoyer'])){
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);
        $psw = stripslashes($_REQUEST['psw']);
        $psw = mysqli_real_escape_string($conn, $psw);
          $query = "SELECT * FROM `administrateur` WHERE email='$email' and mot_de_passe='".hash('sha256', $psw)."'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['email'] = $email;
            header("Location: accueil.php?exist=1");
        }else{
          $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
          echo $message;
          
        }
      }
}else{}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <title>ADM autentification</title>
</head>
<body class="body">
    <header>
        <div class="container-fluid">
            <div class="row">
                <header class="col-12 ho">
                    <div>
            <img src="../images/logo/kizerbo_logo-removebg-preview.png"" class="col-12 offset-6 logonn">
                  </div>
                    <div>
                       <p  class="col-12 offset-4 a">Universite <br></p> 
                       <p class="col-12 offset-4 aa"> Joseph ki-Zerbo</p>
                       
                    </div>
                    <div>
                        <img src="../images/logo/4566a087e3b30da9024d888934a7eb36-removebg-preview.png" alt="" class="col-12 offset-11 acx">
                    </div>
                    <div class="horloge">
                        <div class="heures col-11 offset-10 ab"></div>
                        <div class="date col-12 offset-10 ac"></div>
                     </div>  
                </header>
            </div>
        </div>
        
            </header>
            <center>
                <div class="htext pi">
                    Veuillez vous Autentifier ici en tant que administrateur
                </div>
            </center>
            <hr class="hbr">
        <p class="message">
    
        </p>
        <body>






            <!-- css -->
            <style>
                body {font-family: Arial, Helvetica, sans-serif;}
                * {box-sizing: border-box;}
                body{
                    background-image: url(../images/p1/pexels-fwstudio-129731.jpg);
                }
                .pi{
                    margin: 0% 12% 0% 12% !important;
                }
                input[type=text], select, textarea {
                  width: 100%;
                  padding: 12px;
                  border: 1px solid #ccc;
                  border-radius: 4px;
                  box-sizing: border-box;
                  margin-top: 6px;
                  margin-bottom: 16px;
                  resize: vertical;
                }
                input[type=password], select, textarea {
                  width: 100%;
                  padding: 12px;
                  border: 1px solid #ccc;
                  border-radius: 4px;
                  box-sizing: border-box;
                  margin-top: 6px;
                  margin-bottom: 16px;
                  resize: vertical;
                }
                
                input[type=submit] {
                  background-color: #0f55eb;
                  color: white;
                  padding: 12px 20px;
                  border: none;
                  border-radius: 20px;
                  cursor: pointer;
                }
                
                
                input[type=submit]:hover {
                  background-color: #45a049;
                  border-radius: 20px;
                }
                
                .abcx {
                 
                  background-color: rgba(44, 193, 234, 0.463);
                  padding: 20px;
                  border-top-right-radius: 30px;
                  border-bottom-left-radius: 30px;
                  margin-bottom: 5%;
                  width: 60%;
                  margin: 0% 20% 3% 20%;

                }
                .profile{
                    height: 200px;
                    width: 30%;
                    border: solid 3px white;
                    margin: 0% 35% 0% 35%;
                    border-radius: 50%;
                    background-color: #f2f2f2;
                    background-image: url(../images/p1/administrateur-système1.jpg);
                }
               
                .message{
                  text-align : center;
                  font-family : cooper;
                  color : red;
                }
                </style>

<!-- css -->
            <form  class="abcx box" action="" method="post" name="login">
<div class="profile"></div>
    <h3>Connextion administrateur</h3>
    <label for="fname">Email</label>
    <input type="text" id="fname" name="email" placeholder="entrez votre email.." required>

    <label for="lname">Mot de passe</label>
    <input type="password" id="lname" name="psw" placeholder="entrez votre mot de passe" required>

    <input type="submit" name="envoyer" value="Confirmer">
            </form>
        </body>


<!-- php -->
<!-- php -->

<!-- php -->
<!-- php -->



      
   
    <footer>
        <div class="container-fluid">
            <div class="row">
                <footer class="foot">
                    <div>
                        <img src="../images/logo/kizerbo_logo-removebg-preview.png"" class="col-12 offset-2 logonn">
                     </div>
                     <div>
                        <img src="../images/logo/4566a087e3b30da9024d888934a7eb36-removebg-preview.png" alt="" class="col-12 offset-10 acx">
                    </div>
                    <div class="col-2 offset-2 foott">
                        <center>
                        <h3>Nous contacter</h3>
                       
                        <ul>
                            <li>(+226) 70 70 70 70</li>
                            <li>(+226) 60 60 60 60</li>
                            <li>(+226) 20 20 20 13</li>
                            <li>universitékizerbo@gmail.com</li>
                        </ul>
                    </center>
                    </div>
                   
                        <p class="col-2 offset-2 tetars">realiser par Epiphane niada</p>
         
                </footer>

            </div>
        </div>
    </footer>
</body>
<script src="../js/js.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
</html>