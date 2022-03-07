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
  <?php
        include "header.html.php";
        ?>

    <div class="container-fluid  d-flex" id="accueil">
        <?php
        include "button.html.php";
        ?>

        <div id="display" class="col pt-2">
            <h3 class="mirror text-center">Règlement intérieur du forum</h3>
            <h3 class="mirror text-center" id="flip">Règlement intérieur du forum</h3>
        </div>
    </div>
    </div>
    <div class="row ml-1 mb-2"> 

    <?php
    include "navbar.html.php";
    ?>
    <div class="col-sm ml-5 main border border mt-1 mr-4 mb-2 p-3" id="bgcontact">
       
<p>Principe de modération</p>
<p>Le forum de discussion DROIT À L'OUBLI sont modérés a posteriori par notre administrateur.</p>
<p>Le modérateur surveille les discussions. Son rôle n'est pas de censurer mais de vérifier que les propos tenus sur le forum de discussion restent courtois, respectueux et surtout conformes aux lois en vigueur. Le modérateur pourra effacer donc immédiatement :</p>
<p>• Les messages racistes, xénophobes, révisionnistes, faisant l'apologie de crime de guerre, discriminant ou incitant à la haine à l'encontre d'une personne, d'un groupe de personnes en raison de leurs origines, leur ethnie, leurs croyances ou leur mode de vie. </p>
<p>• Les messages à caractère insultants, violents, menaçants, au contenu choquant ou portant atteinte à la dignité humaine.</p>   
<p>• Les messages diffamatoires.</p>
<p> • Les messages bafouant le respect à la vie privée. • Les messages contraires aux lois en vigueur en France.</p>
<p>• Toute demande d'aide au piratage quel qu'il soit ainsi que les messages détaillant une procédure de piratage.</p>
<p>• Les messages dans le but de nuire au forum tel que le flood ou bien ceux générant une mauvaise ambiance ou un mauvais esprit.</p>
<p>• Les messages inintelligibles ou hors sujets.</p>
    <p> • Comprenant des adresses (email compris) ou des numéros de téléphone, ou encore snap.</p>
<p>• Les liens de parrainages (hormis sur les forums/topics dédiés).</p>
<p>• Les publicités, qu'elles soient commerciales ou non. </p>

</div>
    </div>

    <?php
    include "footer.html.php";
    ?>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>