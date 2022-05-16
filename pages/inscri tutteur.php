<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <title>Inscr Tutteur</title>
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
        Veuillez remplir le formulaire ci-dessous pour inscrir un Tutteur
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
                background-image: url(../images/p4/pexels-pixabay-235985.jpg);
            }

            .pi {
          
                font-family: "epi1";
                font-size: 35px;
                margin: 0% 2% 0% 2%;
                margin-top: 20px;
                color: white;
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
                height: 200px;
                width: 30%;
                border: solid 3px white;
                margin: 0% 35% 0% 35%;

                background-color: #f2f2f2;
                background-image: url(../images/p4/images\ \(2\).png);
            }
        </style>
        <!-- css -->
        <form action="" class="abcx">
            <div class="profile"></div>
            <h3>Inscription Tutteur</h3>
            <form action="/action_page.php">
                <label for="fname">Email</label>
                <input type="text" id="fname" name="firstname" placeholder="entrez nom..." required>

                <label for="lname">Prenom</label>
                <input type="text" id="lname" name="lastname" placeholder="entrez prenom..." required>
                <label for="lname">Numero tutteur</label>
                <input type="text" id="lname" name="lastname" placeholder="entrez numero..." required>

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