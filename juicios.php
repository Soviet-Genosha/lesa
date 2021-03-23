<!DOCTYPE html>
<html lang="en">

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
<body>
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
                <section ng-controller="ListController as homeController">
                    <div class="cases-container d-flex flex-column flex-md-row flex-wrap justify-content-center mt-3">
                        <div class="case card my-2 m-md-3">
                            <a href="./case/index.php" target="_self">
                                <div class="img-container">
                                    <img src="/images/juicio-1.jpg" class="card-img-top img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Esma IV</h5>
                                </div>
                            </a>
                        </div>
                </div>
            </section>
        </div>
        <?php include_once('./markup/parts/footer.php');  ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>