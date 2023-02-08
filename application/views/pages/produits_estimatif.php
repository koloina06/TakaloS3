
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<head>
    <meta charset="utf-8">
    <title>Takalo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/shop-homepage.css" rel="stylesheet">
</head>

<?php $this->load->view("templates/header") ?>

    <div class="row">
        <?php for($i=0; $i<count($produits); $i++){ ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <p><?php echo $produits[$i]['descriptions'];?></p>
                    <p><?php echo $produits[$i]['prix'];?> $</p>
                    <p><?php echo $produits[$i]['nom'];?></p>
                </div>
            </div>
        <?php  } ?>
    </div>
    <?php $this->load->view("templates/footer") ?>
</body>

</html>