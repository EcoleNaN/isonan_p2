<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Plateforme Quiz | Accueil</title>

    <link rel="stylesheet" href="public/css/compiled-4.7.0.min.css">
    <link href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.7.0.min.css" rel="stylesheet">
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/accueil_quiz.css">
    <link href="public/css/mdb.css" rel="stylesheet">

</head>
<body class="fixed-sn mdb-skin body_background" >

<header>
    <!-- Navbar -->
    <?php  include_once 'public/includes/nav.php'?>
    <!-- /.Navbar -->

</header>
<!-- /.header -->


<div class="container">

    <div class="col-md-12 mb-4 content_quizResult">

        <!-- Card -->
        <div class="card my_card">

            <!-- Card content -->
            <div class="card-body">

                <!-- Text -->
                <div>
                    <small class="text-white">Date composition : 16 Fev 2019 • 14:42</small>
                    <p class="display-4 text-danger float-right"><strong>82.75%</strong></p>
                </div>

            </div>

            <!-- Table with panel -->
            <div class="card card-cascade narrower mycardcascade">

                <!--Card image-->
                <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">



                    <h4 class="white-text mx-3">Quiz node js</h4>

                    <div>
                        <span class="badge badge-success fa-3x" >Pass</span>
                    </div>

                </div>
                <!--/Card image-->

                <div class="px-4">

                    <div class="">
                        <!--Table-->
                        <!--Table-->
                        <table class="table  ">

                            <!--Table head-->
                            <thead>
                            <tr class="text-center">
                                <th>Reponse correcte</th>
                                <th>Reponse incorrecte</th>
                                <th>Reponse total</th>
                                <th>Temp passé</th>
                                <th>Pourcentage</th>
                            </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                            <br>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="table-primary text-center">
                                <td>30</td>
                                <td>12</td>
                                <td>15</td>
                                <td>24:50:06</td>
                                <td>82.75</td>
                            </tr>

                            </tbody>
                            <!--Table body-->
                        </table>
                        <!--Table-->

                        <br>
                        <br>

                        <div class="text-center">
                            <small><i class="fas fa-user-alt indigo-text pr-2"></i> amosamospascal@gmail.com</small>
                        </div>
                        <br>
                    </div>

                </div>

            </div>
            <!-- Table with panel -->

        </div>
        <!-- Card -->

    </div>


</div>




<!-- script -->
<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/mdb.min.js"></script>

</body>
</html>