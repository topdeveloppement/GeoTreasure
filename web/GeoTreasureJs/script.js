/***********************************************************\
 author - Kennouche Omar Wild Code School chartres Session 1
\***********************************************************/

// On declare une variable qui va stocker les coordonners latitude et longitude
var myLatLng;
// On declare une variable qui va stocker les coordonners latitude.
var latitudeSearch;
// On declare une variable qui va stocker les coordonners longitude.
var longitudeSearch;
// On declare une variable map
var map;
var marker;
var latlng;
var lat;
var lng;

function initMap() {
  myLatLng = { lat: 47.129950756663064, lng: 2.493896484375 };
  // Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 6,
    zoomControl: true,
    mapTypeControl: true,
    mapTypeControlOptions: {
    style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
    position: google.maps.ControlPosition.TOP_CENTER  
    },
    streetViewControl: true,
    streetViewControlOptions: {
    position: google.maps.ControlPosition.LEFT_TOP
    }
  });
  google.maps.event.addListener(map, 'click', function(event) {
    var latlng = event.latLng;
    var lat = latlng.lat();
    var lng = latlng.lng();
    console.log(lat);
    console.log(lng);
  });
}
// Fonction qui execute une requete une ajax pour afficher un marker.
function showEtablissementMarker(lat, lng){

  assetMarker = document.getElementById('assetMarker').getAttribute('src');

  $.ajax({
      url: Routing.generate('marker'),
      type: 'POST',
      dataType: "json",
      data: {'lat': latitudeSearch, 'lng': longitudeSearch },
      success: function (results){

        affichageMap(results);

      }
    });
}
