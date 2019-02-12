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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

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

    <!-- /.content -->
    <div class="content text-center">
        <h2>Rechercher un reultats</h2>
        <hr class="mb-5">

        <br>
        <br>

        <table  id="table_id" class="display" width="100%">
            <thead>
            <tr>
                <th >Nom et Prenom</th>
                <th >Nom du quiz</th>
                <th >Statut</th>
                <th >Pourcentage</th>
                <th >Date</th>
            </tr>
            </thead>
            <tbody>
            <tr >
                <td>Amos pascal</td>
                <td>Node js</td>
                <td><span class="badge badge-success fa-3x" >Pass</span></td>
                <td>80%</td>
                <td>2011/04/25</td>
            </tr>
            <tr>
                <td>Jean Doe</td>
                <td>Node js</td>
                <td><span class="badge badge-danger fa-3x" >Fail</span></td>
                <td>80%</td>
                <td>2011/04/25</td>
            </tr>
            <tr>
                <td>Franck Kablan</td>
                <td>Node js</td>
                <td><span class="badge badge-danger fa-3x" >Fail</span></td>
                <td>80%</td>
                <td>2011/04/25</td>
            </tr>
            <tr>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>80%</td>
                <td>2011/04/25</td>
            </tr >
            <tr>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>80%</td>
                <td>2011/04/25</td>
            </tr>
            <tr>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>80%</td>
                <td>2011/04/25</td>
            </tr>
            <tr>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>80%</td>
                <td>2011/04/25</td>
            </tr>
            <tr>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>80%</td>
                <td>2011/04/25</td>
            </tr>
            <tr>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>80%</td>
                <td>2011/04/25</td>
            </tr>
            <tr>
                <td></td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
            </tr>
            <tr>
                <td></td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
            </tr>
            <tr>
                <td></td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
            </tr>
            <tr>
                <td></td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
            </tr>
            <tr>
                <td></td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
            </tr>
            <tr>
                <td></td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
            </tr>

            </tbody>
        </table>
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
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="public/js/datatable.js">

    $(document).ready( function () {
        $('#table_id').DataTable();
    });


</script>
</body>
</html>