<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
    />
    <title>Document</title>
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
                    <a class="nav-link active text-dark" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="index.php">HCHDS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="">Aanmelden</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-">
    <div>
        <img src="img/foto.PNG" alt="" width="100%">
    </div>
    <div class="container">
        <h1>Klantgegevens</h1>
        <form action="Bestellen1.php" method="POST">
            Voornaam
            <input class="form-control" type="text">
            Achternaam
            <input class="form-control" type="text">
            Email
            <input class="form-control" type="email">
            Adrees
            <input class="form-control" type="text">
            Postcode
            <input class="form-control" type="text">
            Woonplaats
            <input class="form-control" type="text">
            <br>
            <input class="bg-dark text-light" type="submit" name="send" value="ga naar sushi's">
        </form>
    </div>
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
                                                <p>hockeyclubHDS</p>
                                            </li>
                                            <li>
                                                <p>Appelstraat 1</p>
                                            </li>
                                            <li>
                                                <p>1111AA Fruit</p>
                                            </li>
                                            <li>
                                                <p>HCHDS@GMAIL.COM</p>
                                            </li>
                                            <li>
                                                <p>06-12345678</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="row d-flex justify-content-center">

                                        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                                            Door Thijs Andeweg
                                        </div>
                            </section>
                        </div>
            </div>
</body>
</html>