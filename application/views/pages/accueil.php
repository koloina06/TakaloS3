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

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Categorie</h1>
        <div class="list-group">
            <?php for($i=0; $i<count($categ); $i++){ ?>
                <input type="hidden" value="<?php echo $categ[$i]['idCategorie'] ?>" name="idCateg">
                <a href="<?php echo site_url('Content/get_categ/'.$categ[$i]['idCategorie']) ;?>" class="list-group-item"><?php echo $categ[$i]['categorie'] ?></a>
            <?php } ?>
        </div>

      </div>

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          
        </div>

        <div class="row">

        <?php for($i=0; $i<count($product); $i++){ ?>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                        <p><?php echo $product[$i]['descriptions'];?></p>
                        <p><?php echo $product[$i]['prix'];?>$</p>
                        <a href="<?php echo site_url('Content/get_choix/'.$product[$i]['idObjet']) ;?>" class="nav-item nav-link">Choisir</a>
                </div>
                </div>
            <?php  } ?>
          </div>

  <?php $this->load->view("templates/footer") ?>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
