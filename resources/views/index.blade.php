<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Livraison des objets précieux</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Pro<span>Livraison</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#feature">Vous & Nous</a></li>
          <li><a href="#organisations"></a></li>
          <li><a href="#Nos intervations">Nos intervations</a></li>
          <li><a href="#contactez Nous"> Nous contacter</a></li>
          <!--<li> <a href="{{ route('login') }}">Se connecter</a></li>
          <li class="btn-trial"> <a href="{{ route('register') }}">S'inscrire</a></li>-->
                   @auth
                       <li> <a href="{{ url('/home') }}">Mon espace Client</a></li>
                    @else
                       <li> <a href="{{ route('login') }}">Se connecter</a></li>
                       <li class="btn-trial"> <a href="{{ route('register') }}">S'inscrire</a></li>
                    @endauth

          <!--<li><a href="#" data-target="#login" data-toggle="modal">Se connecter</a></li>-->
          <!--<li class="btn-trial"><a href="#footer">S'inscrire</a></li>-->
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Modal box-->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Login</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <div class="form-group">
              <form name="" id="loginForm">
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Sign In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--/ Modal box-->
  <!--Banner-->
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">Pro & Livraison</h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text"><i>Livraison des objets précieux entre particuliers,entreprises et
               <br>organismes publics
            </i></p>
              
              <p class="small-text">Envoyez vos objets précieux en toute serenité  et 
                <br>jusqu'à 80% moins cher, assurance inclue</p>
              <a href="{{ url('objet') }}" class="btn get-quote">Passer la commande</a>
            </div>
            <a href="#feature" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->
  <!--Feature-->
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Admin</button>
<a href="users">ici</a>
            </div>
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Ce qui nous répresente</h2>
          
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>CONVIVIAL</h4>
                <p>Rendre service et partager ses frais.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-css3"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>SECURISE</h4>
                <p>Assurance incluse jusqu'à 2000€</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-drupal"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>DISPONIBLE</h4>
                <p>Vous servir restera toujours notre plaisir</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-trophy"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ feature-->
  <!--Organisations-->
  <section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>65%</h3>
              <p>Ont dit oui!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>15%</h3>
              <p>Ont dit Non!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>20%</h3>
              <p>Ont dit Oui mais...!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt"> est ce que ProLivraison est bien à votre service?</h3>
              <h4 class="sm-txt">(Revision et Mise à jour tous les mois)</h4>
            </hgroup>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Organisations-->
  <!--Cta-->
  <!-- <section id="cta-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="text-center">Subscribe Now</h2>
          <p class="cta-2-txt">Sign up for our free weekly software design courses, we’ll send them right to your inbox.</p>
          <div class="cta-2-form text-center">
            <form action="#" method="post" id="workshop-newsletter-form">
              <input name="" placeholder="Enter Your Email Address" type="email">
              <input class="cta-2-form-submit-btn" value="Subscribe" type="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!--/ Cta-->
  <!--work-shop
  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
         
       <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-html5 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor HTML5 Workshop</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-css3 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor CSS3 Workshop</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-joomla color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor Joomla Workshop</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!--/ work-shop-->
  <!--Faculity member-->
  <section id="faculity-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Renconter nos facilitateurs </h2>
          <p>Si vous constater des annomalies au cours de vos trajets nos équipes son là pour vous faciliter,<br> n'hesitez pas à les informer immediatement</p>
          <hr class="bottom-line">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/moussa.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Moussa Ambidina</p>
              <p class="pm-staff-profile-title">Ingenieur Product Owner</p>

              <p class="pm-staff-profile-bio">Chef de projet chez ProLivraison. En tant qu'expert, il s'occupe de vous suivre en ligne sur vos commandes dès le debut jusqu'à la fin </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/fatou.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Fatou Diallo</p>
              <p class="pm-staff-profile-title">Expert comptable</p>

              <p class="pm-staff-profile-bio">Directrice de projet chez ProLivraison. En tant qu'expert, elle s'occupe de vous suivre en ligne sur vos commandes dès le debut jusqu'à la fin </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="img/ebra.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Ebrahim Ouadoud</p>
              <p class="pm-staff-profile-title">Webmarkerteur </p>

              <p class="pm-staff-profile-bio">Responsable marketing  chez ProLivraison. En tant qu'expert, il s'occupe de vous suivre en ligne sur vos commandes dès le debut jusqu'à la fin. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Faculity member-->
  <!--Testimonial-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2 class="white">Voyez ce que disent nos clients ?</h2>
          <p class="white">Note moyenne de nos clients 4.9/5,<br> 4.9/5</p>
          <hr class="bottom-line bg-white">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">Acheminement effectué dans de bonnes conditions et sans problèmes, Said a été très aimable, ponctuel. Un service super !

            <p class="text-name"><i>Genevieve M.</i>

             <p class="text-par">Super sympa. Une première expérience au top. 100% confiance

            <p class="text-name"><i>Matthieu L.</i>

       
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">1er essai que ce soit pour les personnes qui nous ont apporté l'objet ou pour nous, très contents de l'échange, personnes très sympathiques et très fiables+++ A conseiller
             <p class="text-name"><i>Isabelle Y.</i>

            <p class="text-par">Super sympa, parfait pour tout
             <p class="text-name"><i>Isabelle S.</i>
              
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonial-->
  <!--Courses-->
  <section id="Nos intervations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Interventions</h2>
          <p>Nous intervenons dans le transport d’objets précieux (Objets de grande valeur :<br> piano, œuvres d’art, meubles anciens…)</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/photo.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/tableau.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/course01.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/tableau.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/montre.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="img/arpe.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!--/ Courses-->
  <!--Pricing-->
  <section id="pricing" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Nos Prix</h2>
          <p>Chez ProLivraison, service s'écrit avec un grand « S ». C'est pourquoi nous vous proposons un grand nombre de possibilités de paiement différentes. 
,<br> Certains modes de paiement peuvent ne pas être disponibles. Merci de votre compréhension.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Paiement anticipé</h4>
              <p>Lors du paiement anticipé, vous recevrez un lien vers le compte Lesara de notre partenaire de paiement aux Pays-Bas ainsi que le montant à payer et la référence par e-mail. </p>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg green btn-block">Voir</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Paiement par carte de crédit</h4>
              <p>Avec ProLivraison, vous avez la possibilité d'effectuer un paiement sécurisé par carte de crédit. Nous acceptons les cartes VISA, MasterCard et American Express.Profitez en </p>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg yellow btn-block">Voir</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="price-table">
            <!-- Plan  -->
            <div class="pricing-head">
              <h4>Paiement par PayPal</h4>
              <p>Il est également possible d'effectuer un paiement sur Lesara avec PayPal. Choisissez alors ce mode de paiement pendant ou à la fin du processus de commande. </p>
            </div>

            <!-- Plean Detail -->
            <div class="price-in mart-15">
              <a href="#" class="btn btn-bg red btn-block">Voir</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Pricing-->
  <!--Contact-->
  <section id="contactez Nous" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Nous Contacter</h2>
          <p>Pour des avoir des informations supplementaires, des remarques ou des suggestions, vous pouvez à tout momment nous ecrire </p>
          <hr class="bottom-line">
        </div>
        <div id="sendmessage">Votre message a bien été envoyé. Nous vous remercions!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="col-md-6 col-sm-6 col-xs-12 left">
            <div class="form-group">
              <input type="text" name="name" class="form-control form" id="name" placeholder="Votre Nom" data-rule="minlen:4" data-msg="Veuillez entrer au moins 4 caractères" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse mail" data-rule="email" data-msg="Veuillez entrer un adresse mail valide" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subjet" id="subject" placeholder="Subjet" data-rule="minlen:4" data-msg="Veuillez entrer au moins 8 caractères du sujet" />
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-xs-12">
            <!-- Button -->
            <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">ENVOYER  EMAIL</button>
          </div>
        </form>

      </div>
    </div>
  </section>
  <!--/ Contact-->
  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">

      <h3>Nous Parler en privé!</h3>

      <form class="mc-trial row">
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            <input name="name" placeholder="Entrer votre nom" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <input name="EMAIL" placeholder="Entrer votre e-mail" class="form-control" type="email">
          </div>
        </div>
        <!-- End email input -->
        <div class="col-md-2 col-sm-4">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
            Soumettre <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>
      <!-- End newsletter-form -->
      <ul class="social-links">
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      ©2018 Projet Master1 Miage. Tout droit reservé
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
        -->
        ###---Designed by Moussa_Fatou_Ebrahim---###
      </div>
    </div>
  </footer>
  <!--/ Footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

  <h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="Admin" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="admin" required>

        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
function valider() {
  // si la valeur du champ prenom est non vide
  if(document.formSaisie.prenom.value != "") {
    // alors on envoie le formulaire
    document.formSaisie.submit();
  }
  else {
    // sinon on affiche un message
    alert("Saisissez le prénom");
  }
}
</script>

</body>

</html>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
