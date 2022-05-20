<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <title>Adm inscription</title>
</head>

<body>

    <header>
        <div class="container-fluid">
            <div class="row">
                <header class="col-12 ho">
                    <div>
                        <img src="../images/logo/kizerbo_logo-removebg-preview.png"" class=" col-12 offset-6 logonn">
                    </div>
                    <div>
                        <p class="col-12 offset-4 a">Universite <br></p>
                        <p class="col-12 offset-4 aa"> Joseph ki-Zerbo</p>

                    </div>
                    <div>
                        <img src="../images/logo/4566a087e3b30da9024d888934a7eb36-removebg-preview.png" alt=""
                            class="col-12 offset-11 acx">
                    </div>
                    <div class="horloge">
                        <div class="heures col-11 offset-10 ab"></div>
                        <div class="date col-12 offset-10 ac"></div>
                    </div>
                </header>
            </div>
        </div>

        <center>
            <div class="htext pi">
                Espace administrateur
            </div>
        </center>
        <hr class="hbr">
    </header>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .pi {
            margin: 0% 1% 0% 1% !important;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=password],
        select,
        textarea {
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

        .profile {
            height: 175px;
            width: 100%;
            border: solid 6px white;
            margin: 0% 10% 0% 10%;
            background-color: #f2f2f2;
            background-image: url(../images/p2/téléchargement\ \(4\).jpg);
        }

        #img {
            height: 100px;
            width: 15%;
            margin-left: 10%;
            margin-top: 10%;

        }

        #img2 {
            height: 100px;
            width: 15%;
            margin-right: 10%;
            margin-top: 10%;

        }

        .yo {
            display: flex;
        }

        body {
            background-image: url(../images/background/1\ \(2\).jpg);
        }
        .bbtt{
     
            padding: 12px;
            border: 1px solid rgb(19, 49, 242);
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        .bbtt a{
     
            text-decoration: none;
        }
    </style>

<!-- php -->
<!-- php -->
<?php
require('0config.php');
if (isset($_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['email'], $_REQUEST['psw'], $_REQUEST['pswa'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $nom = stripslashes($_REQUEST['nom']);
  $nom = mysqli_real_escape_string($conn, $nom); 
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $prenom = stripslashes($_REQUEST['prenom']);
  $prenom = mysqli_real_escape_string($conn, $prenom);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $psw = stripslashes($_REQUEST['psw']);
  $psw = mysqli_real_escape_string($conn, $psw);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $pswa = stripslashes($_REQUEST['pswa']);
  $pswa = mysqli_real_escape_string($conn, $pswa);
  //requéte SQL + mot de passe crypté
    $query = "INSERT into `administrateur` (nom, prenom, email, mot_de_passe, confirmer_mot_de_passe)
              VALUES ('$nom', '$prenom', '$email','".hash('sha256', $psw)."', '".hash('sha256', $pswa)."')";
  // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='autentif_adm.php'>connecter</a></p>
       </div>";
       echo  " <script> alert('Inscription reussit avec succes'); </script> ";
    }
}else{}
?>
<!-- php -->
<!-- php -->



    <form action="" method="post" class="abcx">

        <div class="yo">
            <img src="../images/p2/kizerbo_logo-removebg-preview.png" alt="" id="img">
            <div class="profile"></div>
            <img src="../images/p2/4566a087e3b30da9024d888934a7eb36-removebg-preview.png" alt="" id="img2">
        </div>
        <h3>Inscription administrateur</h3>
        <form action="/action_page.php">
            <label for="fname">Nom</label>
            <input type="text" id="fname" name="nom" placeholder="entrez votre nom.." required>
            <label for="fname">Prenom</label>
            <input type="text" id="fname" name="prenom" placeholder="entrez votre prenom.." required>
            <label for="fname">Email</label>
            <input type="text" id="fname" name="email" placeholder="entrez votre email.." required>
            <label for="lname">Mot de passe</label>
            <input type="password" id="lname" name="psw" placeholder="entrez votre mot de passe" required>
            <label for="lname">Comfirmer mot de passe</label>
            <input type="password" id="lname" name="pswa" placeholder="entrez votre mot de passe" required>

            <input type="submit" name="envoyer" value="Inscrire">
          
            <button class="bbtt">
                <a href="autentif_adm.php">Se connecter</a>
            </button>
        </form>

        <footer>
            <div class="container-fluid">
                <div class="row">
                    <footer class="foot">
                        <div>
                            <img src="../images/logo/kizerbo_logo-removebg-preview.png"" class=" col-12 offset-2
                                logonn">
                        </div>
                        <div>
                            <img src="../images/logo/4566a087e3b30da9024d888934a7eb36-removebg-preview.png" alt=""
                                class="col-12 offset-10 acx">
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