<html lang="en" class="js-focus-visible" data-js-focus-visible="">
<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@200;400;700&amp;display=swap"
        rel="stylesheet">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.15.1/d3.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
        <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <link rel="stylesheet" href="/styles/poncho.min.css">
    <link rel="stylesheet" href="/styles/icono-arg.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/markup/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    

</head>
<body ng-app="genApp">
    <div class="root" ng-controller="DetalleController as detalle">
        <?php include_once('./markup/parts/header.php');  ?>
        <div class="case-description">
            <div class="case-banner">
                <div class="img-container">
                </div>
            </div>
            <div class="case-body">
                <div class="container py-4">
                    <div class="title text-center">
                        <h1>{{juicio.caus_nombre_vulgar}}</h1>
                    </div>
                    <div class="stage text-center">
                        <p>{{juicio.sede}}</p>
                    </div>
                    <div class="subtitle">
                        <p>{{juicio.caus_causa}} </p>
                    </div>
                    <div class="info mt-md-5">
                        <div class="card-info mt-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="icon my-2 mx-3">
                                    <img src="../../assets/images/people-icon.svg" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <h2>{{juicio.cant_victimas}} Víctimas</h2>
                                    </div>
                                   <!--  <div class="read-more">
                                        <a href="">Ver nombres y apellidos de las <span>víctimas</span></a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="card-info mt-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="icon my-2 mx-3">
                                    <img src="../../assets/images/justice-icon.svg" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <div class="title">
                                        <h2>{{juicio.cant_imputados}} Imputados</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
           <?php include_once('./markup/parts/footer.php');  ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <script src="../bower_components/angular/angular.js"></script>
    <script src="../bower_components/angular-route/angular-route.js"></script>
    <script src="../bower_components/satellizer/dist/satellizer.js"></script>
    <script src="../bower_components/fi-rut/dist/fi-rut.js"></script>
    <script src="../scripts/app.routes.js"></script>
    <script src="../scripts/app.core.js"></script>
    <script src="../scripts/app.services.js"></script>
    <script src="../scripts/app.auth.js"></script>
    <script src="../scripts/app.js"></script>

    <script src="../scripts/sections/juicios/detalle.ctrl.js"></script>
    <script src="../scripts/services/med.fct.js"></script>
    <!-- ======================================================================= -->
    <!-- DIRECTIVES -->
    <!-- ======================================================================= -->
    
  <script type="text/javascript" src="../scripts/main.js"></script>
  

</body>

</html>