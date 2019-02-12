<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Plateforme Quiz | Accueil</title>

    <link rel="stylesheet" href="public/css/compiled-4.7.0.min.css">
    <link href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.7.0.min.css" rel="stylesheet">
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/accueil_quiz.css">
    <link href="public/css/mdb.css" rel="stylesheet">

</head>
<body class="hidden-sn mdb-skin">
<!-- /.header -->
<div class="container-fluid">
    <header>
        <!-- Navbar -->
        <?php  include_once 'public/includes/nav.php'?>
        <!-- /.Navbar -->

    </header>
    <!-- /.header -->

    <!-- /.content -->
    <div class="content text-center">

        <!-- Card -->
        <div class="card testimonial-card">

            <!-- Background color -->
            <div class="card-up bg-primary lighten-1"></div>

            <!-- Avatar -->
            <div class="avatar mx-auto white">
                <img src="public/img/profile.jpg" class="rounded-circle" alt="Your Profile Picture">
            </div>

            <!-- Content -->
            <div class="card-body">
                <!-- Name -->
                <h4 class="card-title">Amos Pascal</h4>
                <hr>
                <!-- Quotation -->

                <div class="row">
                    <div class="col-md-6" style="line-height: 30px">
                        <i class="fas fa-user-alt cyan-text"></i><strong>   Nom d'utilisateur : </strong><span> Amos Pascal</span><br>
                        <i class="fas fa-phone cyan-text"></i><strong>   Numéro téléphone :  </strong><span> 78674311</span>
                    </div>

                    <div class="col-md-6" style="line-height: 30px">
                        <i class="fas fa-envelope cyan-text"></i><strong> E-mail : amosamospascal@gmail.com </strong><br>
                        <i class="fas fa-key cyan-text"></i><strong> Mot de passe : ******  </strong><a data-toggle="modal" data-target="#modalLoginForm" class="fas fa-edit cyan-text pointer-event"></a>
                    </div>


                    <!-- password modaal -->
                    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title w-100 font-weight-bold">Modifier votre mot de passe</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body mx-3">
                                    <div class="md-form mb-5">
                                        <input type="password" id="defaultForm-email" placeholder="Encien mot de passe" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="defaultForm-email"></label>
                                    </div>

                                    <div class="md-form mb-4">
                                        <input type="password" id="defaultForm-pass" placeholder="Nouveau mot de passe" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="defaultForm-pass"></label>
                                    </div>

                                    <div class="md-form mb-4">
                                        <input type="password" id="defaultForm-pass1" placeholder="Nouveau mot de passe" class="form-control validate">
                                        <label data-error="wrong" data-success="right" for="defaultForm-pass1"></label>
                                    </div>

                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button class="btn btn-primary">Valider</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- password modaal -->




                </div>

                <div class="row mt-5 mb-5">
                    <div class="col-md-4 ">
                        Moyenne générale
                        <canvas id="doughnutChart0"></canvas>
                    </div>
                    <div class="col-md-4 ">
                        Moyenne maximal
                        <canvas id="doughnutChart"></canvas>
                    </div>
                    <div class="col-md-4">
                        Moyenne minimal
                        <canvas id="doughnutChart2"></canvas>
                    </div>
                </div>

                <div>
                    <h4>Résultat</h4>

                    <div class="table-wrapper">
                        <!--Table-->
                        <table class="table table-hover mb-0">

                            <!--Table head-->
                            <thead>
                            <tr>
                                <th>
                                    <a>Nom du quiz</a>
                                </th>
                                <th>
                                    <a>Statut</a>
                                </th>
                                <th>
                                    <a>Pourcentage</a>
                                </th>
                                <th>
                                    <a>Date</a>
                                </th>
                                <th>
                                    <a>Voir</a>
                                </th>
                            </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                            <tr>
                                <td>Quiz node js</td>
                                <td>
                                    <span class="badge badge-success">Pass</span></td>
                                <td>80%</td>
                                <td>11-12-2018 12:52</td>
                                <td><a href="resultat.nan"><i class="far fa-eye cyan-text"></i></a></td>
                            </tr>
                            <tr>
                                <td>Quiz javascript</td>
                                <td>
                                    <span class="badge badge-success">Pass</span></td>
                                <td>98%</td>
                                <td>10-02-2019 20:02</td>
                                <td><a href="resultat.nan"><i class="far fa-eye cyan-text"></i></a></td>
                            </tr>
                            <tr>
                                <td>Quiz HTML</td>
                                <td>
                                    <span class="badge badge-danger">Fail</span></td>
                                <td>10%</td>
                                <td>01-01-20189 06:28</td>
                                <td><a href="resultat.nan"><i class="far fa-eye cyan-text"></i></a></td>
                            </tr>
                            <tr>
                                <td>Quiz PHP</td>
                                <td>
                                    <span class="badge badge-success">Pass</span></td>
                                <td>100%</td>
                                <td>11-12-2018 12:52</td>
                                <td><a href="resultat.nan"><i class="far fa-eye cyan-text"></i></a></td>
                            </tr>
                            </tbody>
                            <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>

                </div>
            </div>


        </div>
        <!-- Card -->

    </div>


</div>
<!-- content -->

<!-- Copyroght -->
<footer class="text-center copyright mb-5">
    © 2019 Copyright:
    <a href="#" > Iso-nan </a>
</footer>
<!-- Copyroght -->






<!-- script -->
<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/compiled-4.7.0.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/mdb.min.js"></script>
<script type="text/javascript">
    // Animations
    new WOW().init();

    //doughnut
    var ctxD = document.getElementById("doughnutChart").getContext('2d');
    var myLineChart = new Chart(ctxD, {
        type: 'doughnut',
        data: {
            labels: ["Quiz Node 80%"],
            datasets: [{
                data: [300, 60],
                backgroundColor: ["#70f77b"],
                hoverBackgroundColor: ["#aeffae"]
            }]
        },
        options: {
            responsive: true
        }
    });

    var ctxD = document.getElementById("doughnutChart0").getContext('2d');
    var myLineChart = new Chart(ctxD, {
        type: 'doughnut',
        data: {
            labels: ["Moyenne génréale 80%"],
            datasets: [{
                data: [300, 60],
                backgroundColor: ["#7291f7"],
                hoverBackgroundColor: ["#a7b4ff"]
            }]
        },
        options: {
            responsive: true
        }
    });

    var ctxD = document.getElementById("doughnutChart2").getContext('2d');
    var myLineChart = new Chart(ctxD, {
        type: 'doughnut',
        data: {
            labels: ["Quiz html 20%"],
            datasets: [{
                data: [200, 160],
                backgroundColor: ["#F7464A"],
                hoverBackgroundColor: ["#FF5A5E"]
            }]
        },
        options: {
            responsive: true
        }
    });


</script>
</body>
</html>