<!DOCTYPE html>
<html lang="en">

<html lang="en" class="js-focus-visible" data-js-focus-visible="">
<head>
    <meta charset="utf-8">
>
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.15.1/d3.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


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
    <div class="root">
        <?php include_once('./markup/parts/header.php');  ?>
        <div class="cases-grid py-4">
            <div class="container">
                <div class="title">
                    <h1>Acá va un título</h1>
                </div>
                <div class="subtitle">
                    <p>Acá va una bajada</p>
                </div>
                <section ng-controller="HomeController as homeController">
                    <div class="cases-container d-flex flex-column flex-md-row flex-wrap justify-content-center mt-3" ng-repeat="j in juicios">

                        <div class="case card my-2 m-md-3">
                            <a ng-href="./causa.php/?id={{j.caus_id}}" target="_self">
                                <div class="img-container">
                                    <img src="/images/juicio-1.jpg" class="card-img-top img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{j.caus_caratula}}</h5>
                                </div>
                            </a>
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
    <script src="scripts/sections/juicios/detalle.ctrl.js"></script>
    <script src="scripts/services/med.fct.js"></script>
    <!-- ======================================================================= -->
    <!-- DIRECTIVES -->
    <!-- ======================================================================= -->
    
  <script type="text/javascript" src="scripts/main.js"></script>
  

</body>

</html>