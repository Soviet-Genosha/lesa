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
    <link rel="stylesheet" type="text/css" href="/markup/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300;400;500;700&display=swap"
        rel="stylesheet" type="text/css">

    

</head>
<body ng-app="genApp">
    <div class="root microrrelatos">
    <?php $currentPage = "microrrelatos"; ?>

        <?php include_once('./markup/parts/header.php');  ?>
        <div class="cases-grid py-4">
            <div class="container">
                <div class="text-center">
                    <h1>Microrrelatos</h1>
                   <h3>Historias, testimonios y escenas de los juicios</h3>
                </div>
                <section ng-controller="MicrorrelatosController as MicrorrelatosController">

                <div class="row row-cols-1 row-cols-md-3">
                        <div class="col mb-4" ng-repeat="relato in microrrelatos">
                            <div class="card h-100 shadow-sm">
                            <img src="images/Microrelatos/{{relato.url_imagen}}" class="card-img-top " alt="...">
                            <div class="card-body">
                                <h5 class="card-title my-2">{{relato.titulo}}</h5>
                                <p class="lead my-2">{{relato.bajada}}</h5>
                                <p class="card-text">{{relato.descripcion}}</p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="./causa.php/?id={{relato.url_video}}" target="_self" class="card-link btn btn-primary "><i class="icono-arg-youtube"></i>
 Reproducir</a>
                            </div>
                            </div>
                        </div>
              
                        </div>


                  
            </section>
        </div>
        <?php include_once('./markup/parts/footer.php');  ?>
    </div>

    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  

    <script src="bower_components/angular/angular.js"></script>
    <script src="bower_components/angular-route/angular-route.js"></script>
    <script src="bower_components/satellizer/dist/satellizer.js"></script>
    <script src="bower_components/fi-rut/dist/fi-rut.js"></script>
    <script src="scripts/app.routes.js"></script>
    <script src="scripts/app.core.js"></script>
    <script src="scripts/app.services.js"></script>
    <script src="scripts/app.auth.js"></script>
    <script src="scripts/app.js"></script>

    <script src="scripts/sections/juicios/home.ctrl.js"></script>
    <script src="scripts/sections/home/microrrelatos.ctrl.js"></script>
    <script src="scripts/services/med.fct.js"></script>
    <!-- ======================================================================= -->
    <!-- DIRECTIVES -->
    <!-- ======================================================================= -->
    
  <script type="text/javascript" src="scripts/main.js"></script>
  

</body>

</html>