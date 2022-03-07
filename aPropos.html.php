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
    <<?php
        include "header.html.php";
        ?>
    
<div class="container-fluid  d-flex" id="accueil">
<?php
include "button.html.php";
     ?>

<div id="display" class="col">
<h3 class="mirror text-center">À propos de nous</h3>
<h3 class="mirror text-center" id="flip">À propos de nous</h3>
</div>
</div></div>
<div class="row ml-1 mb-2"> 

     <?php
include "navbar.html.php";
     ?>
<div class="col-sm ml-5 main border border mt-1 mr-4 mb-2 " id="bg">
    <p class="mt-5 mx-5"><em><b>Mon droit à l'oubli</b></em> a été créée pour répondre aux
         besoins des utilisateurs. En réalité, l'application du RGPD
          n'est pas toujours bien respectée et les informations dues
           aux clients pas toujours bien communiquées. </p>
        <p class="mt-5 mx-5"> Grâce à ses fondateurs, <em><b>Mon droit à l'oubli</b></em> offre un 
            service unique et d'excellence à ses utilisateurs en 
            étant maître à 100% pour protéger leurs vies privées.</p>
 

          

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