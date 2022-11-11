<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sporten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>

    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
    />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark">HCHDS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="inloggen.php">Aanmelden</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="hockeyspullen.php">Hockeyspullen toevoegen</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<div>
    <img src="img/2022%20HDS%20Jongens.png" alt="" width="100%">
</div>
<br>

<div class="text-center">
    <?php


    $todayDate = date("H");

    if ($todayDate >= 6 && $todayDate < 12) {

        echo " <h1>Goedenmorgen, welkom bij HCHDS<h1/>";
    } else if ($todayDate >= 12 && $todayDate < 18) {

        echo "<h1>Goedenmiddag, welkom bij HCHDS<h1/>";
    } else if ($todayDate >= 18 && $todayDate < 24) {

        echo "<h1>Goedenavond, welkom bij HCHDS<h1/>";
    }


    ?>
    <br>
    <br>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
            <div class="card" style="width: 38rem;">
                <a href="onzeclub.php"><img src="img/2022%20HDS%20Clubhuis.png" class="card-img-top" alt="..." width="100%"></a>
                <div class="card-body">
                    <h5 class="card-title">Dit is onze club!</h5>


                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
            <div class="card" style="width: 38rem;">
                <a href="inloggen.php"><img src="img/2022%20HDS%20Keeper.png" class="card-img-top" alt="..." width="100%"></a>
                <div class="card-body">
                    <h5 class="card-title">Direct Aanmelden?</h5>

                </div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="container-fluid">

    <footer class="bg-info text-center text-dark">

        <div class="container p-4">

            <section class="">
                <form action="">

                    <div class="row d-flex justify-content-center">


                        <section class="">

                            <div class="row">

                                <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                                    <h5 class="text-uppercase">Contactgegevens</h5>

                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <p>HockeyclubHDS</p>
                                        </li>
                                        <li>
                                            <p>Appelstraat 1</p>
                                        </li>
                                        <li>
                                            <p>1111AA Fruit</p>
                                        </li>
                                        <li>
                                            <p>HCHDS@gmail.com</p>
                                        </li>
                                        <li>
                                            <p>06-12345678</p>
                                        </li>
                                    </ul>
                                </div>




                            </div>

                            <div class="row d-flex justify-content-center">

                                <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                                    Door Thijs Andeweg
                                </div>

                            </div>

                        </section>

                    </div


</body>
</html>

<?php
