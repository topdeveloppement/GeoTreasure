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

function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 47.129950756663064, lng: 2.493896484375},
          scrollwheel: false,
          zoom: 6
        });
      }
