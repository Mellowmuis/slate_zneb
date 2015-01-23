var map;
var geocoder;
var iconBase = 'http://zneb.lokaalgevonden.nl/wp-content/themes/slate-0.3.1_zneb/img/contacticon.png';

function initialize() {
  geocoder = new google.maps.Geocoder();
  var mapCanvas = document.getElementById('map_canvas');
  var mapOptions = {
    center: new google.maps.LatLng(44.5403, 1.5463),
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(mapCanvas, mapOptions);
  codeAddress('Kalshoven 8 4825AM BReda');
}

function codeAddress(address) {
  geocoder.geocode({
    'address': address
  }, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
        map: map,
        position: results[0].geometry.location,
        icon: iconBase
      });
    }
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
