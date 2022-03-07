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
<?php
        include "header.html.php";
        ?>
    
<div class="container-fluid  d-flex" id="accueil">
<?php
include "button.html.php";
     ?>

<div id="display" class="col">
<h3 class="mirror text-center">Notre démarche</h3>
<h3 class="mirror text-center" id="flip">Notre démarche</h3>
</div>
</div></div>

     <?php
include "navbar.html.php";
     ?>
<div class="col-sm ml-5 main border border mt-1 mr-4 mb-2 " id="bg">
    <p class="mt-5 mx-5"><em><b>Mon droit à l'oubli</b></em> vous accompagne
     pour effectuer l'effacement de vos données auprès de vote banque, assurance 
     ou un site e-commerce.  </p>
           <p class="mt-3 mx-5">L'objectif est de favoriser la prise de conscience,
                par les particuliers, de l'importance de leurs données. Souvent, 
                le RGPD est perçu comme une contrainte. Évidemment, comme c'est une
                 loi, la formalisation juridique peut donner l'impression que le 
                 sujet est difficile. </p>
           <p class="mt-3 mx-5"> Or avec le recul, le RGPD est souvent une question de bon sens. 
</p>
        <p class="mt-3 mx-5"> C'est pourquoi, <em><b>Mon droit à l'oubli</b></em> adopte une démarche
         simple, rassurante, efficace et très pédagogique pour vous aider à transformer cette 
         contrainte en opportunité d'évolution de vos pratiques en matière de sécurité de vos données. </p>
 

          

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