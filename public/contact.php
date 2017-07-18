<?php 

$pageCSS = 'contact.css';
$pageJS = array('contact.js');
$className = 'contact';

include "header.php";
?>	

<section>
	<div class="intro">
        <h1>Contact us</h1>
        <h2>For questions that specifically concern a Lagoon model (brochure, price list, equipment …) or for an after sales inquiry, please directly contact the Lagoon distributor of your sailing area using the map below or sending a message.</h2>
    </div>

    <div class="map">
        <div id="map"></div>
        <form class="form">
        	<input type="hidden">
            <input type="text" name="lastname" placeholder="Nom">
            <input type="text" name="firstname" placeholder="Prenom">
            <input type="text" name="email" placeholder="Email">
            <div class="select" >
	            <select name="country" id="">
	            	<option value="">Pays</option>
	            	<option value="fr">France</option>
	            	<option value="it">Italie</option>
	            	<option value="es">Espagne</option>
	            	<option value="">...</option>
	            </select>
	        </div>
            <textarea name="" id="" cols="30" rows="10" data-placeholder="Message">Message</textarea>
            <div class="cta rollable">Envoyer message</div>
            <div class="responseMessage fields">veuillez remplir tous les champs</div>
            <div class="responseMessage success">Votre message a été envoyé avec succès</div>
            <div class="responseMessage error">Une erreur est survenue. Veuillez reéssayer ultérieurement</div>
            <div class="responseMessage toomany">Trop de demandes envoyées. Veuillez reéssayer ultérieurement</div>
            <div class="responseMessage mapSelect">Vous devez seledctionner un interlocuteur sur la carte</div>
        </form>
    </div>
	
	<div class="bigform">
		<h3>For any ther question, please fill in the form below. <br> You will find Lagoon catamarans for charter all over the world.</h3>
		<form action="">
			<input type="text" name="firstname" placeholder="Prénom*">
			<input type="text" name="lastname" placeholder="Nom*">
			<input type="text" name="email" placeholder="Email*">
			<input type="text" name="telfixe" placeholder="Téléphone Fixe">
			<input type="text" name="telmob" placeholder="Téléphone mobile">
			<input type="text" name="adress" placeholder="Adresse*">
			<input type="text" name="adress2" placeholder="Adresse 2">
			<input type="text" name="city" placeholder="Ville*">
			<input type="text" name="zipcode" placeholder="Code postal*">
			<div class="select">
	            <select name="state" id="">
	            	<option value="">Etat (USA)</option>
	            	<option value="">France</option>
	            	<option value="">Italie</option>
	            	<option value="">Espagne</option>
	            	<option value="">...</option>
	            </select>
	        </div>
	        <div class="select">
	            <select name="country" id="">
	            	<option value="">Pays</option>
	            	<option value="">France</option>
	            	<option value="">Italie</option>
	            	<option value="">Espagne</option>
	            	<option value="">...</option>
	            </select>
	        </div>
	        <div class="select">
	            <select name="navZone" id="">
	            	<option value="">Zone de navigation</option>
	            	<option value="">France</option>
	            	<option value="">Italie</option>
	            	<option value="">Espagne</option>
	            	<option value="">...</option>
	            </select>
	        </div>
			<textarea name="" id="" cols="30" rows="10" data-placeholder="Message">Message</textarea>
			<div class="cta rollable">Envoyer message</div>
			<div class="responseMessage fields">veuillez remplir tous les champs</div>
            <div class="responseMessage success">Votre message a été envoyé avec succès</div>
            <div class="responseMessage error">Une erreur est survenue. Veuillez reéssayer ultérieurement</div>
            <div class="responseMessage toomany">Trop de demandes envoyées. Veuillez reéssayer ultérieurement</div>
		</form>
	</div>

</section>

<script>
        var sites = [
            ['TwinStar Yachting', 50.9708596386998, 11.3475036621094, 1, '190'],
            ['Yacht Voyage', 17.0200004577637, -61.7799987792969, 2, '180'],
            ['MASTER YACHTING', 48.2000007629395, 16.3700008392334, 3, '109'],
            ['Mare Yachting d.o.o.', 43.7190707130757, 15.9000492095947, 4, '189'],
            ['NAUTIKA CENTAR NAVA', 43.5, 16.4200000762939, 5, '222'],
            ['Yachting 2000', 44.0552714937904, 15.2974319458008, 6, '212'],
            ['Bestsail Murter (Marina Betina)', 43.824751408917, 15.5928933620453, 7, '203'],
            ['Bestsail Split (Marina Kastela)', 43.763163110395, 16.404937505722, 8, '204'],
            ['Yachting 2000', 43.7194429100816, 15.8999633789062, 9, '213'],
            ['DREAM YACHT CROATIA d.o.o. - Marina Zaton (Sibenik)', 43.7275, 15.83, 10, '245'],
            ['DREAM YACHT CROATIA d.o.o. - ACI Marina (Dubrovnik)', 42.67, 18.12638888888889, 11, '246'],
            ['DREAM YACHT CROATIA d.o.o. - Marina Baotic (Trogir)', 43.5144444, 16.235277777777778, 12, '247'],
            ['DREAM YACHT CROATIA d.o.o - Marina Kotor', 42.4408333, 18.776666666666667, 13, '248'],
            ['CAT MARINA', 38.3699989318848, -0.479999989271164, 14, '141'],
            ['BBMED - MULTIHULL PALMA MEDITERRANEO S.L.', 39.5004997253418, 2.7491500377655, 15, '99'],
            ['OCEAN CAT', 37.1100006103516, -6.76000022888184, 16, '150'],
            ['CATAMARANS BARCELONA XXI S.L', 41.3800010681152, 2.19000005722046, 17, '185'],
            ['Yacht Voyage', 39.568034, 2.642637, 18, '164'],
            ['Bestsail Palma de Mallorca', 39.5678524888689, 2.63182640075684, 19, '197'],
            ['KVO Location', 41.4748649597168, 9.07141971588135, 20, '104'],
            ['VENT PORTANT', 46.1500015258789, -1.14999997615814, 21, '93'],
            ['MEREX Yachts', 44.8600006103516, -0.540000021457672, 22, '92'],
            ['APACA', 43.0847129821777, 6.15798711776733, 23, '102'],
            ['Seaways Yachting', 43.5665041, 7.076748199999997, 24, '198'],
            ['Bestsail Antibes Golfe Juan', 43.5642383635387, 7.0740795135498, 25, '199'],
            ['Poe Location', 43.10222, 6.18444, 26, '211'],
            ['Ajaccio Marine Center', 41.917795, 8.742224, 27, '219'],
            ['Atlantique Concept Voile', 47.43119, -3.22145, 28, '225'],
            ['ECKER YACHT & FLUG GmbH', 39.0060005187988, 22.9599990844727, 29, '140'],
            ['KIRIACOULIS MEDITERRANEAN', 37.9099998474121, 23.7199993133545, 30, '78'],
            ['ISTION YACHTING LEFKAS ', 38.8303833007812, 20.7121486663818, 31, '187'],
            ['ISTION YACHTING KOS', 36.8904685974121, 27.3024654388428, 32, '188'],
            ['ISTION YACHTING ATHENS', 37.9274101257324, 23.6902141571045, 33, '186'],
            ['ECKER YACHT & FLUG GmbH', 38.8300018310547, 20.7099990844727, 34, '184'],
            ['DIVINE YACHTS', 37.9309719751606, 23.6923277378082, 35, '191'],
            ['Bestsail Lavrion', 37.7120297554717, 24.0559065341949, 36, '205'],
            ['Bestsail Kos', 36.8917631359987, 27.3011219501495, 37, '206'],
            ['Sail Aegean', 39.360093, 22.935534, 38, '228'],
            ['Sail Aegean,', 39.122311, 23.728123, 39, '229'],
            ['Dream Yacht Mediterranee - Marina Alimos (Athens)', 37.9188889, 23.700833333333332, 40, '232'],
            ['Dream Yacht Mediterranee - Lavrio Port', 37.7072222, 24.066111111111113, 41, '233'],
            ['Dream Yacht Mediterranee - Paroikia Port (Paros)', 37.0875, 25.15222222222222, 42, '236'],
            ['Dream Yacht Mediterranee - Skiathos Marina (Skiathos)', 39.165, 23.493055555555557, 43, '237'],
            ['Dream Yacht Mediterranee - Gouvia Marina (Corfu)', 39.6502778, 19.849444444444444, 44, '238'],
            ['Dream Yacht Mediterranee - Lefkas Marina (Lefkas)', 38.8297222, 20.71472222222222, 45, '239'],
            ['Dream Yacht Mediterranee - Kos Marina (Kos)', 36.8933333, 27.3, 46, '240'],
            ['Dream Yacht Mediterranee - Mandraki Port (Rhodos)', 36.4508333, 28.22611111111111, 47, '241'],
            ['DREAM YACHT CHARTER TURKEY - Ece Marina (Fethiye)', 36.6319444, 29.102777777777778, 48, '243'],
            ['Yacht Voyage', 12.039999961853, -61.75, 49, '181'],
            ['VENTOFRESCO Srl', 40.5299987792969, 17.4400005340576, 50, '81'],
            ['SICILY CATAMARAN CHARTERS SRL', 38.1300010681152, 13.2200002670288, 51, '115'],
            ['Yacht Voyage', 40.914583, 9.520848, 52, '217'],
            ['GULLIVER YACHTS', 41.7400016784668, 12.25, 53, '158'],
            ['Bestsail Punta Ala', 42.8038238179525, 10.7346725463867, 54, '200'],
            ['Bestsail Palermo', 38.1449863152396, 13.3709943294525, 55, '201'],
            ['Bestsail Milazzo', 38.2178937263925, 15.2409017086029, 56, '202'],
            ['Yachting 2000', 43.3943210984937, 10.4246520996094, 57, '214'],
            ['NORTH SARDINIA SAIL', 40.977825, 9.51416, 58, '215'],
            ['NORTH SARDINIA SAIL', 43.404736, 10.406971, 59, '216'],
            ['VPM Bestsail Yacht Charters Malta', 35.8873377356434, 14.5205998420715, 60, '192'],
            ['Yacht Voyage', 42.4199981689453, 18.7600002288818, 61, '166'],
            ['TAHITI YACHT CHARTER', -16.7299995422363, -151.479995727539, 62, '137'],
            ['Private Charter', -17.51806, -149.53361, 63, '210'],
            ['Sea Way, Lda', 38.701855514061, -9.16946411132812, 64, '172'],
            ['Marlin Boat Tours', 38.699444, -9.178737, 65, '218'],
            ['Sea Sky, Lda', 38.474491, -8.885837, 66, '223'],
            ['VPM Bestsail Yacht Charters Seychelles', -4.66334557980575, 55.4998826980591, 67, '138'],
            ['Wind Seychelles', 55.64, -4.6411111, 68, '226'],
            ['MARINE CAT SEY', -4.6411111, 55.64, 69, '227'],
            ['Vi-Dream Co.Ltd', 8.1710517255393, 98.3385632161866, 70, '177'],
            ['ECKER YACHT & FLUG GmbH', 36.75, 28.9400005340576, 71, '183'],
            ['Bestsail Fethiye', 36.6228212803516, 29.1026973724365, 72, '207'],
            ['Bestsail Marmaris', 36.8516725784107, 28.2792592048645, 73, '208'],
            ['SUNNY HOLIDAYS', 27.255278, 37.000109, 74, '220'],
            ['YaKSEL YATCILIK TURIZM VE TIC.A.S.', 28.277222, 36.851465, 75, '221']
        ];

        var boats = {
            "380"           : ["177", "190" ],
            "40"            : ["200", "183" ],
            "42"            : ["177", "183", "208" ],
            "450S"          : [ "183", "208" ],
            "450F"          : [ "183", "208" ],
            "46"            : [ "183", "208", "221" ],
            "50"            : ["177", "183", "208", "221" ],
            "52S"           : ["177", "181" ],
            "52F"           : ["177", "140", "208", "221" ],
            "54"            : ["115", "183", "208", "221" ],
            "560"           : ["109", "183", "208" ],
            "58"            : ["177", "140", "208" ],
            "620"           : ["200", "183" ],
            "Seventy-7"     : ["181", "183" ],
            "630"           : ["177", "183" ],
            "Seventy-8"     : ["177", "109" ]
        };

        var countries = {
            "en"           : ["177", "192" ],
            "pu"            : ["166", "192" ],
            "fr"            : ["166", "192", "200" ],
            "de"          : ["166", "192", "208" ],
            "ag"          : ["166", "192", "208" ],
            "cn"            : ["166", "192", "208", "109" ],
            "jp"            : ["181", "192", "115", "221" ],
            "mg"           : ["200", "192", "208", "221", "220" ],
            "fl"           : ["166", "192", "140", "221" ],
            "aus"            : ["166", "192", "208", "221" ],
            "sp"           : ["166", "192", "208" ],
            "it"            : ["109", "181", "140" ]
        };

    </script>
    

    <script>
        var map;
        var markersList = [];
        var currentBoatsList = [];
        var markerCluster;

        var selectedCharter = null;

        function showInfosCharter( marker ) {        	   
            map.panTo( { lat: marker.position.lat(), lng: marker.position.lng() } );
            $('.map .selected .photo').css({ "background-image" : "url('dynamic/charter/photo.jpg')"})
            selectedCharter = marker.customInfo;
        }

        
        function initMap() {

            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 3,
                 center: {lat: 30, lng: 0},
                scrollwheel: false,
                mapTypeControl: false,
                zoomControl: true,
                zoomControlOptions: { position: google.maps.ControlPosition.RIGHT_BOTTOM },
                scaleControl: false,
                streetViewControl: false,
                fullscreenControl: false,
                styles: [
                    {
                        "featureType":"landscape",
                        "stylers":[
                            {"saturation":-100},
                            {"lightness":65},
                            {"visibility":"on"}
                        ]
                    },
                    {
                        "featureType":"poi",
                        "stylers":[
                            {"saturation":-100},
                            {"lightness":51},
                            {"visibility":"simplified"}
                        ]
                    },
                    {
                        "featureType":"road.highway",
                        "stylers":[
                            {"saturation":-100},
                            {"visibility":"simplified"}
                        ]
                    },
                    {
                        "featureType":"road.arterial",
                        "stylers":[
                            {"saturation":-100},
                            {"lightness":30},
                            {"visibility":"on"}
                        ]
                    },
                    {
                        "featureType":"road.local",
                        "stylers":[
                            {"saturation":-100},
                            {"lightness":40},
                            {"visibility":"on"}
                        ]
                    },
                    {
                        "featureType":"transit",
                        "stylers":[
                            {"saturation":-100},
                            {"visibility":"simplified"}
                        ]
                    },
                    {
                        "featureType":"administrative.country",
                        "stylers":[
                            {"saturation":-100},
                            {"lightness":50},
                            {"visibility":"on"}
                        ]
                    },
                    {
                        "featureType":"administrative.country",
                        "elementType":"geometry.stroke",
                        "stylers":[
                            {"saturation":-100},
                            {"lightness":60},
                            {"visibility":"on"}
                        ]
                    },
                    {
                        "featureType":"administrative.province",
                        "stylers":[
                            {"visibility":"off"}
                        ]
                    },
                    {
                        "featureType":"water",
                        "elementType":"labels",
                        "stylers":[
                            {"visibility":"on"},
                            {"lightness":30},
                            {"saturation":-100}
                        ]
                    },
                    {
                        "featureType":"water",
                        "elementType":"geometry",
                        "stylers":[
                            {"hue":"#00adbb"},
                            {"lightness":50},
                            {"saturation":-100}
                        ]
                    }
                ]
            });

            var infowindow = new google.maps.InfoWindow({ content: "formulaire", pixelOffset: new google.maps.Size(-33, 10 ) });

            var imageMapMarker = {
                url:  'static/img/common/map_marker.png',
                size: new google.maps.Size(130, 90),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(13, 40),
                scaledSize: new google.maps.Size(65, 45)
            };

            function setMarkers(map, markers) {
                for (var i = 0; i < markers.length-1; i++) {
                    var site = markers[i];
                    var siteLatLng = new google.maps.LatLng(site[1], site[2]);

                    var marker = new google.maps.Marker({
                        position: siteLatLng,
                        map: map,
                        icon: imageMapMarker,
                        title: site[0],
                        adress: '88/40 Moo 5, Chao Fah West Road<br>Chalong Sub-district, Muang Phuket District,<br>Phuket Province, 83130',
                        zIndex: site[3],
                        customInfo: site[4]
                    });

                    markersList.push( marker );

                    google.maps.event.addListener(marker, "click", function () {
                        showInfosCharter( this );
                        infowindow.setContent('<h2>'+this.title+'</h2><div class="adress">'+this.adress+'</div>');
                        infowindow.open(map, this);
                    });
                }
            }

            setMarkers( map, sites );

            markerCluster = new MarkerClusterer( map, markersList,
                { imagePath: 'static/img/common/m'}
            );

            google.maps.event.addListener(infowindow, 'domready', function() {

                var iwOuter = $('.gm-style-iw').css({'background-color' : '#00adbb', color: "#FFF", 'text-align': 'left' });;

                var iwBackground = iwOuter.prev();

                iwBackground.children(':nth-child(4)').css({'background-color' : '#00adbb', color: "#FFF" });
                iwBackground.children(':nth-child(1)').css({'display' : 'none' });
                iwBackground.children(':nth-child(2)').css({'box-shadow' : 'none' });

                
                var trail = iwBackground.children(':nth-child(3)');
                trail.children(':nth-child(1)').find('div').css({ left: '10px', 'background-color' : "#00adbb", 'box-shadow': 'none'})
                trail.children(':nth-child(2)').find('div').css({ left: '-4px', 'background-color' : "#00adbb", 'box-shadow': 'none'})
                
                
                var iwCloseBtn = iwOuter.next();
                iwCloseBtn.find('img').css({ display: 'none'});
                iwCloseBtn.addClass('gm-closeBtn');
                // If the content of infowindow not exceed the set maximum height, then the gradient is removed.
                if($('.iw-content').height() < 140){
                  $('.iw-bottom-gradient').css({display: 'none'});
                }
              });
        }
    </script>

    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANtPH_JhE-vdQqaEuIQ4Zg9ELcDzbogF4&libraries=places&callback=initMap" async defer></script>
	

<?php 
include "footer.php";
?>