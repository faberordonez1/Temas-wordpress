<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrapt  CSS-->

    <!-- Archivo Local  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CDN -->
   <!--    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
    crossorigin="anonymous"
  /> -->

    <!-- Style -->
  <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
    <!-- <h3> <?php echo bloginfo('template_url');?></h3> // Prueba print ruta-->

    <!-- Navbar -->
     <div class="container-fluid bg-dark">  <!--2-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container"><!--2-->
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"><!--5-->
                Bootstrap
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav text-center"> <!--4-->
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <!-- Fin navbar -->

    <!-- Formulario Suscribir -->
    <div class="container-fluid suscribir d-flex flex-column justify-content-center align-items-center"><!-- 1 y 5-->
      <div class="text-center"><!-- 3 y 4-->
        <h1 class="display-4 text-white">Lorem ipsum dolor</h1><!-- 6-->
      </div>
       
      <!-- Input -->
      <form action="" class="d-flex flex-column flex-sm-row"> <!--1, 6 y 7 Input-->
        <div class="form-group mb-3 me-sm-3"> <!-- 2,9,10 input-->
          <input type="text" placeholder="nombre" class="form-control"><!-- 3 input-->
        </div>
        <div class="form-group mb-3 me-sm-3"><!-- 4 input-->
          <input type="text" placeholder="Email" class="form-control">
        </div>
        <div class="form-group mb-3 me-sm-3"><!-- 5 input-->
          <input type="submit" class="form-control btn btn-primary" value="Enviar">
        </div>
      </form>  <!--fin Input -->
    </div>
    <!--Fin suscribir-->
