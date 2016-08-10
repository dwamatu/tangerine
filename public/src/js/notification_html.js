        // notification body's can be any html string or just string
        var notification_html = [];
                notification_html[0] = '<div class="activity-item"> <i class="fa fa-tasks text-warning"></i>' +
                ' <div class="activity"> There are <a href="#">6 new tasks</a> waiting for you. Don\'t forget! ' +
                '<span>About 3 hours ago</span> </div> </div>',
                notification_html[1] = '<div class="activity-item"> <i class="fa fa-check text-success"></i> <div ' +
                'class="activity">You must  <a href="#">enter an area</a> <span>or address</span> </div> </div>',
                notification_html[2] = '<div class="activity-item"> <i class="fa fa-heart text-danger"></i> ' +
                '<div class="activity"> Welcome <a href="#">Back</a> ' +
                '</div> </div>',
                notification_html [4] = '<div class="activity-item"> <i class="fa fa-check text-success"></i> ' +
                '<div class="activity">You must  <a href="#">enter an area or address</a> ' +
                '<span>Required by Google Maps Api</span> </div> </div>',
                notification_html[3] = '<div class="activity-item"> <i class="fa fa-shopping-cart text-success"></i>' +
                ' <div class="activity"> <a href="#">Transaction</a> Successful ' + '<span>Tangerine</span> </div> </div>',
                notification_html[5] = '<div class="activity-item"> <i class="fa fa-shopping-cart text-success"></i>' +
                ' <div class="activity"> <a href="#">Entry</a> Successful ' + '<span>Tangerine</span> </div> </div>';


        var namerequired = '<div class="activity-item"> <i class="fa fa-tasks text-warning"r"></i> ' +
        '<div class="activity"> Name <a href="#">Required</a> ' +
        '</div> </div>';
        var contactrequired = '<div class="activity-item"> <i class="fa fa-tasks text-warning"r"></i> ' +
        '<div class="activity"> Contact <a href="#">Required</a> ' +
        '</div> </div>';
        var emailrequired = '<div class="activity-item"> <i class="fa fa-tasks text-warning"r"></i> ' +
        '<div class="activity"> Email <a href="#">Required</a> ' +
        '</div> </div>';
        var passwordrequired = '<div class="activity-item"> <i class="fa fa-tasks text-warning"r"></i> ' +
        '<div class="activity"> Password <a href="#">Required</a> ' +
        '</div> </div>';
        var landmarkrequired = '<div class="activity-item"> <i class="fa fa-tasks text-warning"r"></i> ' +
        '<div class="activity"> Landmark <a href="#">Required</a> ' +
        '</div> </div>';
        var longituderequired = '<div class="activity-item"> <i class="fa fa-tasks text-warning"r"></i> ' +
        '<div class="activity"> Longitude <a href="#">Required</a> ' +
        '</div> </div>';
        var latituderequired = '<div class="activity-item"> <i class="fa fa-tasks text-warning"r"></i> ' +
        '<div class="activity"> Latitude <a href="#">Required</a> ' +
        '</div> </div>';
        var sizerequired = '<div class="activity-item"> <i class="fa fa-tasks text-warning"r"></i> ' +
        '<div class="activity"> Size <a href="#">Required</a> ' +
        '</div> </div>';
        var statusrequired = '<div class="activity-item"> <i class="fa fa-tasks text-warning"r"></i> ' +
        '<div class="activity"> Status <a href="#">Required</a> ' +
        '</div> </div>';
        var googleMapserr = '<div class="activity-item"> <i class="fa fa-check text-success"></i> ' +
        '<div class="activity">You must  <a href="#">enter an area or address</a> ' +
        '<span>Required by Google Maps Api</span> </div> </div>';
        var entrysuccessful= '<div class="activity-item"> <i class="fa fa-shopping-cart text-success"></i>' +
            ' <div class="activity"> <a href="#">Entry</a> Successful ' + '<span>Tangerine</span> </div> </div>';
        var siterequired = notification_html[0] = '<div class="activity-item"> <i class="fa fa-tasks text-warning"></i>' +
            ' <div class="activity"> Missing <a href="#">Site</a> Id ' + ' </div> </div>';

        var clientrequired = notification_html[0] = '<div class="activity-item"> <i class="fa fa-tasks text-warning"></i>' +
            ' <div class="activity"> Client <a href="#">Name</a> Required ' + ' </div> </div>';

        var eventrequired = '<div class="activity-item"> <i class="fa fa-tasks text-warning"r"></i> ' +
            '<div class="activity"> Event <a href="#">Required</a> ' +
            '</div> </div>';
        var daterequired = '<div class="activity-item"> <i class="fa fa-tasks text-warning"r"></i> ' +
            '<div class="activity"> Date <a href="#">Required</a> ' +
            '</div> </div>';
        var durationrequired = '<div class="activity-item"> <i class="fa fa-tasks text-warning"r"></i> ' +
            '<div class="activity"> Duration <a href="#">Required</a> ' +
            '</div> </div>';
        var commentrequired = '<div class="activity-item"> <i class="fa fa-tasks text-warning"r"></i> ' +
            '<div class="activity"> Comment <a href="#">Required</a> ' +
            '</div> </div>';