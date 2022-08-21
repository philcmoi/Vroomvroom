 <?php
// session_start();
// include database connection file
// include('db_config.php');
 
// $query = "SELECT * FROM orders ORDER BY order_number desc";
// $result = mysqli_query($con, $query);

// $test = $_SESSION['logged'];

// var_dump($_SESSION['logged']);

// if (isset($_SESSION['logged']) && ( $_SESSION['logged'] == "visiteur" ))
// {} else {header('Location: index.php');}

// session_destroy();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
		<script src="javascripts/jquery.js"></script>		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<!-- 		<script src="https://maps.google.com/maps/api/js?key=AIzaSyA031jNEP24ibL2gqQpXy-us5hzE_0wkG8" type="text/javascript"></script> -->
		<script src="javascripts/jquery.js"></script>
		<script type="text/javascript" src="javascripts/jquery.googlemap.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA031jNEP24ibL2gqQpXy-us5hzE_0wkG8&libraries=geometry&sensor=false"></script>
		<script src="http://openlayers.org/api/OpenLayers.js"></script>

		<!--Requirement jQuery-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	    <!--Load Script and Stylesheet -->
		<script type="text/javascript" src="jquery.simple-dtpicker.js"></script>
		<link type="text/css" href="jquery.simple-dtpicker.css" rel="stylesheet" />
	   <!---->
		
		<style type="text/css">
		body { background-color: #fefefe; padding-left: 2%; padding-bottom: 100px; color: #101010; }
		footer{ font-size:small;position:fixed;right:5px;bottom:5px; }
		a:link, a:visited  { color: #0000ee; }
		pre{ background-color: #eeeeee; margin-left: 1%; margin-right: 2%; padding: 2% 2% 2% 5%; }
		p { font-size: 0.9rem; }
		ul { font-size: 0.9rem; }
		hr { border: 2px solid #eeeeee; margin: 2% 0% 2% -3%; }
		h3 { border-bottom: 2px solid #eeeeee; margin: 2rem 0 2rem -1%; padding-left: 1%; padding-bottom: 0.1em; }
		h4 { border-bottom: 1px solid #eeeeee; margin-top: 2rem; margin-left: -1%; padding-left: 1%; padding-bottom: 0.1em; }
	   </style>
		
		<script async type="text/javascript">
			// On initialise la latitude et la longitude de Paris (centre de la carte)
		var lat = 48.852969;
		var lon = 2.349903;
		var lng = 2.349903;
		var map = null;
		var nbrevent = 0;
		var marqueur = null;
		var markersArray = [];
		var geocoder;
		var marker;
		var latlng;
		var coor;
		var infoWindow;
		var infoWindowOptions;
		var infoArray = [];
		var directionsDisplayArray = [];
		var directionsService;
		var directionsRenderer = [];
		var depart;
		var arrive;
	// Fonction d'initialisation de la carte
		function initMap() {
	// Créer l'objet "map" et l'insèrer dans l'élément HTML qui a l'ID "map"
		map = new google.maps.Map(document.getElementById("map"), {
	// Nous plaçons le centre de la carte avec les coordonnées ci-dessus
		center: new google.maps.LatLng(lat, lon), 
	// Nous définissons le zoom par défaut
		zoom: 11, 
	// Nous définissons le type de carte (ici carte routière)
	mapTypeId: google.maps.MapTypeId.ROADMAP, 
	// Nous activons les options de contrôle de la carte (plan, satellite...)
	mapTypeControl: true,
	// Nous désactivons la roulette de souris
// 	scrollwheel: false, 
	mapTypeControlOptions: {
	// Cette option sert à définir comment les options se placent
	style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR 
	},
					// Activation des options de navigation dans la carte (zoom...)
	navigationControl: true, 
	navigationControlOptions: {
	// Comment ces options doivent-elles s'afficher
	style: google.maps.NavigationControlStyle.ZOOM_PAN 
	}
	});
				

	google.maps.event.addListener(map, 'click', function (event) {
	if (nbrevent < 2)
	{
	marqueur = new google.maps.Marker({
	map: map,
	position: new google.maps.LatLng(event.latLng.lat(), event.latLng.lng()),
	});
    markersArray.push(marqueur);
	coor = event.latLng;
	console.log("lat = " + event.latLng.lat());
	console.log("long = " + event.latLng.lng());
	lat = event.latLng.lat();
	lng = event.latLng.lng();
	infoWindow = new google.maps.InfoWindow({
	});
			
	inverseCoord(marqueur , coor, infoWindow );
	nbrevent = nbrevent + 1;
	}
	});

					
	function inverseCoord(marker,latlng,infowindow) {
	geocoder = new google.maps.Geocoder();
	geocoder.geocode({'latLng': latlng}, function(results, status) {
	/* Si le géocodage inversé a réussi */
	if (status == google.maps.GeocoderStatus.OK) {
	if (results[1]) {
	map.setZoom(11);
	/* Affichage de l'infowindow sur le marker avec l'adresse récupérée */
	infowindow.setContent(results[1].formatted_address);
	infowindow.open(map, marker);
	google.maps.event.addListener(marker,'click', infoCallback(infowindow, marker));
	}
	} else 
	{alert("Le geocodage a echoue pour la raion suivante : " + status);				    		}
				     })
					}
					
	function clearOverlays() {
	for (var i = 0; i < markersArray.length; i++ ) {
	this.markersArray[i].setMap(null);
	}
	markersArray = [];
  	markersArray.length = 0;
												  }
				
	$('#delete').click(function () {
	clearOverlays()
	nbrevent = 0;
	})

					
					
	function infoCallback(infowindow, maker) {
   	return function() { infowindow.open(map, maker); };
	}
		
	function calcRoute()  {
					
	directionsService = null;
	directionsRenderer = null;
	depart = new google.maps.LatLng(markersArray[0].getPosition());
	arrive = new google.maps.LatLng(markersArray[1].getPosition());
				
	directionsService = new google.maps.DirectionsService();
	directionsRenderer = new google.maps.DirectionsRenderer();
		        
	directionsRenderer.setMap(map);
	directionsDisplayArray = [];	
		    	
	var request = {
	origin: depart,
	destination: arrive,
	travelMode: 'DRIVING'
	};

	directionsService.route(request, function(result, status) {
	if (status == 'OK') {
	directionsRenderer.setDirections(result);
	directionsDisplayArray.push(directionsRenderer);

	alert("succes");
	
	if (confirm('Voulez vous enregistrer l itineraire choisi'))
		
	{alert("Enregistrement");enregistrerItineraire(markersArray);} 
	else {alert("rien");}
	} else {alert("echec");}
	});
	}

	function enregistrerItineraire(markersArray)
	{
	alert("interieure fonction enregistrerItineraire");
	markersArray;

	directionsService = null;
	directionsRenderer = null;
	depart = new google.maps.LatLng(markersArray[0].getPosition());
	arrive = new google.maps.LatLng(markersArray[1].getPosition());

		






		
// 		$.post('EnregistrerItinaire.php', {
// 			ieudepart: lieudepart,
// 			lieuarrive: lieuarrive,
// 			participation: participation,
// 			datedepart: datedepart,
// 			datearrive: datearrive
		      
// 		  },
// 		  function(data){

// 		        if (data == "Success") {           
// 		            $("#resultat").html(" ! <p>Vous allez etre rediriger sur la liste des activite</p>");
// 		            setTimeout(function() {$('#resultat').fadeOut();document.location.href = 'indexdate.php'}, 0);
		        	
// 		            } 
// 		        else {
// 		            $("#resultat").html("<p>Erreur lors de la connexion...</p>");
// 		    	    }
// 			        },
// 			        'text'
// 			        );
		
		}
			
	function effacerItineraire() {
	for (var i = 0; i < directionsDisplayArray.length; i++ ) {
	directionsDisplayArray[i].setMap(null);
	directionsDisplayArray[i].setPanel(null);
					}
	for (var i = 0; i < markersArray.length; i++ ) {
	markersArray[i].setMap(null);
	}
	directionsDisplayArray = [];
	markersArray = [];
	directionsDisplayArray.length = 0;
	markersArray.length = 0;
	nbrevent = 0;
	alert("fin effacerItineraire");}	
		
		
	$('#caculitineraire').click(function () {
	markersArray;
	calcRoute();
	})
			
	$('#effaceritineraire').click(function () {				  
	effacerItineraire();
	});
			
	$('#deconnexion').click(function () {				  
	effacerItineraire();
	window.location.href = 'deconnecter.php';
	});
			
	}			
/* fin du code javascript */
			
			
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
			};

			
		</script>
		<style type="text/css">
			#map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
				height:400px;
			}
		</style>
		<title>Carte</title>
	</head>
	<body>
		<div id="map">
			<!-- Ici s'affichera la carte -->
		</div>
		<div class="col-md-2">
        <input type="button" name="delete" id="delete" value="effacer les rdv" class="btn btn-primary" />
      </div>
      <div class="col-md-2">
        <input type="button" name="caculitineraire" id="caculitineraire" value="caculitineraire" class="btn btn-primary" />
      </div>
<!--       <div class="col-md-2"> -->
<!--         <input type="button" name="enregistreritineraire" id="enregistreritineraire" value="enregistreritineraire" class="btn btn-primary" /> -->
<!--       </div> -->
      <div class="col-md-2">
        <input type="button" name="effaceritineraire" id="effaceritineraire" value="Effacer l itineraire" class="btn btn-primary" />
      </div>
      <div class="col-md-2">
        <input type="button" name="deconnexion" id="deconnexion" value="deconnexion" class="btn btn-primary" />
      </div>
      <div id="resultat" class="col-md-2"></div>
	</body>
</html>