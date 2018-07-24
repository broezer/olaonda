<style type="text/css">

.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAe7KpDXYpw3HSegMtdnzc7ec58zkjK6b0"></script>
<script type="text/javascript">
(function($) {
//https://medium.com/@hurricane.interactive/acf-multiple-map-markers-with-toggleable-infowindow-popups-efb296d0f529
var global_markers = [];
var global_infowindows = [];



/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {

	// var
	var $markers = $el.find('.marker');


	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP,

		styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#89dac1"},{"visibility":"on"}]}]

	};


	// create map
	var map = new google.maps.Map( $el[0], args);


	// add a markers reference
	map.markers = [];


	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});


	// center map
	center_map( map );

	var waypoint = new Waypoint({
	  element: document.getElementById('guide-intro'),
	  handler: function() {
			closeInfowindows();
			center_map( map );
	  },
		offset: 130
	})


	var continuousElements = document.getElementsByClassName('spots')
	for (var i = 0; i < continuousElements.length; i++) {
		new Waypoint({
			element: continuousElements[i],
			handler: function() {
				//console.log(this.element.id);
				var number = this.element.id;
				closeInfowindows();
				global_infowindows[number].open(map, global_markers[number]);
				map.panTo(global_markers[number].getPosition());
				//google.maps.event.trigger(global_markers[number], 'click');
				map.setZoom( 14 );
			},
			offset: 130
		})
	}

	// Toggles between infowindows
	for (var i = 0; i < global_markers.length; i++) {
	    // Keep value of 'i' in event creation
	    (function(i) {
	        google.maps.event.addListener(global_markers[i], 'click', function() {
	            closeInfowindows();
	            global_infowindows[i].open(map, global_markers[i]);
							map.panTo(global_markers[i].getPosition());
							//map.setZoom( 14 );
							console.log(i);
							Waypoint.disableAll();
							$([document.documentElement, document.body]).animate({
					        scrollTop: $("#" + i).offset().top - 130

					    }, 500,function() {
					    // Animation complete.
							Waypoint.enableAll();
					  });

	        });
	    }(i));
	}


	// return
	return map;

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map,
		//icon : mountain
		icon: {
			anchor: new google.maps.Point(24, 24),
			url: 'data:image/svg+xml;utf-8, \
			<svg version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 50 50" overflow="inherit"> \
			<path fill="#FFE581" d="M9.416 35.465c13.419 5.673 23.611 8.981 37.967  13.529.294.045.565-.159.61-.466.045-.295-.157-.58-.452-.637-22.613-7.151-40.364-15.075-44.414-16.917-.419-.169-.906.023-1.063.434-.17.421.011.875.418 1.034 1.007.454 2.002.897 2.964 1.318l-3.19 2.444c-.362.534-.204 1.217.328 1.58.396.273.962.239 1.346-.012l5.486-2.307zm37.038-14.319l-10.445-9.642.231.023c2.115 0 3.823-1.728 3.823-3.854s-1.708-3.853-3.823-3.853c-2.127 0-3.835 1.728-3.835 3.854 0 .812.253 1.564.68 2.187l-7.082-2.539-3.824-5.559c-.294-.41-.747-.683-1.276-.751-.995-.113-1.912.614-2.024 1.626-.045.421.057.83.26 1.171l3.899 5.684c.181.227.408.42.679.546l4.525 1.785-7.429 3.82c-1.04.591-1.776 1.637-1.979 2.854l.034 6.833-6.872 3.114c-.769.375-1.323 1.148-1.357 2.07-.056 1.319.962 2.421 2.274 2.479.407.021.803-.068 1.143-.24l8.408-3.818c.6-.319 1.052-.898 1.199-1.604l-.011-4.252 5.836 5.253-1.075 8.946-.011.171c-.057 1.318.963 2.433 2.274 2.49 1.232.045 2.284-.853 2.454-2.069l1.256-10.21.011-.137c.022-.716-.259-1.364-.735-1.818l-5.406-4.832 8.145-4.025 7.557 6.992c.339.33.803.534 1.301.534 1.018-.011 1.832-.841 1.822-1.853-.003-.546-.253-1.035-.627-1.376z"/> \
			</svg>'
		}
	});

	// add to array
	map.markers.push( marker );
	global_markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html(),
			maxWidth: 200
		});
		global_infowindows.push( infowindow );


		// show info window when marker is clicked
		/*
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open( map, marker );
		});
		*/


	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 10 );
	}
	else
	{
		// fit to bounds
		//map.fitBounds( bounds );
		map.setCenter( bounds.getCenter() );
		map.setZoom( 9 );
	}

}

function closeInfowindows() {
    for (var x = 0; x < global_infowindows.length; x++) {
        global_infowindows[x].close();
    }
}


/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});



});



})(jQuery);
</script>
