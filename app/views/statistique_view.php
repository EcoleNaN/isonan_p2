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
<body class="hidden-sn mdb-skin">
<!-- /.header -->

    <header>
        <!-- Navbar -->
        <?php  include_once 'public/includes/nav.php'?>
        <!-- /.Navbar -->

    </header>
    <!-- /.header -->

<div class="container">
    <!-- /.content -->
    <div class="content text-center">
        <h2>Mes statistiques resultats quiz</h2>
        <hr class="mb-5">

        <canvas id="myChart" style="max-width: 1000px;"></canvas>

    </div>


</div>
<!-- content -->







<!-- script -->
<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/compiled-4.7.0.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/mdb.min.js"></script>
<script type="text/javascript">
    // Animations
    new WOW().init();

    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Quiz Node js", "Quiz Javascript", "Quiz HTML", "Green", "Purple", "Orange"],
            datasets: [{
                label: '',
                data: [12, 19, 3, 5, 2],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });



</script>
</body>
</html>