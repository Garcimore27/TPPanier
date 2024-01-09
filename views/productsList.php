<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Burgers</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LE ROI DU BURGER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Burgers<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?choice=1">Accompagnements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?choice=2">Boissons</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?choice=3">Desserts</a>
      </li>
    </ul>
  </div>
</nav>
        <br>
        <hr>
<a class="btn btn-primary" data-toggle="collapse" href="#cacherPanier" role="button" aria-expanded="false" aria-controls="cacherPanier">PANIER</a>
<div class="cacher" id="cacherPanier">
<table class="table table-hover col-mb-4">
  <thead>
    <tr>
      <th scope="col"><h3>PANIER : 
        <?php if (isset($_SESSION['total'])): ?>
        <?= $_SESSION['total'] ?>
        <?php else: ?>
        0
        <?php endif ?>
        €</h3></th>
      <th scope="col">Produit</th>
      <th scope="col">Prix unitaire</th>
      <th scope="col">Quantité</th>
    </tr>
  </thead>
  <tbody>
    <?php if (isset($_SESSION['Cart'])): ?>
      <?php foreach($_SESSION['Cart'] as $key => $panier) : ?>
      <tr>
        <th scope="row"><a href="addPanier.php?task=remove&id=<?= $key ?>" alt="" class="btn btn-danger">Supprimer</a></th>
        <td><?= $panier['name'] ?></td>
        <td><?= number_format($panier['price'], 2, ',', ' ') ?>€</td>
        <td><a href="addPanier.php?task=minus&id=<?= $key ?>" class="btn btn-warning">  -  </a> <?= $panier['quantite'] ?><span>  </span><a href="addPanier.php?task=add&id=<?= $key ?>"  class="btn btn-success">  +</a></td>
      </tr>
      <?php endforeach ?>
    <?php endif ?>
  </tbody>
</table>
</div>
    <hr>
    <div class="container">
        <div class="container-fluid bg-trasparent " style="position: relative;">
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3" style="margin: auto;">
            <?php foreach($productsList as $key => $product) : ?>
                <div class="col-mb-4"> 
                    <div class="card h-100 shadow-sm">
                    <img src="https://titi.startwin.fr<?= strtr($product['image'],'\\','/') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <span class="float-start badge rounded-pill bg-primary"><?= $product['name'] ?></span>
                                <span class="float-end price-hp"><?= number_format($product['price']['$numberDecimal'], 2, ',', ' ') ?>€</span>
                            </div>
                            <h5 class="card-title"><?= $product['description'] ?></h5>
                            <div class="text-center my-4">
                                <a href="addPanier.php?task=add&id=<?= $product['_id'] ?>&name=<?= $product['name'] ?>&price=<?= $product['price']['$numberDecimal'] ?>" class="btn btn-warning">Ajouter au Panier</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>