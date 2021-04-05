<html lang="en" class="js-focus-visible" data-js-focus-visible="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@200;400;700&amp;display=swap"
        rel="stylesheet" type="text/css">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.15.1/d3.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     

    <link rel="stylesheet" type="text/css" href="/styles/poncho.min.css">
    <link rel="stylesheet" type="text/css" href="/styles/icono-arg.css">
    <link rel="stylesheet" type="text/css" href="/secciones/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300;400;500;700&display=swap"
        rel="stylesheet" type="text/css">

    

</head>
<body ng-app="genApp" class="juicios-ficha">
    <div class="root" ng-controller="DetalleController as detalle">
        <?php $currentPage = "juicios"; ?>

        <?php include_once('./secciones/header.php');  ?>
        <div class="case-description">
        <div class="container-fluid header-juicios" style="background-image:url(/images/Juicio/{{juicio.caus_icono}})">
                            </div>
                <div ng-show="loading"> <progress class="loader-mail pure-material-progress-linear" />   </div>
                    <div class="container-md" ng-cloak>
                        <div class="col-lg-10 offset-lg-1">
                          
                            <section class="mt-0">
                            <h1 class="display-2 mt-0 font-weight-bold text-secondary" style="margin-bottom:0">{{juicio.caus_nombre_vulgar}}</h1>
                            <h2 class="text-white"><i class="icono-arg-martillo"></i>
                                 {{juicio.sede}}</h3>
                            <p class="lead text-white"><strong>Tribunal: </strong>{{juicio.caus_juez}}<br>
                                    
                            <strong>Fiscal/es: </strong>{{juicio.caus_fiscal}} </p>
                            
                            <p class="lead text-white"> <strong>Descripción</strong><br>
                                {{juicio.caus_causa}} </p>
                            </section>
                                <section>
                                
                                <p class="lead text-white my-0"> <strong>Temas</strong><br>
                                    <h2 class="my-0"><span ng-repeat="etiqueta in juicio.etiquetas" class="badge badge-secondary px-1 mr-2">
                                        {{etiqueta}}</span></h1>
                                    </p>

                                </section>

                                    <section class="border border-white" style="
                                    padding: 0px 20px;
                                    border-radius: 3px;
                                    margin: 0 -20px;
                                "  ng-if="juicio.cant_imputados">    
                                            <h1 class="text-secondary mb-0">{{juicio.cant_imputados}} imputados<br>
                                            
                                            <i class="fa fa-user" ng-repeat="x in [].constructor(juicio.cant_imputados) track by $index">
                                                </i></h1>
                                        
                                            <p class="lead text-white"> {{juicio.imputados}} </p>
                                            <p class="lead text-white"> <strong>Imputados excluidos:</strong>
                                                {{juicio.excluidos}} 

                                            </p>
                                    </section>
                                    <section  ng-if="juicio.cant_victimas  != null">
                                            <h1 class="text-secondary mb-0">{{juicio.cant_victimas}} víctimas<br>
                                            <i class="fa fa-user" ng-repeat="x in [].constructor(juicio.cant_victimas) track by $index">
                                                </i></h1>
                                    </section>

                            <section ng-if="juicio.testigos != null">
                                     <h1 class="text-secondary mb-0">{{juicio.testigos}} testigos</h1>
                                     <ul class="list-unstyled">
                                        <li ng-repeat="tipo in juicio.testigosDetalle"><strong>{{tipo[0]}}:</strong>{{tipo[1]}}</li>
                                    </ul>
                                </section>
                                        
                                    
                                    <a href="/index.php" class="btn btn-primary">Inicio</a> <a href="/juicios.php" class="btn btn-primary">Ver todos los juicios</a>
                                    <br><br><br>

                    </div>
                </div>
     

        </div>
           <?php include_once('./secciones/footer.php');  ?>
    </div>

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