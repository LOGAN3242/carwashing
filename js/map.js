$(document).ready(function() {
	function scrollToAnchor(pt) {
    var e = $(pt);
    $("html, body").stop().animate({
        scrollTop: e.offset().top
    }, 900, "swing", function() {  window.location.hash = pt })
	}
    var googleMapsCustom = {
        searchOptions: function() {
            var latlngBounds = new google.maps.LatLngBounds(new google.maps.LatLng(25.2327348,55.3761904),new google.maps.LatLng(25.2327348,55.3761904))
              , latlngBounds_var = {
                bounds: latlngBounds
            };
            return latlngBounds_var;
        },
        zoomOptions: {
            minZoom: 9,
            maxZoom: 20
        },
        mapOptions: function() {
			 var lat = 25.2327348;
             var lng = 55.3761904;
             var mapSettings = { 
			 	center: new google.maps.LatLng(lat,lng),
				zoom: 12, 
				zoomControl: !0, 
				zoomControlOpt: { style: "MEDIUM", position: "LEFT_BOTTOM" },
                panControl: !1,
                mapTypeControl: !0,
                streetViewControl: !1,
                styles: [{featureType: "water", elementType: "geometry", stylers: [{color: "#a2daf2"}]
				}, { featureType: "landscape.man_made", elementType: "geometry", stylers: [{ color: "#f7f1df" }]
				}, { featureType: "landscape.natural",  elementType: "geometry",
                    stylers: [{
                        color: "#d0e3b4"
                    }]
                }, {
                    featureType: "landscape.natural.terrain",
                    elementType: "geometry",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "poi.park",
                    elementType: "geometry",
                    stylers: [{
                        color: "#C9D787"
                    }]
                }, {
                    featureType: "poi",
                    elementType: "labels",
                    stylers: [{
                        visibility: "on"
                    }]
                }, {
                    featureType: "poi.medical",
                    elementType: "geometry",
                    stylers: [{
                        color: "#fbd3da"
                    }]
                }, {
                    featureType: "poi.business",
                    stylers: [{
                        visibility: "on"
                    }]
                }, {
                    featureType: "road",
                    elementType: "geometry.stroke",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "road",
                    elementType: "labels",
                    stylers: [{
                        visibility: "on"
                    }]
                }, {
                    featureType: "road.highway",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#ffe15f"
                    }]
                }, {
                    featureType: "road.highway",
                    elementType: "geometry.stroke",
                    stylers: [{
                        color: "#efd151"
                    }]
                }, {
                    featureType: "road.arterial",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#ffffff"
                    }]
                }, {
                    featureType: "road.local",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "black"
                    }]
                }, {
                    featureType: "transit.station.airport",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#cfb2db"
                    }]
                }]
            };
            return mapSettings;
        }
    };

    function setMarkerNull() {
        marker&&marker.setMap(null);
    }

    function setMarker(markerPos) {
        realMapObject.setCenter(markerPos),
        marker = new google.maps.Marker({
            position: markerPos,
            title: "My car is here",
            address: "Address:",
            draggable: !0,
            icon: "js/vone-map-marker.png"
        }),
        marker.setMap(realMapObject),
        realMapObject.setZoom(17),
        localStorage.setItem("lat", marker.position.lat()),
        localStorage.setItem("lng", marker.position.lng()),
        1 == r && localStorage.setItem("isCarPark", 1)
    }

    function changeButtonLabel() {
        $(".mayfair-button-1").text("Booking at Vone Service Station"),
        $(".form-header").text("Book now for Vone Service Station"),
        console.log($(".form-header"))
    }

    if ($("form#new_order").length) {
		
		var uluru = {lat: 25.2327348, lng: 55.3761904};
		
        var marker, s, o, a, r, xx, position, pos = 0, 
		l = "indigo", 
		c = "mayfair", 		
		h = new google.maps.Geocoder, 
		gCustomMapOptions = googleMapsCustom.mapOptions(), 
		realMapObject = new google.maps.Map(document.getElementById("map-container"),gCustomMapOptions);
        realMapObject.setOptions(googleMapsCustom.zoomOptions);
		setMarker(uluru);
        var p = googleMapsCustom.searchOptions();
		
        /*f = document.querySelectorAll(".search-text-field1");*/
        m = document.querySelectorAll(".search-text-field2");
		
       /* autocomplete1 = new google.maps.places.Autocomplete(f[0],p);*/
        autocomplete2 = new google.maps.places.Autocomplete(m[0],p);
        localStorage.clear();
        $.each([[".search-map-form2", ".search-text-field2"]], function(i, n) {
            $(n[0]).on("submit", function(i) {
                i.preventDefault(),
                localStorage.clear(),
                setMarkerNull(),
                s = new google.maps.Geocoder,
                s.geocode({
                    address: $(this).find(n[1]).val()
                }, function(t, i) {
                    i == google.maps.GeocoderStatus.OK ? (setMarker(t[0].geometry.location),
                    ".search-map-form1" == n[0] && ($(".search-text-field2").val($(".search-text-field1").val()),
                    scrollToAnchor("#oform"))) : alert("You search address was not recognised: " + i)
                })
            })
        });
        $.each([".mayfair-button-2"], function(n, s) {
            $(s).on("click", function(n) {
                n.preventDefault(),
                localStorage.clear(),
                setMarkerNull(),
                r = 1,
                changeButtonLabel();
                var o = new google.maps.Geocoder;
				
                o.geocode({
                    "location": {
                        "lat": 25.2327348,
                        "lng": 55.3761904
                    },
                }, function(t, i) {
                    i == google.maps.GeocoderStatus.OK ? (setMarker(t[0].geometry.location),
                    $(".search-text-field1").val("VONE SERVICE STATION"),
                    $(".search-text-field2").val("VONE SERVICE STATION"),
                    ".mayfair-button-1" == s && scrollToAnchor("#oform")) : alert("You search address was not recognised: " + i)
                })
            })
        }),
        $("#order_address").val() && ($(".search-text-field2").val($("#order_address").val()),
        $(".search-map-form2").submit(),
        console.log("here1"))
		$(".btn-comp.reg-link").on("click", function(n) {
       	 	n.preventDefault();
			$('#person_name').val($("#person-name").val());
			$('#order_lat').val(marker.position.lat());
			$('#order_lng').val(marker.position.lng());
			$('#order_address').val($("#map_location").val());
			
			var url = "https://www.vone.ae/ajax/carwashbooking.php"; // the script where you handle the form input.

    		$.ajax({
           		type: "POST",
           		url: url,
				data: $("#new_order").serialize(), // serializes the form's elements.
           		beforeSend: function(){$(".btn-comp.reg-link").addClass('waiting-btn')},
				success: function(data){
               			$("#orderform").html(data); // show response from the php script.
           				},
				complete: function(){$(".btn-comp.reg-link").removeClass('waiting-btn');jcf.replaceAll(); scrollToAnchor("#orderform");}
				
        	});
		
    });
    }

    window.addEventListener("load", function() {
        function t(t) {
            h.geocode({
                latLng: t
            }, function(t, e) {
                if (e == google.maps.GeocoderStatus.OK) {
                    if (t[0]) {
                        var i = $(".order-form-main");
                        i.append($('<input type="hidden" name="orderLat" />').val(s)),
                        i.append($('<input type="hidden" name="orderLng" />').val(o)),
                        i.append($('<input type="hidden" name="orderAddress" />').val(t[0].formatted_address)),
                        console.log(r),
                        ("Achilles Way, London W1K 1AB, UK" == $(".search-text-field2").val() || 1 == localStorage.getItem("isCarPark")) && (i.append($('<input type="hidden" name="order[iscarpark]" />').val(!0)),
                        i.append($('<input type="hidden" name="order[carparkcompany]" />').val(l)),
                        i.append($('<input type="hidden" name="order[carpark]" />').val(c))),
                        i.get(0).submit()
                    }
                } else
                    alert("Geocoder failed due to: " + e)
            })
        }
        $(".order-form-main").on("submit", function(e) {
            localStorage.getItem("lat") && (e.preventDefault(),
            s = n.position.lat(),
            o = n.position.lng(),
            a = new google.maps.LatLng(s,o),
            t(a))
        })
    })

    $("#btn-locate-me").on("click", function(n) {
        n.preventDefault();  
		if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
				localStorage.clear(); 
				setMarkerNull();
			} 
		else{
			setMarker(uluru);
			}
		function showPosition(position) { 
			realMapObject.setCenter(new google.maps.LatLng( position.coords.latitude, position.coords.longitude));
			setMarker(new google.maps.LatLng( position.coords.latitude, position.coords.longitude));
			var geocoder2 = new google.maps.Geocoder;
			var latlng2 = {lat: position.coords.latitude, lng: position.coords.longitude};
			geocoder2.geocode({'location': latlng2}, function(results, status) {
          	if (status === 'OK') {
            	if (results[1]) { $('#map_location').val(results[1].formatted_address);  } else { window.alert('No results found'); }} 
				else { window.alert('Geocoder failed due to: ' + status); }
        	});
			
			
		}
    });

});
