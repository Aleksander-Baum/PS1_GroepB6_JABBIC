<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>JABBIC - Bookselection</title>
</head>
<body>
<div class="container">
    <header>
        <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a href="index.php"><img class="logo" src="assets/images/bib-logo.png" alt="bib logo"></a>
            <h1>Judge 3 boeken!</h1>
            <a href="index.php"><h1 class="navbar-brand mb-0 btn">Geel</h1></a>
        </div>
        </nav>
    </header>
</div>
<hr/>
    <div class="container">
<div class="row">
    <div class="col-12 col-lg-4 mx-auto">
    <?php 
    $jsonString = file_get_contents('assets/json/data.json');
    $data = json_decode($jsonString, true);
    $count = 0;
    ?>
    <?php foreach($data as $genre) : ?>
        <?php if($genre["genre"] == $_GET["genre"]) :
        $count += 1;
        ?>
        <div id="card-<?=$genre["id"]?>" class="card position-absolute text-center mb-5" style="width: 500px; height: 640px;">
        <img id="image-<?=$genre["id"]?>" class="img-card-top mx-auto img-size" src="<?=$genre["cover"]?>" alt="Book cover image">
        <div class="card-body">
            <div class="row">
                <div id="no" class="col-3">
                    <a onmouseover="moveImageLeft('<?=$genre["id"]?>')" onclick="preference('no', '<?=$genre["id"]?>', '<?=$count -= 1?>');" class="btn btn-danger d-block d-flex align-items-center justify-content-center py-4"><i class="fa-solid fa-circle-xmark fa-3x"></i></a>
                </div>
                <div class="col-6">
                    <h5 class="card-title"><?=$genre["name"]?></h5>
                    <p class="card-text mb-0"><?=$genre["author"]?></p>
                    <p class="card-text mb-0"><?=$genre["pages"]?> paginas</p>
                    <p class="card-text"><?=$genre["genre"]?></p>
                </div>
                <div class="col-3">
                    <a onmouseover="moveImageRight('<?=$genre["id"]?>')" onclick="preference('yes', '<?=$genre["id"]?>', '<?=$count -= 1?>')" class="btn btn-success d-block d-flex align-items-center justify-content-center py-4"><i class="fa-solid fa-circle-check fa-3x"></i></a>
                </div>
            </div>
        </div>
        </div>
        <?php endif; ?>
    <?php endforeach; ?>
    </div>
</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="assets/javascript/main.js"></script>
</html>