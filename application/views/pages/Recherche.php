<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>


<head>
    <meta charset="utf-8">
    <title>Inty sy Nday</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/shop-homepage.css" rel="stylesheet">
</head>

<body>
<?php $this->load->view("templates/header") ?>
<h2>Resultats de recherche</h2>
    <div class="row">
            <?php for($i=0; $i<count($resultat); $i++){ ?>
                <div class="col-lg-4 col-md-6 mb-4" style="width:50px;">
                    <div class="card h-100">
                        <p><?php echo $resultat[$i]['descriptions'];?></p>
                        <p><?php echo $resultat[$i]['prix'];?>$</p>
                    </div>
                </div>
            <?php  } ?>
    </div>
<?php $this->load->view("templates/footer") ?>
</body>

</html>