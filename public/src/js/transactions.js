var map;
var transactionmarkers = [];
function initMap() {


    var transactionpoints = [];
    $.ajax({
        method: 'GET',
        url: 'http://tangerine.local/paste',
        success: function (results) {
            $.each(JSON.parse(results), function (site, k) {

                /* console.log(k.landmark+' | '+k.latitude+' | '+k.longitude);*/

                transactionpoints.push(
                    {
                        title: k.landmark.replace("\"", "'"),
                        location: {
                            lat: parseFloat(k.latitude),
                            lng: parseFloat(k.longitude)
                        }


                    }
                );

            });

            map = new google.maps.Map(document.getElementById('map_canvas'), {
                center: {lat: -1.274941, lng: 36.810459},
                zoom: 13
            });
            var transsactionInfowindow = new google.maps.InfoWindow();
            // The following group uses the location array to create an array of markers on initialize.
            for (var i = 0; i < transactionpoints.length; i++) {
                // Get the position from the location array.
                var transactionposition = transactionpoints[i].location;
                var transactiontitle = transactionpoints[i].title;
                // Create a marker per location, and put into markers array.
                var tmarker = new google.maps.Marker({
                    position: transactionposition,
                    title: transactiontitle,
                    animation: google.maps.Animation.DROP,
                    id: i
                });
                // Push the marker to our array of markers.
                transactionmarkers.push(tmarker);
                // Create an onclick event to open an infowindow at each marker.
                tmarker.addListener('click', function () {
                    alert('hey');
                });
            }


        }
    });

}
