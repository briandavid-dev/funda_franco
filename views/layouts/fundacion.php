<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\FundacionAsset;
use yii\helpers\Url;

FundacionAsset::register($this);

$theme = $this->theme;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php print Url::base(true).'/web/resources/images/logos/bmosoluciones.ico'; ?>" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="main-header">

        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                             <li> <i class="fa fa-envelope"></i> <a href="#">fundacion.franco@gmail.com</a> </li>
                       </ul> <!-- /.header-contact  -->

                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">
                    		<li> <a href="<?php print Url::to(["site/login"]); ?>">Iniciar Sesión</a> </li>
                      		<li> <a href="#">Contáctenos</a> </li>
                            <li> <a href="#"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="fa fa-twitter"></i>  </a> </li>
                            <!--li> <a href="#"> <i class="fa fa-google"></i>  </a> </li-->
                            <li> <a href="#"> <i class="fa fa-youtube"></i>  </a> </li>
                            <!--li> <a href="#"> <i class="fa fa fa-pinterest-p"></i>  </a> </li-->
        				</ul> <!-- /.header-social  -->

                    </div>

                  </div>
              </div>

            </div>

            <div class="navbar-main">

              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
  					<!--a   class="navbar-brand" href="<?php print Url::to(["site/index"]); ?>"><img src="assets/images/sadaka-logo.png"   alt=""></a-->
                  <a   class="navbar-brand" href="<?php print Url::to(["site/index"]); ?>"><img src="<?php print $theme->getUrl("html/assets/images/logo/LOGO-FRANCO-blanco.png"); ?>"  style="max-width85px; height:38px; =" alt=""></a>

                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <!-- <li><a class="is-active" href="<?php print Url::to(["site/index"]); ?>">Inicio</a></li> -->
                    <li><a href="#">Nosotros</a></li>

                    <li class="has-child"><a href="#">Planes</a>

                      <ul class="submenu">
                         <li class="#"><a href="#">Proyectos </a></li>
                         <li class="#"><a href="#">Programas</a></li>
                      </ul>

                    </li>

                    <li><a href="#">Cursos</a></li>
                    <li><a href="#">Emprendedores</a></li>
                    <li><a href="#">Historia y testimonios</a></li>
                    <li class="has-child"><a href="#">Colaboradores</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="#">Aliados </a></li>
                         <li class="submenu-item"><a href="#">Patrocinantes </a></li>
                      </ul>

                    </li>

                    <li><a href="#">Donaciones</a></li>
                    <li><a href="#">Eventos y Noticias</a></li>

                    <!--li class="has-child"><a href="#">PLANES</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="causes.html">Causes list </a></li>
                         <li class="submenu-item"><a href="causes-single.html">PROYECTOS </a></li>
                         <li class="submenu-item"><a href="causes-single.html">PROGRAMAS</a></li>
                      </ul>

                    </li>
                    <li><a href="gallery.html">GALLERY</a></li>
                    <li><a href="contact.html">CONTACT</a></li-->

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->

            </div> <!-- /.navbar-main -->


        </nav>

    </header> <!-- /. main-header -->


	<div class="container">
		<div>&nbsp;</div>
		<div class="row">
			<div class="col-md-9">
    <!-- Carousel
    ================================================== -->
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner" role="listbox">

            <div class="item active">

              <img src="<?php print $theme->getUrl("html/assets/images/slider/fondo-franco01.jpg"); ?>" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <!--h2 class="carousel-title bounceInDown animated slow">Porque estamos para ayudarte</h2-->
                  <!--h4 class="carousel-subtitle bounceInUp animated slow ">Formando lideres comunitarios y emprendedores</h4-->
                  <!--a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" >Registrate</a-->

                </div> <!-- /.carousel-caption -->

              </div>

            </div> <!-- /.item -->


            <div class="item ">

              <img src="<?php print $theme->getUrl("html/assets/images/slider/fondo-franco02.jpg"); ?>" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <!--h2 class="carousel-title bounceInDown animated slow">Together we can improve their lives</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow"> So let's do it !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" >DONATE NOW</a-->

                </div>

              </div>

            </div>



            <div class="item ">

              <img src="<?php print $theme->getUrl("html/assets/images/slider/fondo-franco03.jpg"); ?>" alt="">

              <div class="container">

                <div class="carousel-caption">

                  <!--h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" >DONATE NOW</a-->

                </div>

              </div>

            </div>

          </div>

          <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>

          <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>

    </div><!-- /.carousel -->
    
    		</div>
			<div class="col-md-3">
				<img src="<?php print $theme->getUrl("html/assets/images/slider/lateral1.jpg"); ?>" alt="" style="max-width: 100%;">
				<div>&nbsp;</div>
				<img src="<?php print $theme->getUrl("html/assets/images/slider/lateral2.jpg"); ?>" alt="" style="max-width: 100%;">
				<div>&nbsp;</div>
				<img src="<?php print $theme->getUrl("html/assets/images/slider/lateral3.jpg"); ?>" alt="" style="max-width: 100%;">
				<div>&nbsp;</div>
				<img src="<?php print $theme->getUrl("html/assets/images/slider/lateral4.jpg"); ?>" alt="" style="max-width: 100%;">
			</div>
    	</div>
    </div>
    
    
    
    <div class="section-home our-causes animate-onscroll fadeIn">

        <div class="container">
			<h3 class="title-style-1- text-center">Propósitos y objetivos <span class="title-under"></span></h3>

            <div class="row">
				
                <div class="col-md-12 col-sm-12 text-center" style="font-size: 15px;">
                	<p>Desarrollar en las comunidades talleres de formación y capacitación, brindando las herramientas necesarias de superación personal para mayor crecimiento económico, social, incluyente y formativo.</p>
					
					<p>Aumentar la fortaleza en las comunidades más vulnerables mediante el empoderamiento y emprendimiento, para impulsar cambios positivos y reforzar la confianza en las propias capacidades con una participación inclusiva y sostenible, enfocada en la autogestión de las propias necesidades a través del estudio y capacitación.</p>
				</div>
			</div>
		</div>
	</div>
	

    <div class="section-home about-us fadeIn animated">

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-sm-6">

                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="<?php print $theme->getUrl("html/assets/images/icons/1.png"); ?>" alt="" style="width: 90px; border: 0px red solid;">
                        </div>
                        <h3 class="col-title">EDUCACIÓN</h3>
                        <div class="col-details">

                          <!--p></p-->

                        </div>
                        <!--a href="#" class="btn btn-primary"> Read more </a-->

                  </div>

                </div>


                <div class="col-md-3 col-sm-6">

                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="<?php print $theme->getUrl("html/assets/images/icons/2.png"); ?>" alt="" style="width: 60px; border: 0px red solid;">
                        </div>
                        <h3 class="col-title">EMPODERAMIENTO</h3>
                        <div class="col-details">

                          <!--p>.</p-->

                        </div>
                        <!--a href="#" class="btn btn-primary"> Read more </a-->

                  </div>

                </div>


                <div class="col-md-3 col-sm-6">

                  <div class="about-us-col">

                        <div class="col-icon-wrapper">
                          <img src="<?php print $theme->getUrl("html/assets/images/icons/3.png"); ?>" alt="" style="width: 90px; border: 0px red solid;">
                        </div>
                        <h3 class="col-title">EMPRENDIMIENTO</h3>
                        <div class="col-details">

                          <!--p></p-->

                        </div>
                        <!--a href="#" class="btn btn-primary"> Read more </a-->

                  </div>

                </div>

                <div class="col-md-3 col-sm-6">
                  <div class="about-us-col">
                        <div class="col-icon-wrapper">
                          <img src="<?php print $theme->getUrl("html/assets/images/icons/programs-icon.png"); ?>" alt="" style="border: 0px red solid;">
                        </div>
                        <h3 class="col-title">INCLUSIÓN</h3>
                        <div class="col-details">

                          <!--p><stron><i>Mujeres con propositos:</i></strong> que tiene como misión promover la conformación de redes productivas, desarrollando las capacidades emprendedoras y el valor integral de la mujer.</p-->

                        </div>
                        <!--a href="#" class="btn btn-primary"> Read more </a-->

                  </div>
                </div>
            </div>

        </div>

    </div> <!-- /.about-us -->
    
    


    <div class="section-home our-causes animate-onscroll fadeIn">

        <div class="container">

            <h3 class="title-style-1- text-center">Proyectos y programas <span class="title-under"></span></h2>

            <div class="row">

                <div class="col-md-4 col-sm-4">

                    <div class="cause">

                        <h4 class="cause-title"><a href="#">Mujeres con Propósitos </a></h4>
                        <div class="cause-details">
                            Mediante el programa mujeres con propósito promovemos la conformación de redes productivas, desarrollando las capacidades emprendedoras y el ...
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" > Leer más</a>

                        </div>



                    </div> <!-- /.cause -->

                </div>

                <div class="col-md-4 col-sm-4">

                    <div class="cause">

                        <h4 class="cause-title"><a href="#">Tesoros para la Vida</a></h4>
                        <div class="cause-details">
                            Dirigido a amas de casa, estudiantes, profesionales con o sin empleo, emprendedores y público en general; fue creado para promover la reflexión y ...
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" > Leer más</a>

                        </div>



                    </div> <!-- /.cause -->

                </div>


                <div class="col-md-4 col-sm-4">

                    <div class="cause">

                        <h4 class="cause-title"><a href="#">Aprender Jugando</a></h4>
                        <div class="cause-details">
                            Dirigido a niños y niñas entre 3 - 6 años de edad, con la finalidad de potenciar sus habilidades para el razonamiento lógico y creativo, así como para ...
                        </div>

                        <div class="btn-holder text-center">

                          <a href="#" class="btn btn-primary" data-toggle="modal" > Leer más </a>

                        </div>



                    </div> <!-- /.cause -->

                </div>


            </div>

        </div>

    </div> <!-- /.our-causes -->





<!--
    <div class="section-home our-sponsors animate-onscroll fadeIn">

        <div class="container">

            <h2 class="title-style-1">Aliados y Patrocinantes  <span class="title-under"></span></h2>

            <ul class="owl-carousel list-unstyled list-sponsors">

              <li> <img src="<?php print $theme->getUrl("html/assets/images/sponsors/bus.png"); ?>" alt=""></li>
              <li> <img src="<?php print $theme->getUrl("html/assets/images/sponsors/wikimedia.png"); ?>" alt=""></li>
              <li> <img src="<?php print $theme->getUrl("html/assets/images/sponsors/one-world.png"); ?>" alt=""></li>
              <li> <img src="<?php print $theme->getUrl("html/assets/images/sponsors/wikiversity.png"); ?>" alt=""></li>
              <li> <img src="<?php print $theme->getUrl("html/assets/images/sponsors/united-nations.png"); ?>" alt=""></li>

              <li> <img src="<?php print $theme->getUrl("html/assets/images/sponsors/bus.png"); ?>" alt=""></li>
              <li> <img src="<?php print $theme->getUrl("html/assets/images/sponsors/wikimedia.png"); ?>" alt=""></li>
              <li> <img src="<?php print $theme->getUrl("html/assets/images/sponsors/one-world.png"); ?>" alt=""></li>
              <li> <img src="<?php print $theme->getUrl("html/assets/images/sponsors/wikiversity.png"); ?>" alt=""></li>
              <li> <img src="<?php print $theme->getUrl("html/assets/images/sponsors/united-nations.png"); ?>" alt=""></li>

            </ul>

        </div>

    </div>  
 -->
 
 	<div class="container text-center">
		<h3 class="title-style-1- text-center">Aliados y Patrocinantes  <span class="title-under"></span></h2>
 		<img src="<?php print $theme->getUrl("html/assets/images/logo/logoavm.png"); ?>" alt="" style="width: 100px; max-width: 100%;">
 	</div>


	<div>&nbsp;</div>


    <footer class="main-footer">

        <div class="footer-top">

        </div>


        <div class="footer-main">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-col">
                            <h4 class="footer-title-">Nosotros<span class="title-under"></span></h4>
                            <div class="footer-content">
                                <p>
                                    <strong>Fundación Franco</strong> es una institución sin fines de lucro que se constituyó para fomentar un mayor Desarrollo social a través de la  educación, empoderamiento, emprendimiento e inclusión
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="footer-col">
                            <h4 class="footer-title-">Nuestros Ideales <span class="title-under"></span></h4>
                            <div class="footer-content">
                                <ul class="tweets list-unstyled">
                                    <li class="tweet">
                              		 	Ser un referente en motivar a ese ser que vive en cada persona, la seguridad en si mismo, el orgullo de surgir, soñar, realizarse. Demostrar que ¡Si podemos!!!
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title-">Contáctenos <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form">

                                    <div class="footer-form" >

                                    <form action="php/mail.php" class="ajax-form">

                                        <div class="form-group">
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                                        </div>

                                         <div class="form-group">
                                            <input type="email" name="correo" class="form-control" placeholder="Correo" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="mensaje" class="form-control" placeholder="Mensaje" required></textarea>
                                        </div>

                                        <div class="form-group alerts">

                                            <div class="alert alert-success" role="alert">

                                            </div>

                                            <div class="alert alert-danger" role="alert">

                                            </div>

                                        </div>

                                         <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">enviar mensaje</button>
                                        </div>

                                    </form>

                                </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>


            </div>


        </div>

        <div class="footer-bottom">
            <div class="container text-center"style="padding-top: 7px; padding-bottom: 7px; ">
              	Fundación Franco RIF: J-40371513-0
            </div>
            <div class="container text-center"style="padding-top: 7px; padding-bottom: 7px; ">
              	Desarrollado por <a href="http://www.bmosoluciones.com" target="_blank">BMO Soluciones Tecnológicas, C.A</a>
            </div>
        </div>

    </footer> <!-- main-footer -->




    <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">Registrarse</h4>
          </div>
          <div class="modal-body">

                <form class="form-donation">

                        <h3 class="title-style-1 text-center">Gracias por registrarse <span class="title-under"></span>  </h3>

                        <div class="row">

                            <div class="form-group col-md-12 ">
                                <input type="text" class="form-control" id="amount" placeholder="Usuario">
                            </div>

                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="firstName" placeholder="Nombre*">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="lastName" placeholder="Apellido*">
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="email" placeholder="Correo">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="phone" placeholder="Telefono">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="address" placeholder="Direccion">
                            </div>

                        </div>


                        <div class="row">

                            <div class="form-group col-md-12">
                                <textarea cols="30" rows="4" class="form-control" name="note" placeholder="Comentario"></textarea>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" name="donateNow" >Registrarse</button>
                            </div>

                        </div>





                </form>

          </div>
        </div>
      </div>

    </div> <!-- /.modal -->



<!--  

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?php print Yii::$app->params['panelClienteNombre']; ?> <?= date('Y') ?></p>

        <p class="pull-right">BMO Soluciones Tecnológicas C.A. 
	    	<strong><a href="http://bmosoluciones.com" target="_blank">www.bmosoluciones.com</a>.</strong> 
	    	</p>
    </div>
</footer>

-->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
