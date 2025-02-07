<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="icon.png">
  <title>Doc. Digital</title>

  <!-- CSS Files -->

  <!--     Fonts and icons     -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;500;700;800&display=swap" rel="stylesheet"> 

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/styles/soft-design-system.css?v=1.0.3" rel="stylesheet" />
  <!-- Hover css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" integrity="sha512-csw0Ma4oXCAgd/d4nTcpoEoz4nYvvnk21a8VA2h2dzhPAvjbUIK6V3si7/g/HehwdunqqW18RwCJKpD7rL67Xg==" crossorigin="anonymous" />

  <!-- custom -->
  <link rel="stylesheet" href="assets/styles/site.css" />
  <link rel="stylesheet" href="assets/styles/animations.css" />

</head>

<body class="animate animationfadeIn">
  <!-- Nav -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav
          class="navbar navbar-expand-lg bg-white roudedNav top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder homeB preDef" href="#home" rel="tooltip" title="Sactiva"
              data-placement="bottom">
              <img class="navimg" href="index" src="platform/assets/img/Logo-SAC.png" />
            </a>


            <!-- Menu responsive -->
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
              data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>


            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100 navigation" id="navigation">
              <ul class="navbar-nav text-center align-items-center w-100">
                <li class="nav-item mx-2">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center navHover preDef"
                    id="plataformasNav" href="#plataformas">
                    Plataformas
                  </a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center navHover preDef"
                    id="noticasNav" href="#noticias">
                    Noticias
                  </a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center navHover preDef"
                    id="contactoNav" href="#contacto">
                    Contacto
                  </a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center navHover"
                    id="quienNav" href="https://sactiva.com/Nosotros.html#gsc.tab=0" target="_blank" >
                    ¿Quién es Sactiva?
                  </a>
                </li>
              </ul>

              <div class="col-lg-2 ms-lg-auto d-flex justify-content-center mt-3 mt-lg-0">
                <div class="dropdown">
                  <a class="btn bg-gradient-info dropdown-toggle btn-round m-0" type="button" id="iniciarS"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Iniciar Sesión
                  </a>
                  <ul class="dropdown-menu px-2 py-3 hidden" aria-labelledby="iniciarS">
                    <li><a class="dropdown-item border-radius-md" href="platform/login?user=doctor">
                        <div class="d-flex">
                          <div class="icon h-10 me-3 mt-1"><i class="fas fa-user-md"></i></div>
                          <h6
                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                            Doctor</h6>
                        </div>
                      </a></li>
                    <li><a class="dropdown-item border-radius-md" href="platform/login?user=paciente">
                        <div class="d-flex">
                          <div class="icon h-10 me-3 mt-1"><i class="fas fa-user"></i></div>
                          <h6
                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                            Paciente</h6>
                        </div>
                      </a></li>
                  </ul>
                </div>
              </div>

              
            </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <!-- Nav -->

  <!-- Header -->
  <header class="bg-gradient-dark" id="home">
    <div class="page-header section-height-75" style="background-image: url('assets/img/bg-header.jpg');">
      <span class="mask bg-gradient bgBlue opacity-8"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center mx-auto my-auto">
            <h1 class="text-white">DocDigital</h1>
            <p class="mb-4 text-white">Doctor Digital, es la aplicación web de video-consulta médica que te
              permitirá</br>
              obtener una orientación médica de
              forma privada y segura. Así evitarás desplazamientos y esperas.</p>
            <a href="platform/create-account?user=paciente" class="btn bg-white text-dark">Crear Cuenta</a>
          </div>
        </div>
      </div>
      <div class="position-absolute w-100 z-index-1 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1" />
          </g>
        </svg>
      </div>
    </div>
  </header>
  <!-- End Header -->

  <!-- Content -->
  <main role="main" class="my-7">
    <div class="container">
      <!-- Presentation -->
      <div class="row">
        <!-- Content -->
        <div class="col-sm-6">
          <h2 class="display-5 textBold2">
           La atención medica en línea es el
            <span class="text-success">futuro</span><span
              class="text-success typed-cursor typed-cursor--blink">!</span>
          </h2>
          <p class="lead">Conoce a nuestro equipo médico y recibe la atención especializada que te mereces.</p>
          <div class="col-sm-8 mr-auto ml-auto d-block d-sm-none" style="height: 20px"></div>
        </div>
        <!-- End Content -->

        <!-- img Shape -->
        <figure class="col-sm-6">
          <g>
            <image class="mx-auto d-block imgfluid" src="platform/assets/img/Sactdocfble.jpg"></image>
          </g>
        </figure>
        <!-- End img Shape -->
      </div>
    </div>
  </main>

  <!-- Plataformas -->
  <section class="my-6 SacdocF" id="plataformas">
    <div class="container-fluid">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7 text-center">
            <!-- Heading -->
            <h2 class="sactext">
              DocDigital
            </h2>

            <!-- Text -->
            <p class="sactexta">
              Las vídeo-consultas realizadas por profesionales rompen la barrera virtual, el trato es personal y
              específico, hace que el profesional pueda obtener más información sintomática en comparación con un
              médico virtual automatizado con unas respuestas estándar.
            </p>
            <div class="col-sm-8 mr-auto ml-auto d-block d-sm-none" style="height: 20px"></div>
          </div>
        </div> <!-- / .row -->
        <div class="row">

          <div class="col-12 col-lg-6 d-lg-flex pb-1 mb-4">
            <!-- Card -->
            <a href="platform/create-account?user=doctor" class="hvr-pulse-shrink">
              <div class="card h-100">
                <div class="row align-items-center">
                  <div class="col-md-4">
                    <!-- Image -->
                    <img src="platform/assets/img/SactivaDocdig.jpg" class="mx-auto d-block img-fluid" alt="...">
                  </div>
                  <div class="col-md-8">

                    <!-- Body -->
                    <div class="card-body">
                      <!-- Heading -->
                      <h4 class="font-weight-bold">
                        DocDigital – Doctor
                      </h4>
                      <div class="col-sm-8 mr-auto ml-auto d-block d-sm-none" style="height: 20px"></div>

                      <!-- Text -->
                      <p class="text-muted mb-0">
                        Como doctor puedes ampliar tus ingresos, mediante la atención en línea de pacientes.
                      </p>

                    </div>

                  </div>
                </div> <!-- / .row -->
              </div>
            </a>
          </div>


          <div class="col-12 col-lg-6 d-lg-flex pb-1 mb-4">
            <!-- Card -->
            <a href="platform/create-account?user=paciente" class="hvr-pulse-shrink">
              <div class="card h-100">
                <div class="row align-items-center">
                  <div class="col-md-8">

                    <!-- Body -->
                    <div class="card-body">

                      <!-- Heading -->
                      <h4 class="font-weight-bold">
                        DocDigital – paciente
                      </h4>

                      <!-- Text -->
                      <p class="text-muted mb-0">
                        Concacta a tu doctor de preferencia, realiza tu consulta medica sin
                        importar dónde estés y recibir una solución a tus padecimientos.
                      </p>

                    </div>

                  </div>
                  <div class="col-md-4">

                    <!-- Image -->
                    <img src="platform/assets/img/SactivaDocdig1.jpg" class="mx-auto d-block img-fluid left-0" alt="...">
                  </div>
                </div> <!-- / .row -->
              </div>
            </a>
          </div>

        </div> <!-- / .row -->
      </div>
    </div>
  </section>

  <!-- Info -->

  <section class="my-5" id="infoDoc">
    <div class="container-fluid">
      <div class="row">
        <div class="card shadow-light-lg overflow-hidden text-center text-lg-left">
          <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-4">
                  <!-- Image -->
                  <img src="platform/assets/img/SactivaDocDig3.jpg" class="mx-auto d-block img-fluid" alt="...">
                </div>

                <div class="col-md-8">
                  <!-- Body -->
                  <div class="card-body">
                    <!-- Heading -->
                    <h3 class="textBold mb-3">
                      DocDigital
                    </h3>
                    <!-- Text -->
                    <p class="lead mb-0">
                      Es un servicio de interacción digital que te permite hablar con un doctor, disminuye
                      ausencias de
                      trabajo
                      o faltas
                      a la escuela por consultas médicas o esperas largas en el hospital. Recibe tu
                      diagnóstico y
                      tratamiento, además
                      de seguimiento en tiempo real, tú y tu familia estarán siempre protegidos.
                    </p>

                  </div>

                </div>
            </div> <!-- / .row -->
          </div>
        </div>



      </div>
    </div>
  </section>

  <!-- Noticias -->
  <section class="my-5" id="noticias">
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h3 class="Notext text-gradient text-warning">Noticias</h3>
        </div>
        <div class="car-body">
          <div class="rrSS">
            <?php
              function feed($feedURL){
              $i = 0; 
              $url = $feedURL; 
              $rss = simplexml_load_file($url); 
                  foreach($rss->channel->item as $item) { 
                  $link = $item->link;  
                  $title = $item->title;  
                  $date = $item->pubDate;  
                  $guid = $item->guid;  
                  $description = strip_tags($item->description);  
                  if (strlen($description) > 800) { 
                  $stringCut = substr($description, 0, 200);                   
                  $description = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';}
                  if ($i < 16) { 
                  echo 
                  '<div class="listitem" role="option">
                  <img src="platform/assets/img/sacomsnews.png" class="Imgnews d-none d-sm-none d-md-block" alt="">
                  <div class="d-block d-sm-block d-md-none"> <img src="platform/assets/img/sacomsnews.png" class="Imgnewsm mx-auto d-block" alt=""></div>
                  <h5 class="card-title">'.$title.'</h5>
                  <span class="timestamp">'.$date.'</span>
                  </br>
                  <p class="card-text newdes">'.$description.'</p>
                  <a href="'.$link.'" target="_blank" class="btnnoti btn-primary mx-auto d-block">Go!</a>
                  </br>
                    </div>';
                  }
                  $i++;}
                echo '<div style="clear: both;"></div>';}
              ?>
            <?php feed("https://news.un.org/feed/subscribe/es/news/topic/health/feed/rss.xml") ?>
            </rss>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Info Adici -->
  <section class="mt-8">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-12 order-2 order-md-2 order-lg-1">
          <div class="">
            <div class="position-relative ms-lg-5 mb-0 mb-md-7 mb-lg-0 d-none d-lg-block h-75">
              <div class="bg-gradient-info w-100 h-100 border-radius-xl position-absolute d-lg-block d-none" alt=""></div>
              <img src="assets/img/feauter.jpg" class="w-100 border-radius-xl mt-6 ms-lg-5 position-relative z-index-5" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 ms-auto order-1 order-md-1 order-lg-1">
          <div class="p-3 pt-0">
            <h4 class="text-gradient text-danger mb-0"> Manténgase enfocado en su salud.</h4>
            <h4 class="mb-4">La salud es un derecho humano.</h4>
            <p>Si queremos que la salud para todos sea una realidad, necesitamos: personas y comunidades que tengan
              acceso a servicios de salud de alta calidad para que puedan cuidar de su propia salud y de la salud de sus
              familiares; profesionales sanitarios cualificados que proporcionen una atención de calidad centrada en las
              personas; y responsables de la formulación de políticas comprometidos a invertir en la atención primaria
              de la salud. (ONU, 2019)</p>
          </div>

          <div class="row text-center">
            <div class="col-4">
              <h3 class="text-gradient text-info" id="state1" countto="5234">100%</h3>
              <h5>Satisfación</h5>
            </div>
            <div class="col-4">
              <h3 class="text-gradient text-info"><span id="state2" countto="3400">24/7</span>+</h3>
              <h5>Soporte</h5>
            </div>
            <div class="col-4">
              <h3 class="text-gradient text-info"><span id="state3" countto="24">100k+</span></h3>
              <h5>Atenciones</h5>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Contacto -->
  <section class="my-5" id="contacto">
    <div class="container">
      <div class="d-flex justify-content-center flex-column">
        <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-2">
          <div class="text-center">
            <h3 class="text-gradient text-danger">Contactanos</h3>
            <p class="mb-0">
              Tienes alguna duda con el servicio o existe algun problema con la plataforma. Por favor contactanos, te atenderemos lo antes posible.
            </p>
          </div>
          <form role="form" id="contact-form" method="post" autocomplete="off">
            <div class="card-body pb-2">
              <div class="row">
                <div class="col-md-6">
                  <label>Nombre Completo</label>
                  <div class="input-group mb-4">
                    <input class="form-control" placeholder="Nombre Completo" aria-label="Nombre Completo" type="text" name="nombreCompleto">
                  </div>
                </div>
                <div class="col-md-6 ps-md-2">
                  <label>Email</label>
                  <div class="input-group">
                    <input type="email" class="form-control" placeholder="hello@email.com" name="email">
                  </div>
                </div>
              </div>
              <div class="form-group mb-0 mt-md-0 mt-4">
                <label>¿En que te podemos ayudar?</label>
                <textarea name="message" class="form-control" id="message" rows="6"
                  placeholder="Describa su problema en al menos 250 caracteres"></textarea>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn bg-gradient-danger mt-3 mb-0">Enviar Mensaje</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <footer class="footer py-3 bg-gradient bgBlue position-relative overflow-hidden mt-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 me-auto mb-lg-0 my-3 text-lg-left text-center navigation">
          <h6 class="text-white font-weight-bolder text-uppercase mb-lg-4 mb-3">DocDigital | Sactiva </h6>
          <ul class="nav flex-row ms-n3 justify-content-lg-start justify-content-center mb-2 mt-sm-0" >
            <li class="nav-item">
              <a class="nav-link text-white opacity-8 preDef" href="#home">
                Inició
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white opacity-8 preDef" href="#infoDoc">
                Acerca De
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white opacity-8 preDef" href="#plataformas">
                Plataformas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white opacity-8" href="https://sactiva.com/" target="_blank">
                Sactiva
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 ms-auto text-lg-right text-center my-md-3">
          <p class="mb-2 text-lg text-white font-weight-bold">
            Doc digital es una plataforma propiedad de Sactiva.
          </p>
          <a href="" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
            <span class="fab fa-dribbble" aria-hidden="true"></span>
          </a>
          <a href="" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
            <span class="fab fa-twitter" aria-hidden="true"></span>
          </a>
          <a href="" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
            <span class="fab fa-pinterest" aria-hidden="true"></span>
          </a>
          <a href="" target="_blank" class="text-white opacity-5">
            <span class="fab fa-github" aria-hidden="true"></span>
          </a>

         <div class="col-12 my-3">
            <span class="EditlFb"> Doc Digital 2021 /<a class="EditlFb"
              href="https://sactiva.com/Aviso%20de%20Privacidad.html#gsc.tab=0" target="_blank">&nbsp;Aviso de
              privacidad</a></span>
         </div>

          <div class="col-12">
          <p class="text-sm text-white opacity-8 mb-0">
            &copy;Copyright 2021 Sactiva-DocDigital
          </p>
          </div>

        </div>
      </div>
    </div>
  </footer>


  <!-- jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>
  <!-- Modernizr -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
    integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw=="
    crossorigin="anonymous"></script>
    <!-- Bootstrsp js -->
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!-- custom js -->
  <script src="assets/js/site.js"></script>
</body>

</html>