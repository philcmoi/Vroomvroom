<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Plusieurs dispositifs diminuent le montant de votre impôt à payer : déduction, réduction d&#39;impôt et crédit d&#39;impôt." />
        <meta name="author" content="Philippe L" />
        <title>Payer moins d'impots</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#page-top"></a></li>
                <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
                <li class="sidebar-nav-item"><a href="#about">About</a></li>
                <li class="sidebar-nav-item"><a href="#services">Services</a></li>
                <li class="sidebar-nav-item"><a href="#portfolio">Portfolio</a></li>
                <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">PREVOYANCE</h1>
                <h1 class="mb-1">PATRIMOINE</h1>
                
                <h3 class="mb-5" ><em style="color:white;">Conseils en </em><em style="color:black;">defiscalisation<</em><em style="color:white;"> de l'impot sur le revenue</em></h3>
                <a class="btn btn-primary btn-xl" href="#about">En Savoir Plus</a>
            </div>
        </header>
        <!-- About-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
<!--                 <div class="row gx-4 gx-lg-5 justify-content-center"> -->
<!--                     <div class="col-lg-10"> -->
<!--                         <h2>Stylish Portfolio is the perfect theme for your next project!</h2> -->
<!--                         <p class="lead mb-5"> -->
<!--                             This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at -->
<!--                             <a href="https://unsplash.com/">Unsplash</a> -->
<!--                             ! -->
<!--                         </p> -->
<!--                         <a class="btn btn-dark btn-xl" href="#services">What We Offer</a> -->
<!--                     </div> -->
<!--                     <form  action="traitement2.php" method="post" > -->
	<div id="about">
          <form class="form-signin" action="traitementaccueil.php" method="post"  >
<!--     <img class="mb-4" src="design/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    	 <h1 class="h3 mb-3 fw-normal">Enregistrez vous</h1>

    <div class="form-floating">
  	<input type="email" name="email" id="floatingInput" class="form-control" required >
    <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
  	<input type="text" name="pseudo" id="pseudo" class="form-control"  required>
    <label for="floatingPassword">pseudo</label>
    </div>
    <div class="form-floating">
  	<input type="password" name="password" id="floatingPassword" class="form-control"  required>
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
  	<input type="password" name="password2" id="floatingPassword2" class="form-control"  required>
      <label for="floatingPassword">Password de verication</label>
    </div>
    </br>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Enregistrer</button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="button" onclick="window.location.replace('index.php')" name="rememberme" value="Annuler" /> <!-- Bouton d'annulation -->
</br>
<?php 

   if (isset($_GET['erreure']))   
   {$error=htmlspecialchars($_GET['erreure']);
 

switch ($error) {
   
    case 1:

        echo " email existant ";
        break;
            
        
    case 2:
        
        echo " pseudo existant ";
        break;
        
    case 3:
        
        echo " mots de passe non identiques ";
        break;
        
        
    case 4:
        echo "vous avez ete deconnecte";
        break;
        
    case 5:
        echo "Vous avez ete enregistres avec succes";
        break;
        
        
        
        
              }
}
?>
<!--   <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->
   
</form>      
                
                
                </div>
            </div>
        </section>

  


        <!-- Services-->
        <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Services</h3>
                    <h2 class="mb-5">Ce que nous proposons</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-screen-smartphone"></i></span>
                        <h4><strong>Contacter nous</strong></h4>
                        <p class="text-faded mb-0">
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-pencil"></i></span>
                        <h4><strong>Etude de votre situation fiscale</strong></h4>
                        <p class="text-faded mb-0">
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-like"></i></span>
                        <h4><strong>Sastifaction</strong></h4>
                        <p class="text-faded mb-0">
                            Des Prospect Sastifaits 
                            <i class="fas fa-heart"></i>
                            
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-mustache"></i></span>
                        <h4><strong>Question</strong></h4>
                        <p class="text-faded mb-0">Je me pose des questions</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout-->
        <section class="callout">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mx-auto mb-5">
                    Bienvenue sur
                    <em>votre</em>
                    compte!
                </h2>
<!--            <a class="btn btn-primary btn-xl" href="https://startbootstrap.com/theme/stylish-portfolio/">Download Now!</a> -->
            	
            	<a class="btn btn-primary btn-xl" href="http://voitureentete.fr/index2.php">Se Connecter</a>
<!--            
<a class="btn btn-primary btn-xl" href="http://localhost/enregistrement.php">Se Connecter</a> -->
            	
            </div>
        </section>
        <!-- Portfolio-->
        <section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Portfolio</h3>
                    <h2 class="mb-5">Projet recent</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2"></div>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-1.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2"></div>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-2.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2"></div>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-3.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Espace de travail</div>
                                    <p class="mb-0">Un espace de travail jaune avec des ciseaux, des crayons et d'autres objets.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-4.jpg" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="content-section bg-primary text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Impossible de resister aux boutons ci-dessous...</h2>
                <a class="btn btn-xl btn-light me-4" href="#!">Cliquez sur moi!</a>
                <a class="btn btn-xl btn-dark" href="#!">Regardez-moi!</a>
            </div>
        </section>
        <!-- Map-->
        <div class="map" id="contact">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5250.684366339986!2d2.26684!3d48.851685!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67b3cef342aef%3A0x32543438aecb08b3!2sLocale%20professionnel!5e0!3m2!1sfr!2sfr!4v1678893530307!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!--         <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a></small> -->
        </div>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-github"></i></a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; Your Website 2022</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
