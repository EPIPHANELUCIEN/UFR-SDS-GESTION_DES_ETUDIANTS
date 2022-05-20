<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/45e38e596f.js" crossorigin="anonymous"></script>
    <title>Tableau</title>
</head>

<body>
    <style>
        body{
            background-image: url(../images/background/pexels-pixabay-262713.jpg);
        }
        #img {
            height: 100px;
            width: 15%;
            margin-left: 20%;
            margin-top: 2%;
            margin-right: 2%;

        }

        #img2 {
            height: 100px;
            width: 15%;
            margin-right: 20%;
            margin-top: 2%;
            margin-left: 2%;

        }

        .yo {
            display: flex;
        }

        .trai {
            margin: 0% 5% 0% 5%;
            width: 80%;
            margin: 1% 10% 2% 10%;
            border: 2px black;
        }

        .tabl {
            width: 94%;
            margin: 0% 3% 0% 3%;
        }

        .pi {
            margin: 0% 2% 0% 2% !important;
            font-family: "epi1";
            font-size: 35px;

            margin-top: 20px;
        }
        .tab00{
            background-color: rgba(44, 193, 234, 0.463);
            border-top-left-radius: 30px;
            border-bottom-right-radius: 30px;
            margin-bottom: 3%;
        }
    
        .logo{
            height: 25px;
        }
        #imgcentre{
            margin-top: 2%;
        }
        .rech{
            margin-top: 1%;
        }
        i{
            color: black;
        }
        .boro td,th,tr {
            border-bottom: solid 1px black;
        }
       .dada{
           background-color: rgba(255, 0, 0, 0.77);
           height: 100px;
           width: 150px;
           border-radius: 50%;
           border: solid 10px white;
           margin-top: 20px;
           margin-left: 20px;
       }
       .dada a{
           text-decoration: none;
           color: black;
           font-family: "epi3";
           font-size: 20px;
       }
    </style>
    <header>
        <div class="container-fluid">
            <div class="row">
                <header class="col-12 ho">
                    <div>
                        <img src="../images/logo/kizerbo_logo-removebg-preview.png"" class=" col-12 offset-6 logonn ">
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
                <div class="pi">
                    Tableau de la liste des etudiants de ufr sds de l’universite ki-zerbo
                </div>
                <hr class="trai">

                <section class="col-12 tabl tab00">
             
                    <button class="dada"><a href="0decoextion.php">Deconextion</a></button>
                    <table class="table ">
                        <div class="yo">
                            <img src="../images/p2/kizerbo_logo-removebg-preview.png" alt="" id="img">
             <img src="../images/p3/téléchargement (2).jpg" alt="" id="imgcentre">
                            <img src="../images/p2/4566a087e3b30da9024d888934a7eb36-removebg-preview.png" alt=""
                                id="img2">
                        </div>
                      <center class="rech">
                        <form action="/action_page.php">
                            <input type="text" placeholder="Chercher..." name="Chercher">
                            <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                      </center>  

                      <?php
 echo "<div class='boob'>
 <h6 >pour la page d'aceuille cliquer ici <a href='accueil.php'>acceuille</a></h6>
 <h6 >pour ajouter un etudiant cliquer ici <a href='inscrip etudian.php'>+etudiant</a></h6>
 <h6 >pour ajouter un tuteur cliquer ici <a href='inscri tutteur.php'>+tuteur</a></h6>
 

</div>";
?>


                        <section class="boro">
                        <table class="table table-bordered">
                            <thead >
                                <tr>
                                    <th scope="col">Ordre</th>
                                    <th scope="col">Nom</th>
    
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Email</th>
    
                                    <th scope="col">telephone</th>
                                    <th scope="col">Tutteur</th>
    
                                    <th scope="col">Modif</th>
                                    <th scope="col">Sppr</th>
                                </tr>
                            </thead>
                            <tbody class="boro">
                          
<?php
require('0config.php');

$query = " SELECT * FROM etudiant ";
$result = mysqli_query ($conn,$query);
if ($result){
    $id=1;
    while ($data= mysqli_fetch_assoc($result)){


        $query= "SELECT nom,prenom FROM tutu where id = $data[tuteur]";
        $resulto = mysqli_query ($conn,$query);
        $data_t= mysqli_fetch_assoc($resulto);

     echo ' 
       <tr>
       <td>'.$id.'</td>    
       <td>'.$data["nom"].'</td> 
       <td>'.$data["prenom"].'</td>  
       <td>'.$data["email"].'</td>
       <td>'.$data["telephone"].'</td>
       <td>'.$data_t["nom"].'_'.$data_t["prenom"].'</td>
       <td><a href=""><i class="fa fa-pencil"></i></a></td>
       <td id="boy"><i class="fa fa-times-circle"><a href=""></a></i></td>                    
       </tr>
       ';
       $id++; 
    }
   
}
                       
?>


</tbody>
</table>
</section>
</section>




<footer class="col-12">
        <div class="container-fluid">
            <div class="row">
                    <footer class="foot">
                            <div>
                                <img src="../images/logo/kizerbo_logo-removebg-preview.png"" class=" col-12 offset-2
                                        logonn">
                            </div>
                            <div>
                                <img src="../images/logo/4566a087e3b30da9024d888934a7eb36-removebg-preview.png"
                                        alt="" class="col-12 offset-10 acx">
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