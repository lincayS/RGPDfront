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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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

        <div id="display" class="col pt-2">
            <h3 class="mirror text-center">À propos de nous</h3>
            <h3 class="mirror text-center" id="flip">À propos de nous</h3>
        </div>
    </div>
    </div>

    <?php
    include "navbar.html.php";
    ?>
    <div class="col-sm ml-5 main border border mt-1 mr-4 mb-2 " id="bg">
        <div class="border m-3 p-2">
            <p class="text-center">FAQ</p>
            <p class="text-center">Réponses à vos questions les plus fréquentes</p>

        </div>
        <div>
            <p class="mx-5  b">Je n'arrive pas à me connecter, que dois-je faire ? </p>
            <p b class=" mx-5"> Il faut réinitialiser votre mot de passe en le déclarant « Mot de passe oublié ? » sur la page de connexion.</p>
        </div>
        <div>
            <p class="mx-5 mt-3 b">Quel est le délai de traitement de ma demande « Mon Droit à l'oubli » ? </p>
            <p b class=" mx-5"> Le délai légal de traitement d'une demande d'effacement des données personnelles est de 30 jours.</p>
        </div>
        <div>
            <p class="mx-5 mt-3 b">Mon établissement ne fait pas partie des organismes cités, que dois-je faire ? </p>
            <p b class=" mx-5">Même si nous avons conclus de très nombreux partenariats avec les organismes principaux, certains établissements n'ont pu être intégrés dans notre liste. </p>
        </div>




    </div>
    </div>

    <?php
    include "footer.html.php";
    ?>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>