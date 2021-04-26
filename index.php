<html lang="en" class="js-focus-visible" data-js-focus-visible="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

    <meta name="description" content="Historias, estadísticas y agenda de los juicios orales por crímenes de lesa humanidad. Seguimiento de las audiencias en vivo. Análisis de la velocidad de los debates. Los juicios en datos.  ">
  <meta name="keywords" content="lesa humanidad, juicios de lesa humanidad, juicios por crímenes de lesa humanidad, dictadura militar, golpe de estado, terrorismo de estado, juicios orales lesa, audiencias lesa, juicios lesa, causas lesa, genocidas, memoria verdad y justicia, estadísticas lesa humanidad,datos lesa humanidad.">
  <meta name="author" content="Secretaria de Derechos Humanos de la Nación, Argentina">

<meta property="og:type" content="article">
<meta property="og:title" content="Juicios de Lesa Humanidad en tiempo real">
<meta property="og:url" content="http://www.juiciosdelesahumanidad.ar">
<meta property="og:site_name" content="Juicios de Lesa Humanidad">
<meta property="og:description" content="Historias, estadísticas y agenda de los juicios orales por crímenes de lesa humanidad. Seguimiento de las audiencias en vivo. Análisis de la velocidad de los debates. Los juicios en datos.">
<meta property="og:locale" content="es_ES">
<meta property="og:image" content="/images/imagen_paralink.jpg">
<meta property="article:published_time" content="2021-04-26T03:00:00.000Z">
<meta property="article:modified_time" content="2021-04-26T03:00:00.000Z">
<meta property="article:author" content="Secretaria de Derechos Humanos de la Nación, Argentina">
<meta name="twitter:card" content="summary">
<meta name="twitter:image" content="/images/imagen_paralink.jpg">


  

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

<body ng-app="genApp">
    <div id="root">
        <?php $currentPage = "inicio"; ?>
        <?php include_once('./secciones/header.php');  ?>
        <?php include_once('./secciones/banner.php');  ?>
        <?php include_once('./secciones/micro-relatos-carousel.php');  ?> 
        <?php include_once('./secciones/agenda.php');  ?>
        <?php include_once('./secciones/metrics.php');  ?>
        <?php include_once('./secciones/temas.php');  ?>
        <?php include_once('./secciones/durations.php');  ?> 
        <?php include_once('./secciones/people.php');  ?>
        <?php include_once('./secciones/juicios-detalles.php'); ?> 
        <?php //include_once('./secciones/condemned.php');  ?>
        <?php include_once('./secciones/footer.php');  ?>

                
    </div>

</body>

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

    <script src="scripts/sections/home/home.ctrl.js"></script>
    <script src="scripts/sections/home/metrics.ctrl.js"></script>
    <script src="scripts/sections/home/durations.ctrl.js"></script>
    <script src="scripts/sections/home/people.ctrl.js"></script>

    <script src="scripts/sections/home/durationsMetrics.ctrl.js"></script>

    <script src="scripts/sections/home/agenda.ctrl.js"></script>
    <script src="scripts/sections/home/temas.ctrl.js"></script>
    <script src="scripts/sections/home/juicios.ctrl.js"></script>
    <script src="scripts/sections/home/microrrelatos.ctrl.js"></script>

    <script src="scripts/services/med.fct.js"></script>
    <!-- ======================================================================= -->
    <!-- DIRECTIVES -->
    <!-- ======================================================================= -->
    
  <script type="text/javascript" src="scripts/main.js"></script>
  
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GCYLV8CS1Y"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GCYLV8CS1Y');
</script>

</html>