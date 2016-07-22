$(function () {
    var LocsA_ = [];
    $.ajax({
        method: 'GET',
        url: 'http://tangerine.local/paste',
        success: function (results) {
            $.each(JSON.parse(results), function (site, k) {
                /*console.log(k.landmark+' | '+k.latitude+' | '+k.longitude);*/
                var frm = '<h3>' + k.landmark + '</h3><br><p style="align-self: center">' + k.size + '</p><br><button >Book</button>';
                LocsA_.push(
                    {
                        lat: k.latitude,
                        lon: k.longitude,
                        title: k.landmark,
                        html: frm,
                        icon: 'http://maps.google.com/mapfiles/markerA.png',
                        animation: google.maps.Animation.DROP
                    }
                );
            });


            new Maplace({
                locations: LocsA_,
                map_div: '#gmap-dropdown',
                controls_title: 'Choose a location:',
                listeners: {
                    click: function (map, event) {

                        alert('That was a click!');
                    }
                }

            }).Load();
        }

    });


});

