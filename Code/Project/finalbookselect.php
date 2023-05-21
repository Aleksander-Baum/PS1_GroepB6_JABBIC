<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>JABBIC - Final bookselection</title>
</head>
<body>
<div class="container">
    <header>
        <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a href="index.php"><img class="logo" src="assets/images/bib-logo.png" alt="bib logo"></a>
            <h1>Kies een boek!</h1>
            <a href="index.php"><h1 class="navbar-brand mb-0 btn">Geel</h1></a>
        </div>
        </nav>
    </header>
</div>
<hr/>
    <div class="container">
        <div class="row">
            <?php 
            $jsonString = file_get_contents('assets/json/data.json');
            $data = json_decode($jsonString, true);
            $arrayString = $_GET['id'];
            $array = explode(',', $arrayString);
            ?>
            <?php foreach($data as $id) : ?>
                <?php if(in_array($id["id"],$array)) :
                ?>
            <div class="col-12 col-lg-4 mx-auto">
                <div id="card-<?=$id["id"]?>" class="card text-center m-1">
                <img class="img-card-top mx-auto m-1 img-size" src="<?=$id["cover"]?>" alt="Book cover image">
                <div class="card-body">
                    <h5 class="card-title"><?=$id["name"]?></h5>
                    <p class="card-text mx-4"><?=$id["description"]?></p>
                    <a class="btn btn-success d-block" data-bs-toggle="modal" data-bs-target="#boekLocatie-<?=$id["id"]?>">Kiezen</a>
                </div>
                </div>
                <div class="modal fade" id="boekLocatie-<?=$id["id"]?>" tabindex="-1" aria-labelledby="boekLocatieLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-body text-center">
                            <h5>Locatie:</h5>
                            <p><?=$id["location"]?></p>
                        </div>
                            <a class="btn btn-primary btn-block m-2" href="index.php">Ok</a>
                        </div>
                    </div>
                </div>
            </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="assets/javascript/main.js"></script>
</html>