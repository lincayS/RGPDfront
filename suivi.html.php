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
            <h3 class="mirror text-center">Suivre ma demande</h3>
            <h3 class="mirror text-center" id="flip">Suivre ma demande</h3>
        </div>
    </div>

    <?php
    include "navbar.html.php";
    ?>
    <div class="col-sm ml-5 main border border  mr-4 mb-2 " id="size">
        <h4 id="" class="p-2 suivi d-inline-flex m-3">Suivi de ma demande</h4>
        <br>
        <a href="" class="text-reset ml-2"><i class="fa-solid fa-circle"></i>Demander une attestation</a>
        <p>Suivi n°W064F0H52WB</p>
        <div class="row">

            <div class="col-3">

                <p><small>Demande formulée depuis le site</small> <br>
                    <small class="text-muted">02/07/2020</small>
                </p>
                

            </div>
            <div class="col-3">

                <p><small>Réception de votre demande</small> <br>
                    <small class="text-muted">02/07/2020</small>
                </p>
               

            </div>

            <div class="col-3">

                <p><small>Demande transmise à un gestionnaire</small> <br>
                    <small class="text-muted">02/07/2020</small>
                </p>
                

            </div>

            <div class="col-3">

                <p><small>Demande traitée</small> <br>
                    <small class="text-muted"></small>
                </p>
               

            </div>

        </div>

        <div class="row mx-1">
        <div class=" col-3 " id="state" style="  background-color: rgb(12, 165, 127);"></div>
        <div class=" col-3 state" id="" style="  background-color: rgb(12, 165, 127);"></div>
        <div class=" col-3 state" id="" style="  background-color: rgb(12, 165, 127);"></div>
        <div class=" col-3 " id="state2"></div>
            </div>
    <!-- if demande validée == true -->
            <div class="suivi text-success text-center p-2 mt-3">Demande validée, vous pouvez désormais télécharger ou imprimer votre demande.</div>
<!-- else <div class="suivi text-danger text-center mt-5">Demande en cours de traitement.</div>
           --> 
<div class=" d-flex justify-content-around mt-4">
            <a href="" class="buttonssuivi p-1 text-reset ">Visualiser</a>
<a href="" class="buttonssuivi p-1 text-reset ">Télécharger</a>
<a href="" class="buttonssuivi p-1 text-reset ">Imprimer</a>
</div>
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