<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>JABBIC - Genre</title>
</head>
<body>
    <div class="container">
    <header>
        <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a href="index.php"><img class="logo" src="assets/images/bib-logo.png" alt="bib logo"></a>
            <h1>Kies een genre!</h1>
            <a href="index.php"><h1 class="navbar-brand mb-0 btn">Geel</h1></a>
        </div>
        </nav>
    </header>
</div>
<hr/>
    <div class="container">
        <div class="col-12 col-md-6 mx-auto">
            <ul>
                <li>
                    <a href="#" onclick="selectgenre('Verhalen');" class="btn btn-primary d-block my-2">
                        <div class="row">
                            <div class="col-2 ">
                            <i class="d-none d-md-block fa-solid fa-book fa-2x"></i>
                            </div>
                            <div class="col-8">
                                <h4>Verhalen</h4>
                            </div>
                            <div class="col-2">
                            <i class="d-none d-md-block fa-solid fa-circle-arrow-right fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="selectgenre('Romans');" class="btn btn-primary d-block my-2">
                        <div class="row">
                            <div class="col-2">
                                <i class="d-none d-md-block fa-solid fa-book fa-2x"></i>
                            </div>
                            <div class="col-8">
                                <h4>Romans</h4>
                            </div>
                            <div class="col-2">
                                <i class="d-none d-md-block fa-solid fa-circle-arrow-right fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="selectgenre('Fantasieverhalen');" class="btn btn-primary d-block my-2">
                        <div class="row">
                            <div class="col-2">
                                <i class="d-none d-md-block fa-solid fa-book fa-2x"></i>
                            </div>
                            <div class="col-8">
                                <h4>Fantasieverhalen</h4>
                            </div>
                            <div class="col-2">
                                <i class="d-none d-md-block fa-solid fa-circle-arrow-right fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="assets/javascript/main.js"></script>
</html>