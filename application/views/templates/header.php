<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></Footer></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="<?php echo site_url('assets/bootstrap2/vendor/bootstrap/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/css/shop-homepage.css') ?>" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Takalo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          <a href="<?php echo site_url('Head/accueil')?>" class="nav-item nav-link active">Accueil</a>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
          <a href="<?php echo site_url('Objet')?>" class="nav-item nav-link">Ajouter un nouveau produit</a>
          </li>
          <li class="nav-item">
          <a href="<?php echo site_url('Head/list_propositions')?>" class="nav-item nav-link">Propositions</a>
          </li>
          <li class="nav-item">
            <form action="<?php echo site_url('Search/check_Search') ;?>" method="get">
                <input type="text" class="form-control" placeholder="Search for products" name="mot" class="nav-item nav-link"> <i class="fa fa-search"></i>
            </li>
              <p>ok</p>
              <li class="nav-item">
                  <select class="form-control" id="exampleFormControlSelect1" name="idCateg" required="required">
                        <?php for($i=0; $i<count($categ); $i++){ ?>
                            <option value="<?php echo $categ[$i]['idCategorie'] ?>"><?php echo $categ[$i]['categorie'] ?></option></a>
                        <?php } ?>
                    </select> 
              </li>
              <p>ok</p>
              <li class="nav-item">
                      <button type="submit">Rechercher</button>
              </li>
              <p>ok</p>
              <li class="nav-item">
                <a href="<?php echo site_url('Head/quit')?>" class="nav-item nav-link">Deconnexion</a>
              </li>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

</footer>
</body>

</html>