<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Plusieurs dispositifs diminuent le montant de votre impôt à payer : déduction, réduction d&#39;impôt et crédit d&#39;impôt." />
        <meta name="author" content="Philippe L" />
        <title>Payer moins d'impots et financer votre &eacute;pargne</title>
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
                <li class="sidebar-nav-item"><a href="#page-top">Accueil</a></li>
                <li class="sidebar-nav-item"><a href="#about">En Savoir Plus</a></li>
                <li class="sidebar-nav-item"><a href="#services">Services</a></li>
                <li class="sidebar-nav-item"><a href="http://localhost/Vroomvroom/index2.php">Connexion, Enregistrement</a></li>
<!--                 <li class="sidebar-nav-item"><a href="http://voitureentete.fr/index2.php">Se Connnecter, S'Enregistrer</a></li> -->
                <li class="sidebar-nav-item"><a href="#portfolio">Portefeuille</a></li>
                <li class="sidebar-nav-item"><a href="#carte">Carte</a></li>
                <li class="sidebar-nav-item"><a href="#cgu">CGU</a></li>
                
            </ul>
        </nav>
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">PREVOYANCE</h1>
                <h1 class="mb-1">PATRIMOINE</h1>
                
                <h3 class="mb-5" ><em style="color:white;">Conseils en </em><em style="color:black;">d&eacute;fiscalisation</em><em style="color:white;"> de l'impot sur le revenue</em></h3>
                <a class="btn btn-primary btn-xl" href="#about">En Savoir Plus</a>
            </div>
        </header>
        <!-- About-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">

	<div id="about">
	
	   	 <h1 class="h5 mb-3 fw-normal" style="color:green;" >Souscrire &agrave; une compl&eacute;mentaire sant&eacute;.
		 Pr&eacute;voir un patrimoine pour la veillessse.
		 Prot&eacute;ger les siens lors d'un d&eacute;c&eacute;.</h1>
	
	
    	 <h1 class="h5 mb-3 fw-normal" style="color:blue;" >Quelles diff&eacute;rences entre D&eacute;duction, r&eacute;duction d'impot, cr&eacute;dit d'impot ?</h1>
    	 <h1 class="h5 mb-3 fw-normal" style="color:blue;" >Immobilier Investir dans le neuf, le dispositif Pinel, vous donne droit &agrave; des r&eacute;ductions d'impots.</h1>
    	 <h1 class="h5 mb-3 fw-normal" style="color:blue;" >B&eacute;nificier d'un credit d'impot sur les d&eacute;penses pour l'aide de la personne.</h1>
    	 <h1 class="h5 mb-3 fw-normal" style="color:blue;" >Et d'autres d&eacute;ductions d'impots</h1>
    	 
<!-- 	<img class="mb-4" src="design/bootstrap-logo.svg" alt="" width="72" height="57"> -->



	
    <form class="form-signin" action="traitementvisiteur.php" method="post"  >
    <h1 class="h3 mb-3 fw-normal">Renseignez vous. Nous vous Informerons prochainement.</h1>
	<br><br><br>
	<div class="form-floating">
  	<input type="text" name="Nom_visiteur" id="floatingInput" class="form-control" required >
    <label for="floatingInput">Nom</label>
    </div>
    <div class="form-floating">
  	<input type="email" name="Email_visiteur" id="floatingInput" class="form-control" required >
    <label for="floatingInput">Adresse Email</label>
    </div>
<!--     <div class="form-floating"> -->
<!--   	<input type="text" name="Numtel_visiteur" id="pseudo" class="form-control"  > -->
<!--     <label for="floatingPassword">Numero De T&eacute;l&eacute;phone</label> -->
<!--     </div> -->
    <div class="form-floating">
    <textarea name="Demande_visiteur" rows="12" cols="115" placeholder="Demande" required></textarea>
    </div>

    </br>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Envoi</button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="button" onclick="window.location.replace('index.php')" name="rememberme" value="Annuler" /> <!-- Bouton d'annulation -->
	
	<div id="formulaire"></div>

</br>
<?php 

   if (isset($_GET['erreure']))   
   {$error=htmlspecialchars($_GET['erreure']);
 

switch ($error) {
   
    case 1:

        echo " erreure ";
        break;
            
        
    case 2:
        
        echo "Votre demande serat trait&eacute; le plus rapidement possible";
        break;
        
    
    case 3:
        
        echo "Vous avez &eacute;t&eacute; enregistr&eacute;s avec succes";
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
            	
            	<a class="btn btn-primary btn-xl" href="http://localhost/Vroomvroom/index2.php">Se Connecter</a>
<!--             	<a class="btn btn-primary btn-xl" href="http://voitureentete.fr/index2.php">Se Connecter</a> -->
<!--            
<a class="btn btn-primary btn-xl" href="http://localhost/enregistrement.php">Se Connecter</a> -->
            	
            </div>
        </section>
        <!-- Portfolio-->
        <section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">portefeuille</h3>
                    <h2 class="mb-5">Projets recents</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h1">Assurance Vie.</div>
                                    <p class="mb-0">Financer votre &eacute;pargne par les &eacute;conomies faites sur la r&eacute;duction de l'impot sur le revenue.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-1.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h1">Compl&eacute;mentaire Sant&eacute;.</div>
                                    <p class="mb-0">Trouver le juste milieu pour la continuit&eacute; de votre sant&eacute;.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-2.jpg" alt="..." />
                        </a>
                    </div>
<!--                     <div class="col-lg-6"> -->
<!--                         <a class="portfolio-item" href="#!"> -->
<!--                             <div class="caption"> -->
<!--                                 <div class="caption-content"> -->
<!--                                     <div class="h2">Protection Sociale pour les Ind&eacute;pendants</div> -->
<!--                                     <p class="mb-0">Entrepreneurs financer votre couverture sociale</p> -->
<!--                                 </div> -->
<!--                             </div> -->
<!--                             <img class="img-fluid" src="assets/img/portfolio-3.jpg" alt="..." /> -->
<!--                         </a> -->
<!--                     </div> -->
<!--                     <div class="col-lg-6"> -->
<!--                         <a class="portfolio-item" href="#!"> -->
<!--                             <div class="caption"> -->
<!--                                 <div class="caption-content"> -->
<!--                                     <div class="h2"></div> -->
<!--                                     <p class="mb-0"></p> -->
<!--                                 </div> -->
<!--                             </div> -->
<!--                             <img class="img-fluid" src="assets/img/portfolio-4.jpg" alt="..." /> -->
<!--                         </a> -->
<!--                     </div> -->
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
        <div class="map" id="carte">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.3026561207726!2d2.265680714853991!3d48.85243880908116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67aae79655351%3A0xefc32145eb9faf09!2s1%20Rue%20Jasmin%2C%2075016%20Paris!5e0!3m2!1sfr!2sfr!4v1679390228203!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!--         <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a></small> -->
        </div>
        
        <br/></br></br></br></br><br/></br></br></br></br><br/></br></br>

        <h1 class="h3 mb-3 fw-normal" id="cgu">
        
        
        
        
        
        
        
        </h1>
        
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
