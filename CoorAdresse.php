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
				
				// Cr�er l'objet "map" et l'ins�rer dans l'�l�ment HTML qui a l'ID "map"
				map = new google.maps.Map(document.getElementById("map"), {
					// Nous pla�ons le centre de la carte avec les coordonn�es ci-dessus
					center: new google.maps.LatLng(lat, lon), 
					// Nous d�finissons le zoom par d�faut
					zoom: 11, 
					// Nous d�finissons le type de carte (ici carte routi�re)
					mapTypeId: google.maps.MapTypeId.ROADMAP, 
					// Nous activons les options de contr�le de la carte (plan, satellite...)
					mapTypeControl: true,
					// Nous d�sactivons la roulette de souris
// 					scrollwheel: false, 
					mapTypeControlOptions: {
						// Cette option sert � d�finir comment les options se placent
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
						    /* Si le g�ocodage invers� a r�ussi */
						    if (status == google.maps.GeocoderStatus.OK) {
						     if (results[1]) {
						      map.setZoom(11);
						      /* Affichage de l'infowindow sur le marker avec l'adresse r�cup�r�e */
						      infowindow.setContent(results[1].formatted_address);
						      infowindow.open(map, marker);
							  google.maps.event.addListener(marker,'click', infoCallback(infowindow, marker));
							      
						     }
						    } else {
						     alert("Le geocodage a echoue pour la raion suivante : " + status);
						    		}
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
			    } else {alert("echec");}
			  });
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
                markersArray
				calcRoute();
			
			})
			
			$('#effaceritineraire').click(function () {				  
				effacerItineraire();
			});
			
		
			
	}			
/* fin du code javascript */
			
			
			window.onload = function(){
				// Fonction d'initialisation qui s'ex�cute lorsque le DOM est charg�
				initMap(); 
			};

			
		</script>
		<style type="text/css">
			#map{ /* la carte DOIT avoir une hauteur sinon elle n'appara�t pas */
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
      <div class="col-md-2">
        <input type="button" name="effaceritineraire" id="effaceritineraire" value="Effacer l itineraire" class="btn btn-primary" />
      </div>
	</body>
</html>