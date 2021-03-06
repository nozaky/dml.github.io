<?php

if(isset($_GET['lang'])){
  $file = './lang/'.$_GET['lang'].'.php';
}else{
  $_GET['lang'] = 'es';
  $file = './lang/'.$_GET['lang'].'.php';
}
require $file;

?>

<!DOCTYPE html>
<html lang="<?php echo $_GET['lang']?>">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $lang['titulo']?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon1.png" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.7.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html"><?php echo $lang['nombre'].' '.$lang['apel_1'].' '.$lang['apel_2']?></a></h1>
        <div class="social-links mt-3 text-center">
         <!-- ========= When translate finished then quit comment lines ==========
          <a href="?lang=es" class="twitter"><span>ES</span></a>
          <a href="?lang=en" class="facebook"><span>EN</span></a> -->
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span><?php echo $lang['inicio']?></span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span><?php echo $lang['acerca_de']?></span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span><?php echo $lang['cv']?></span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1><?php echo $lang['nombre'].' '.$lang['apel_1'].' '.$lang['apel_2']?></h1>
      <p><?php echo $lang['soy']?><span class="typed" data-typed-items="<?php echo $lang['oficio']?>"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2><?php echo $lang['acerca_de']?></h2>
          <p><?php echo $lang['acerca_p1']?></p>
          <p><?php echo $lang['acerca_p2']?></p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3><?php echo $lang['oficio']?></h3>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php echo $lang['linkedin']?>:</strong> <a href="https://www.linkedin.com/in/daniel-montero-l??pez-DML/" target="_blank"><span>daniel-montero-lopez</span></a></li>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php echo $lang['movil']?>:</strong> <span>+34 649 038 354</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php echo $lang['ciudad']?>:</strong> <span>Madrid</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php echo $lang['edad']?>:</strong> <span>26</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php echo $lang['estudios']?>:</strong> <span><?php echo $lang['v_estudios']?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php echo $lang['email']?>:</strong> <span>dan.montero.lopez@gmail.com</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2><?php echo $lang['habilidades']?></h2>
          <p><?php echo $lang['habilidades_p1']?></p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-4" data-aos="fade-up">

            <div class="progress">
              <span class="skill">Selenium <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Appium <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Cypress <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">UFT <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Postman <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">Java <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Javascript <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">VisualBasic Script <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python <i class="val">30%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">HTML / PHP / CSS <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">Jira/Zephyr/Xray (API)<i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">ALM <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Testlink / Mantis (API)<i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>CV</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Resumen</h3>
            <div class="resume-item pb-0">
              <h4>Daniel Montero</h4>
              <p><em>Senior QA Automation tester con 5 a??os de experiencia en el sector trabajando en proyectos para empresas como Naturgy, Repsol, Santander, Unilever...</em></p>
              <ul>
                <li>Madrid (Espa??a)</li>
                <li>(34) 649 038 354</li>
                <li>dan.montero.lopez@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Estudios</h3>
            <div class="resume-item">
              <h4>Grado Superior en Desarrollo de Aplicaciones Web</h4>
              <h5>2018 - 2019</h5>
              <p><em>Ilerna Online</em></p>
              <p>Desarrollar, implantar, y mantener aplicaciones web, con independencia del modelo empleado y
                utilizando tecnolog??as espec??ficas, garantizando el acceso a los datos de forma segura y cumpliendo
                los criterios de accesibilidad, usabilidad y calidad exigidas en los est??ndares establecidos.</p>
            </div>
            <div class="resume-item">
              <h4>Certificado ISTQB - Foundation Level</h4>
              <h5>2018</h5>
            </div>
            <div class="resume-item">
              <h4>Grado Superior en Desarrollo de Aplicaciones Multiplataforma</h4>
              <h5>2015 - 2017</h5>
              <p><em>Centro Cultural Salmantino</em></p>
              <p>Desarrollar, implantar, documentar y mantener aplicaciones inform??ticas multiplataforma, utilizando
                tecnolog??as y entornos de desarrollo espec??ficos, garantizando el acceso a los datos de forma segura
                y cumpliendo los criterios de ??usabilidad?? y calidad exigidas en los est??ndares establecidos</p>
            </div>
            <div class="resume-item">
              <h4>Grado medio en Sistemas Microinform??ticos y Redes</h4>
              <h5>2012 - 2014</h5>
              <p><em>Centro Cultural Salmantino</em></p>
              <p>Instalar, configurar y mantener sistemas microinform??ticos, aislados o en red, as?? como redes locales
                en peque??os entornos, asegurando su funcionalidad y aplicando los protocolos de calidad, seguridad
                y respeto al medio ambiente establecidos. Podr?? ejercer su actividad, principalmente, en empresas del
                sector servicios que se dediquen a la comercializaci??n, montaje y reparaci??n de equipos, redes y
                servicios microinform??ticos en general, como parte del soporte inform??tico de la organizaci??n o en
                entidades de cualquier tama??o y sector productivo que utilicen sistemas microinform??ticos y redes de
                datos para su gesti??n</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Experiencia Profesional</h3>
            <div class="resume-item">
              <h4>Senior QA Automation Tester</h4>
              <h5>2021 - Actualmente</h5>
              <p><em>Izertis</em></p>
              <ul>
                <li>Testing en dispositivos android e IOS para la aplicaci??n de Oysho (Inditex)</li>
                <li>Uso de appium y Java para el desarrollo de scripts adem??s de Gitlab y Github como repositorios de c??digo.</li>
                <li>Uso de cypress para testing de las web de Inditex</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>JUNIOR ANALYST - Ciberseguridad</h4>
              <h5>2020 - 2021</h5>
              <p><em>NTT Data (Spain)</em></p>
              <ul>
                <li>An??lisis y revisi??n de vulnerabilidades, as?? como soporte para mitigarlas.</li>
                <li>Metodolog??as SSDLC donde aplicar aplicar seguridad al c??digo.</li>
                <li>Detecci??n de buenas pr??cticas y c??mo detectar vulnerabilidades en c??digo.</li>
                <li>Utilizaci??n de herramientas SAST y DAST.</li>
                <li>Amplio conocimiento en Vulnerabilidades TOP 10 de OWASP, CWE y CVE as?? como SANS 25</li>
                <li>Metodolog??as OWASP, laboratorios de aprendizaje.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>QA Automation Tester</h4>
              <h5>2020 - 2020</h5>
              <p><em>NTT DATA (Spain)</em></p>
              <ul>
                <li>Uso de tecnolog??as basadas en Angular JS</li>
                <li>Framwork de automatizaci??n realizado con Protractor, Cucumber, Gherkin, y desarrollo de scripts con TypeScript.</li>
                <li>Uso de reporte con Allure.</li>
                <li>Desarrollo de reporte a herramientas externas como JIRA para el resultado de los test automatizados</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Java Developer</h4>
              <h5>2019 - 2020</h5>
              <p><em>NTT DATA (Spain)</em></p>
              <ul>
                <li>Desarrollo completo con lenguaje Java y uso de selenium</li>
                <li>Uso de IA para predicci??n de elementos html</li>
                <li>Desarrollo aplicado a mejora del framework selenium java</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Full Stack Developer</h4>
              <h5>2018 - 2019</h5>
              <p><em>NTT DATA (Spain)</em></p>
              <ul>
                <li>Desarrollo de framework para testing, usando tecnolog??as como PHP, Java, VBScript implementando en la herramienta
                  conexiones via API con herramientas de reporte como Testlink, mantis, Jira, Zephyr, ALM o TFS.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>QA Automation Tester</h4>
              <h5>2017 - 2018</h5>
              <p><em>NTT DATA (Spain)</em></p>
              <ul>
                <li>Testear webs y aplicaciones haciendo uso de los frameworks de Selenium y UFT.</li>
                <li>Uso de herramientas de reporte como Testlink, Mantis, Jira o Zephyr.</li>
                <li>Programaci??n de Scripts para el testeo de aplicaciones.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>