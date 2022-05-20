<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <title>Inscr Etudiant</title>
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

    </header>
    <div class="htext pi">
        Veuillez remplir le formulaire ci-dessous pour inscrir un Etudiant
    </div>

    <body>
        <!-- css -->
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            * {
                box-sizing: border-box;
            }

            body {
                background-image: url(../images/p5/pexels-henry-&-co-1939485.jpg);
            }

            .pi {

                font-family: "epi1";
                font-size: 35px;
                margin: 0% 2% 0% 2%;
                margin-top: 20px;
                color: black;
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
            input[type=date],
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




            select[type=text],
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
            #tutu{
                width: 85% !important;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }
.tutu1{
    width: 20% !important;
    margin-left: 5%;
    border: 1px solid #ccc;
    margin-top: 6px;
                margin-bottom: 16px;
                border-radius: 30px;
}
.tutu1 :hover{
    width: 20% !important;
    margin-left: 5%;
    border: 1px solid rgba(54, 13, 235, 0.771);
    margin-top: 6px;
                margin-bottom: 16px;
                border-radius: 30px;
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
                width: 40%;
                border: solid 3px white;
                margin: 0% 5% 0% 5%;
                background-color: #f2f2f2;
                background-image: url(../images/p5/pexels-henry-&-co-1939485.jpg);
            }

            .etdfor {
                display: flex;
            }
            .etdfor input{
                width: 75%;
            }
            .yo {
            display: flex;
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
        </style>
        <!-- css -->
<!-- php -->
<!-- php -->

<?php
require('0config.php');
if (isset($_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['date'], $_REQUEST['telephone'], $_REQUEST['email'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $nom = stripslashes($_REQUEST['nom']);
  $nom = mysqli_real_escape_string($conn, $nom); 
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $prenom = stripslashes($_REQUEST['prenom']);
  $prenom = mysqli_real_escape_string($conn, $prenom);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $date = stripslashes($_REQUEST['date']);
  $date = mysqli_real_escape_string($conn, $date);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $telephone = stripslashes($_REQUEST['telephone']);
  $telephone = mysqli_real_escape_string($conn, $telephone);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $nom_t = stripslashes($_REQUEST['tutor']);
  $nom_t= mysqli_real_escape_string($conn, $nom_t); 
 
  //requéte SQL + mot de passe crypté
    $query = "INSERT into `etudiant` (nom, prenom,date_de_naissance, telephone, email,tuteur)
              VALUES ('$nom', '$prenom', '$date', '$telephone', '$email','$nom_t')";
  // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous avez inscrit un etudiant avec succès.</h3>
             <p>Cliquez ici pour voir la liste <a href='liste ufr.php'>connecter</a></p>
       </div>";
       echo  " <script> alert('Inscription reussit avec succes'); </script> ";
    }
}else{}
?>
<!-- php -->
<!-- php -->
<?php
 echo "<div class='boob'>
 <h3 >pour voir la liste cliquer ici <a href='liste ufr.php'>connecter</a></h3>
 <h3 >pour la page d'aceuille cliquer ici <a href='accueil.php'>connecter</a></h3>

</div>";
?>

        <form action="" class="abcx" method="post">
            <div class="yo">
                <img src="../images/p2/kizerbo_logo-removebg-preview.png" alt="" id="img">
                <img src="../images/p5/10210manstudentmediumdarkskintone_110635.jpg" alt="" class="profile">
                <img src="../images/p2/4566a087e3b30da9024d888934a7eb36-removebg-preview.png" alt="" id="img2">
            </div>

            <h3>Inscription Etudiant</h3>
         
               <label for="lname">Nom etudiant</label>
                <input type="text" id="lname" name="nom" placeholder="entrez nom..." required>
                <label for="lname">Prenom etudiant</label>
                <input type="text" id="lname" name="prenom" placeholder="entrez prenom..." required>
                <label for="date">Date de naissance etudiant</label>
                <input type="date" id="lname" name="date" placeholder="Date..." required>
                <label for="lname">Numero etudiant</label>
                <input type="text" id="lname" name="telephone" placeholder="numero..." required>
                <label for="lname">Email de l'etudiant</label>
                <input type="text" id="lname" name="email" placeholder="entrez email..." required>
                <label for="lname">Tutteur responsable </label>
                <div class="etdfor">
                    <?php
                    $query_tutors = "SELECT * FROM tutu";
                    $result_tutors =mysqli_query ($conn, $query_tutors)
                    ?>
                    <select id="country" name="tutor" type="select">
                        <?php
                        while ($row=mysqli_fetch_assoc ($result_tutors)){
                            echo "<option>$row[nom]</option>";
                        }
                        ?>
                        
                      
                      </select>
                   
                    <button class="tutu1"><a href="inscri tutteur.php"> Ajouter </a></button>

                </div>
                <input type="submit" value="inscrire">
            </form>
    </body>




    <footer>
        <div class="container-fluid">
            <div class="row">
                <footer class="foot">
                    <div>
                        <img src="../images/logo/kizerbo_logo-removebg-preview.png"" class=" col-12 offset-2 logonn">
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