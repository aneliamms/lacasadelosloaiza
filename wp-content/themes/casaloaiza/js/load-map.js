var map  = {};
var markers = [];
var content = ''; 
var infowindow = [];
map = new google.maps.Map(document.getElementById('map-sucursales'), {
    center: { lat: 24.80884, lng: -107.39395},
    zoom: 12,
    streetViewControl: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    mapTypeControl: true,
    mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        position: google.maps.ControlPosition.LEFT_BOTTOM
    },
    styles:[{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":60}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"lightness":30}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ef8c25"},{"lightness":40}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#b6c54c"},{"lightness":40},{"saturation":-40}]},{}]
});


$.getJSON({
  url: 'http://192.168.1.82/lacasadelosloaiza/wp-content/themes/casaloaiza/get-sucursales.php',
	  dataType: "json",
}).then(function(sucursales) {

    for(var i=0;i < sucursales.length; i++){
    	markers[i] = new google.maps.Marker({
          position: {'lat':Number(sucursales[i].ubicacion.lat), 'lng': Number(sucursales[i].ubicacion.lng)},
          map: map,
          animation: google.maps.Animation.DROP, 
          data: sucursales[i]
        });
		
		infowindow = new google.maps.InfoWindow();
		
		google.maps.event.addListener(markers[i], 'click',(function(marker, i){
			return function(){
			var content = '<div class="infowindow"><b>Nombre: </b><p>' + markers[i].data.nombre +  '</p><b>Direccion: </b><p>'+markers[i].data.ubicacion.address+'</p><b>Telefono: </b><a href="tel:+52'+markers[i].data.telefono+'">'+markers[i].data.telefono+'</p></div>';    

				infowindow.setContent(content);
				infowindow.open(map, markers[i]);
			}

		})(markers[i], i));    
	}

}).done(function() {
	if(markers.length > 1){
		var bounds = new google.maps.LatLngBounds();
		for (var i = 0; i < markers.length; i++) {
		 bounds.extend(markers[i].getPosition());
		}
		map.fitBounds(bounds);	
	}else if(markers.length === 1){
		map.setZoom(14);      // This will trigger a zoom_changed on the map
		map.setCenter(new google.maps.LatLng(lat, lng));
	};
});		
