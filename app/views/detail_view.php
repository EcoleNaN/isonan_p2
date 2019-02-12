<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Plateforme Quiz | Accueil</title>

    <link href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.7.0.min.css" rel="stylesheet">
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/accueil_quiz.css">
    <link href="public/css/mdb.css" rel="stylesheet">

</head>
<body class="hidden-sn mdb-skin">
<!-- /.header -->
<div class="container">
    <header>
        <!-- Navbar -->
        <?php  include_once 'public/includes/nav.php'?>
        <!-- /.Navbar -->

    </header>
    <!-- /.header -->

    <!--Modal: modalVM-->
    <div class="content">


        <table class="table table-bordered mb-5">

            <tbody>
            <tr>
                <td  colspan="2">Nom du quiz</td>
                <td>Quiz node js</td>
            </tr>
            <tr>
                <td  colspan="2">Date de debut (jj-mm-aaaa)</td>
                <td>14-02-2019</td>
            </tr>
            <tr>
                <td colspan="2">Date de fin (jj-mm-aaaa)</td>
                <td>15-02-2019</td>
            </tr>
            <tr>
                <td colspan="2">Durée (en minute)</td>
                <td>30</td>
            </tr>
            <tr>
                <td colspan="2">Nombre total de question</td>
                <td>100</td>
            </tr>
            <tr>
                <td colspan="2">Tentative maximal (en minute)</td>
                <td>2</td>
            </tr>
            <tr>
                <td colspan="2">Pourcentage minimum de réussite</td>
                <td>80</td>
            </tr>
            <tr>
                <td colspan="2">Point question correcte</td>
                <td>1</td>
            </tr>
            <tr>
                <td colspan="2">Point question incorrecte</td>
                <td>0</td>
            </tr>
            </tbody>
        </table>

        <!--Footer-->
        <div class="modal-footer justify-content-center flex-column flex-md-row">
            <a href="composition_quiz.html" class="btn btn-success btn-rounded btn-md ml-4" data-toggle="modal" data-target="#launcheQuiz">Commencer</a>
        </div>
        <!--Footer-->

        <!-- Modal -->
        <div class="modal fade" id="launcheQuiz" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger font-weight-bold"  id="exampleModalLabel">Attention</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Vous êtes sur le point de commencer le quiz Node js <br></p>
                        <p>Voulez vous continuer ? sinon clicker en dehors de cette fénêtre pour annuler</p>
                    </div>
                    <div class="modal-footer text-center ">
                        <a href="composition.nan" class="btn btn-danger ">Continuer</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!--Modal: modalVM-->


</div>
<!-- Copyroght -->
<footer class="text-center mb-5 copyright">
    © 2019 Copyright:
    <a href="#" > Iso-nan </a>
</footer>
<!-- Copyroght -->






<!-- script -->
<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/mdb.min.js"></script>
<script type="text/javascript">
    // Animations
    new WOW().init();
</script>
</body>
</html>