//Creates a new blank array for all the listing markers.
var markers = [];
var map;

//This global polygon variable is to ensure only ONE polygon is rendered.
var polygon = null;

//Initialize map Canvas to display all Site Locations here
//Blue and yellow represents All sites that are present in the database.
function initMap() {

    // Create a styles array to use with the map.
    var styles = [
        {
            featureType: 'water',
            stylers: [
                {color: '#19a0d8'}
            ]
        }, {
            featureType: 'administrative',
            elementType: 'labels.text.stroke',
            stylers: [
                {color: '#ffffff'},
                {weight: 6}
            ]
        }, {
            featureType: 'administrative',
            elementType: 'labels.text.fill',
            stylers: [
                {color: '#e85113'}
            ]
        }, {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [
                {color: '#efe9e4'},
                {lightness: -40}
            ]
        }, {
            featureType: 'transit.station',
            stylers: [
                {weight: 9},
                {hue: '#e85113'}
            ]
        }, {
            featureType: 'road.highway',
            elementType: 'labels.icon',
            stylers: [
                {visibility: 'off'}
            ]
        }, {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [
                {lightness: 100}
            ]
        }, {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [
                {lightness: -100}
            ]
        }, {
            featureType: 'poi',
            elementType: 'geometry',
            stylers: [
                {visibility: 'on'},
                {color: '#f0e4d3'}
            ]
        }, {
            featureType: 'road.highway',
            elementType: 'geometry.fill',
            stylers: [
                {color: '#efe9e4'},
                {lightness: -25}
            ]
        }
    ];
    displayMarkers('all');
    $('#closed-listings').on('click', function () {
        displayMarkers('closed');
    });
    $('#open-listings').on('click', function () {
        displayMarkers('open');
    });
    $('#booked-listings').on('click', function () {
        displayMarkers('booked');
    });
    $('#show-listings').on('click', function () {
        displayMarkers('all');
    });

    function displayMarkers(status) {

        // These are the advertisement points listings that will be shown to the user.
        // We have these in a database instead.
        var locations = [];
        var url = '';
        // Style the markers a bit. This will be our listing marker icon.
        var defaultIcon = makeMarkerIcon('0091ff');

        // Create a "highlighted location" marker color for when the user
        // mouses over the marker.
        var highlightedIcon = makeMarkerIcon('FFFF24');

        //Create Different color markers for open/closed/Booked/all

        if (status === 'all') {
            url = 'http://tangerine.local/paste';
            defaultIcon = makeMarkerIcon('0091ff');
        }

        else if (status === 'closed') {
            url = 'http://tangerine.local/getClosed';
            defaultIcon = makeMarkerIcon('F44336');
        }
        else if (status === 'booked') {
            url = 'http://tangerine.local/getBooked';
            defaultIcon = makeMarkerIcon('FFFF24');
        }
        else if (status === 'open') {
            url = 'http://tangerine.local/getOpen';
            defaultIcon = makeMarkerIcon('9C27B0');
        }


        $.ajax({
            method: 'GET',
            url: url,
            success: function (results) {
                $.each(JSON.parse(results), function (site, k) {

                    /* console.log(k.landmark+' | '+k.latitude+' | '+k.longitude+' | '+k.status);*/

                    locations.push(
                        {
                            title: k.landmark,
                            location: {
                                lat: parseFloat(k.latitude),
                                lng: parseFloat(k.longitude)
                            },
                            stat: k.status,
                            markernumber: k.id


                        }
                    );
                    /*  console.log(locations);*/

                });

                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: -1.274941, lng: 36.810459},
                    zoom: 6,
                    styles: styles,
                    mapTypeControl: false
                });

                //The following listener directly input the coordinates of a location
                //when you clicked on a map, and adds the latitude and longitude details
                //To the Add site form
                //This will help the user to dynamically add sites if they know where there sites are located on the map.
                google.maps.event.addListener(map, 'click', function (e) {
                    //Create two variables that fetch the Inputs of the Latitude and Longitude inputs
                    var lat_textfld = $('#latitude');
                    var lng_textfld = $('#longitude');

                    //Pass the Latitude and Longitude details to the inputs.
                    lat_textfld.val(e.latLng.lat());
                    lng_textfld.val(e.latLng.lng());
                    /*alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());*/
                });


                /*console.log(locations[0].title);*/
                var largeInfoWindow = new google.maps.InfoWindow();
                //Inititalize the drawing manager
                var drawingManager = new google.maps.drawing.DrawingManager({
                    drawingMode: google.maps.drawing.OverlayType.POLYGON,
                    drawingControl: true,
                    drawingControlOptions: {
                        position: google.maps.ControlPosition.TOP_LEFT,
                        drawingModes: [
                            google.maps.drawing.OverlayType.POLYGON
                        ]
                    }
                });


                var bounds = new google.maps.LatLngBounds();
                // The following group uses the location array to create an array of markers on initialize
                for (var i = 0; i < locations.length; i++) {
                    var position = locations[i].location;
                    var title = locations[i].title + '' + ' | ' + locations[i].stat + ' | ' + locations[i].markernumber;
                    var tmpSiteId = locations[i].markernumber;

                    //Create a marker per location, and put into markers array
                    /*   console.log(status)*/
                    ;
                    var marker = new google.maps.Marker({
                        map: map,
                        position: position,
                        title: title,
                        icon: defaultIcon,
                        animation: google.maps.Animation.DROP,
                        id: i,
                        siteid: tmpSiteId

                    });
                    // push the marker to our arrat of markers
                    markers.push(marker);

                    // Create an onlick event to open an infowindow at each marker
                    marker.addListener('click', function () {
                        populateInfoWindow(this, largeInfoWindow);

                    });
                    // Two event listeners - one for mouseover, one for mouseout,
                    // to change the colors back and forth.
                    marker.addListener('mouseover', function () {
                        this.setIcon(highlightedIcon);
                    });
                    marker.addListener('mouseout', function () {
                        this.setIcon(defaultIcon);
                    });
                    //Extend the boundaries of the map for each marker

                    bounds.extend(markers[i].position);
                }
                /// Extend the boundaries of the map for each marker
                map.fitBounds(bounds);

                //document.getElementById('show-listings').addEventListener('click', showListings);
                document.getElementById('hide-listings').addEventListener('click', hideListings);
                document.getElementById('toggle-drawing').addEventListener('click', function () {

                    toggleDrawing(drawingManager);
                });
                document.getElementById('zoom-to-area').addEventListener('click', function () {
                    zoomToArea();
                });
                //Add an event listener so that the polygon is captured, call the
                // searchWithinPolygon function. This will show the markers in the polygon,
                // and hide any outside of it
                drawingManager.addListener('overlaycomplete', function (event) {
                    //
                    //
                    if (polygon) {
                        polygon.setMap(null);
                        hideListings();
                    }
                    //    Switching the drawing mode to the Hand(i.e. No longer drawing).
                    drawingManager.setDrawingMode(null);
                    //    Creating a new editable polygon from the overlay.
                    polygon = event.overlay;
                    polygon.setEditable(true);
                    //    Search within the polygon
                    searchWithinPolygon();
                    //    Make sure the search is re-done if the polygon is changed.
                    polygon.getPath().addListener('set_at', searchWithinPolygon);
                    polygon.getPath().addListener('insert_at', searchWithinPolygon);
                });

                // This function populates the infowindow when the marker is clicked. We'll only allow
                // one infowindow which will open at the marker that is clicked, and populate based
                // on that markers position
                function populateInfoWindow(marker, infowindow) {
                    //// Check to make sure the infowindow is not already opened on this marker.
                    if (infowindow.marker != marker) {
                        infowindow.marker = marker;
                        infowindow.setContent('');
                        infowindow.open(map, marker);
                        //// Make sure the marker property is cleared if the infowindow is closed.
                        infowindow.addListener('closeclick', function () {
                            infowindow.setMarker(null);
                        });
                        var streetViewService = new google.maps.StreetViewService();
                        var radius = 50;
                        // In case the status is OK, which means the pano was found, compute the
                        // position of the streetview image, then calculate the heading, then get a
                        // panorama from that and set the options
                        function getStreetView(data, status) {
                            if (status == google.maps.StreetViewStatus.OK) {
                                var nearStreetViewLocation = data.location.latLng;
                                var heading = google.maps.geometry.spherical.computerHeading(
                                    nearStreetViewLocation, marker.position);
                                infowindow.setContent('<div>' + marker.title + '<br>' + marker.position + '</div><div id="pano"></div>');
                                var panoramaOptions = {
                                    position: nearStreetViewLocation,
                                    pov: {
                                        heading: heading,
                                        pitch: 30
                                    }
                                };
                                var panorama = new google.maps.StreetViewPanorama(
                                    document.getElementById('pano'), panoramaOptions);
                            } else {
                                infowindow.setContent('<div>' + marker.title + '<br>' + marker.position + '</div>' +
                                    '<div>No Street View Found</div>' + '<input type="button" value="Manage Site" id="managesite">')
                            }
                            $("#theid").html(marker.title);
                            $("#the-site-id").val(marker.siteid);

                            document.getElementById('managesite').addEventListener('click', recordTransaction);
                        }

                        // Use streetview service to get the closest streetview image within
                        // 50 meters of the markers position
                        streetViewService.getPanoramaByLocation(marker.position, radius, getStreetView());
                        // Open the infowindow on the correct marker.
                        infowindow.open(map, marker);

                    }

                }

                // This function will loop through the markers array and display them all.
                function showListings() {
                    var bounds = new google.maps.LatLngBounds();
                    // Extend the boundaries of the map for each marker and display the marker
                    for (var i = 0; i < markers.length; i++) {
                        markers[i].setMap(map);
                        bounds.extend(markers[i].position);
                    }
                    map.fitBounds(bounds);
                }

                // This function will loop through the listings and hide them all.
                function hideListings() {
                    for (var i = 0; i < markers.length; i++) {
                        markers[i].setMap(null);
                    }
                }


                function toggleDrawing(drawingManager) {
                    if (drawingManager.map) {
                        drawingManager.setMap(null);
                        //    in case the user drew anything, get rid of the polygon
                        if (polygon) {
                            polygon.setMap(null);
                        }
                    } else {
                        drawingManager.setMap(map);
                    }

                }

                //    This function hides all the markers outside the polygon
                //    and shows only the ones within it. This is so that the
                //    user can specify the exact area of the search
                function searchWithinPolygon() {
                    for (var i = 0; i < markers.length; i++) {
                        if (google.maps.geometry.poly.containsLocation(markers[i].position, polygon)) {
                            markers[i].setMap(map);
                        } else {
                            markers[i].setMap(null);
                        }
                    }

                }

                //This Method record transactional events for each and every site.
                // Events include Booking, Closing and Opening of a site.
                function recordTransaction(p) {

                    $('#transaction-modal').modal();
                    //$("#theid").html(p);
                    /*  document.getElementById('site_information').innerHTML = title;*/

                }

                // This function takes the input value in the find nearby area text input
                // locates it, and then zooms into that area. This is so that the user can
                // show all listings, then decide to focus on one area of the map.
                function zoomToArea() {
                    //    Initialize the geocorder
                    var geocoder = new google.maps.Geocoder();
                    //    Get the address or place that the user entered
                    var address = document.getElementById('zoom-to-area-text').value;
                    //    make sure the address isn't blank
                    if (address == '') {
                        window.alert('You must enter an area, or address');
                    } else {
                        //    Geocode the adress/area entered too get the center. Then, center the map
                        //    on it and zoom
                        geocoder.geocode(
                            {
                                address: address,
                                componentRestrictions: {locality: 'Nairobi'}
                            }, function (results, status) {
                                if (status == google.maps.GeocoderStatus.OK) {
                                    map.setCenter(results[0].geometry.location);
                                    map.setZoom(15);
                                } else {
                                    window.alert('We could not find that location - try entering a more' + 'specific place');
                                }

                            }
                        )
                    }

                }


            }


        });

    }


    // This function takes in a COLOR, and then creates a new marker
    // icon of that color. The icon will be 21 px wide by 34 high, have an origin
    // of 0, 0 and be anchored at 10, 34).
    function makeMarkerIcon(markerColor) {
        var markerImage = new google.maps.MarkerImage(
            'http://chart.googleapis.com/chart?chst=d_map_spin&chld=1.15|0|' + markerColor +
            '|40|_|%E2%80%A2',
            new google.maps.Size(21, 34),
            new google.maps.Point(0, 0),
            new google.maps.Point(10, 34),
            new google.maps.Size(21, 34));
        return markerImage;
    }

}

























