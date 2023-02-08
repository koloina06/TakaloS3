<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Takalo</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>
<?php $this->load->view("templates/header") ?>
  
  <div class="container">


      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          
        </div>

        <h3><?php echo $nameUser['nom']?></h3>
        <table class="table table-hover">
        <th>Votre produit</th>
        <th>Produit echange</th>
        <th>Proposeur</th>
        <th>Acceptation</th>
        <th>Refus</th>
        <tr>
            <?php for($i=0; $i<count($demande); $i++){ ?>
                    <td><?php echo $demande[$i]['descriptions'] ?></td>
                    <td><?php echo $objet2[$i]['descriptions'];?></td>
                    <td><?php echo $demande[$i]['nom'];?></td>
                    <form action="<?php echo site_url('content/accepter'); ?>" method="get">
                        <input type="hidden" name="idDemande" value="<?php echo $demande[$i]['idDemande']?>">
                        <td><button type="submit">Accepter</button></td>
                    </form>
                    <form action="<?php echo site_url('content/refuser'); ?>" method="get">
                        <input type="hidden" name="idDemande" value="<?php echo $demande[$i]['idDemande']?>">
                        <td><button type="submit">Refuser</button></td>
                    </form>
        </tr>
            <?php  } ?>
        </table>
    </div>

  <?php $this->load->view("templates/footer") ?>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
