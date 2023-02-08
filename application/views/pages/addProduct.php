<!DOCTYPE html>
<html>
    <head>
        <title> Login</title>
        <meta charset="UTF-8"> 

        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/shop-homepage.css" rel="stylesheet">
	</head>

<body>

<?php $this->load->view("templates/header") ?>
  <div id="content">
  <input type="text" name="" value="" style="border-style:none">
  <div class="col-md-6 offset-md-3 mt-5">
     <br>
     <form accept-charset="UTF-8" action="" method="POST" enctype="multipart/form-data" target="_blank">
       <div class="form-group">
         <label for="exampleInputName">Description</label>
         <input type="text" name="fullname" class="form-control" id="exampleInputName" placeholder="Entrer la description" required="required">
       </div>
       <div class="form-group">
         <label for="exampleInputEmail1" required="required">Prix</label>
         <input type="number" name="prix" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valeur Estime">
       </div>
       <div class="form-group">
         <label for="exampleFormControlSelect1">Categories</label>
         <select class="form-control" id="exampleFormControlSelect1" name="categorie" required="required">
          <?php for($i=0; $i<count($categ); $i++){ ?>
              <option value="<?php echo $categ[$i]['idCategorie'] ?>"><?php echo $categ[$i]['categorie'] ?></option>
          <?php } ?>
         </select>
       </div>
       <hr>
       <form action="upload.php" method="POST">
        <input type="file" multiple class="put">
        <p>Drag your files here or click in this area.</p>
        <button type="submit">Upload</button>
      </form>
 </div> 
  </div>
</body>
<?php $this->load->view("templates/footer") ?>
</html>