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
    zoom: 7,
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
      //showIndice();
      marker = new google.maps.Marker({
         map: map,
         position: { lat: lat , lng: lng },
         title: 'Hello World!'
      });
    });
}

jQuery(document).ready(function() {
 
  $('#play').click(function(event) {
    showDescriptionStart();
  });

  function showDescriptionStart () {
     $.ajax({
      url: Routing.generate('showDesc'),
      type: 'POST',
      dataType: "json",
      success: function (results){

      }
    });
  }
})
