<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="styleacc.css">
    <link rel="stylesheet" href="mirror.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid row">

        <img src="img/LOGO.png" alt="logo" class="" id="logo">
        <div class="col mt-3">
        <p class="text-center p ">Mon droit à l'Oubli</p>
    
        <p class="text-center p ">Description</p>
</div>
    </div>
    
<div class="container-fluid  d-flex" id="accueil">
<?php
include "button.html.php";
     ?>

<div id="display" class="col">
<h3 class="mirror text-center">Nous contacter</h3>
<h3 class="mirror text-center" id="flip">Nous contacter</h3>
</div>
</div></div>

     <?php
include "navbar.html.php";
     ?>
<div class="col-sm ml-5 main border border mt-1 mr-4 mb-2 " id="bgcontact">
    <h3 class="m-5"><b>Contact</b></h3>
 
    <form class="mx-5 mt-5">
        <div class="row col-7">
  <div class="form-group col-6">
    <label for="">Nom<i class="fa-solid fa-asterisk text-danger"></i></label>
    <input type="text" class="form-control" id="" aria-describedby="" >
    <small id="" class="form-text">Prénom</small>
  </div>
  <div class="form-group col-6 ">
  <label for="" class="text-white">x</label>

    <input type="text" class="form-control" id="" >
    <small id="" class="form-text">Nom</small>

  </div>
</div>
<div class="form-group col-6">
    <label for="">E-mail<i class="fa-solid fa-asterisk text-danger"></i></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group col-6">
    <label for="">Message<i class="fa-solid fa-asterisk text-danger"></i></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  <button type="submit" class="btn btn-light ml-3 mb-5">envoyer</button>
</form>
          

    </div>
    </div>

<?php
include "footer.html.php";
     ?>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
</body>

</html>