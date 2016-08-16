//Register a new user
$('#btn-registeruser').on('click', function () {
    if ($.trim($('#email').val()) === "") {
        generate('error', emailrequired);
    }
    else if ($.trim($('#username').val()) == "") {
        generate('error', usernamerequired);
    }
    else if ($.trim($('#password').val()) == "") {
        generate('error', passwordrequired);
    }
    else if ($.trim($('#confirm_password').val()) == "") {
        generate('error', secondpasswordrequired);
    }
    else if ($.trim($('#role').val()) == "") {
        generate('error', rolerequired);
    }
    else if ($.trim($('#password').val()) != $.trim($('#confirm_password').val())) {
        generate('error', passwordmatch);
    }
    else {
        $.ajax({
            method: 'POST',
            url: urlRegisterUser,
            data: {
                email: $.trim($('#email').val()),
                username: $.trim($('#username').val()),
                password: $.trim($('#password').val()),
                confirm_password: $.trim($('#confirm_password').val()),
                role: $.trim($('#role').val()),
                _token: token
            }
        }).done(function (msg) {
            console.log(JSON.stringify(msg));
            generate('success', entrysuccessful);
            $('#new_userform').modal('hide');
        });
    }

});
/*This pops up a modal that update the details of the site, if they need to be updated
 * Any user can only update sites they uploaded individually*/
var siteId = 0;


$('.odd').find('.edit').on('click', function (event) {
    event.preventDefault();
    var siteLandmark = event.target.parentNode.parentNode.children[1].textContent;
    var siteLatitude = event.target.parentNode.parentNode.children[2].textContent;
    var siteLongitude = event.target.parentNode.parentNode.children[3].textContent;
    var siteSize = event.target.parentNode.parentNode.children[4].textContent;

    siteId = event.target.parentNode.parentNode.childNodes[1].textContent;
    $('#site-landmark').val(siteLandmark);
    $('#site-latitude').val(siteLatitude);
    $('#site-longitude').val(siteLongitude);
    $('#site-size').val(siteSize);

    $('#edit-modal').modal();
});
//This saves the modified changes in the database.
$('#site-modal-save').on('click', function () {
    $.ajax({
        method: 'POST',
        url: urlEdit,
        data: {
            landmark: $('#site-landmark').val(),
            latitude: $('#site-latitude').val(),
            longitude: $('#site-longitude').val(),
            size: $('#site-size').val(),
            siteId: siteId,
            _token: token
        }
    }).done(function (msg) {
        console.log(JSON.stringify(msg));
        $('#edit-modal').modal('hide');
    });
});

/*This pops up a modal that updates the data of a client. Client can be updated by any user. This though should be change*/

$('.even').find('.update').on('click', function (event) {
    event.preventDefault();
    var clientName = event.target.parentNode.parentNode.children[1].textContent;
    var clientContact = event.target.parentNode.parentNode.children[2].textContent;
    var clientEmail = event.target.parentNode.parentNode.children[3].textContent;
    $('#clientname').val(clientName);
    $('#clientcontact').val(clientContact);
    $('#clientemail').val(clientEmail);
    $('#client-modal').modal();
});

/*
 * This Processes transactions in the to be recorded in the database
 * */
$('#record-transaction').on('click', function () {
    //Gets the Id of the Site being Transacted
    //Passes the id to the Get Site that checks the status id of the transaction
    var id = $.trim($('#thee-site-id').val());
    //Gets the status_id of the Site being transacted and passes it to the Check Status Funtion that validates if a site is open
    getSite(id);
    //Checks if the status is open
    //Then calls the Validate function
    function checkStatus(status) {

        if (status === "Closed") {
            generate('error', siteclosed);
        }
        else if (status === "Booked") {
            /*getExpiryDate(id);*/
            generate('error', sitebooked);
        } else {
            //Initiates the validate function
            validate();
        }
    }

    //Validates that the data
    //Passes the data to the Save function
    function validate() {
        if ($.trim($('#thee-site-id').val()) === "") {
            generate('error', siterequired);
        }
        else if ($.trim($('#tmpclient_name').val()) == "") {
            generate('error', clientrequired);
        }
        else if ($.trim($('#event').val()) == "") {
            generate('error', eventrequired);
        }
        else if ($.trim($('#start_date').val()) == "") {
            generate('error', daterequired);
        }
        else if ($.trim($('#duration').val()) == "") {
            generate('error', durationrequired);
        }
        else if ($.trim($('#comment').val()) == "") {
            generate('error', commentrequired);
        } else {
            //Calls the save function
            save();
        }
    }

    //Save a transaction in the database.
    //Passes the valid data fields into the database
    function save() {
        $.ajax({
            method: 'POST',
            url: urlSaveTransaction,
            data: {
                site_id: $('#thee-site-id').val(),
                clientname: $('#tmpclient_name').val(),
                event: $('#event').val(),
                transaction_date: $('#start_date').val(),
                duration: $('#duration').val(),
                comment: $('#comment').val(),
                _token: token
            }
        }).done(function (msg) {
            generate('success', notification_html[3]);
            console.log(JSON.stringify(msg));

            $('#transaction-modal').modal('hide');
        });
    }

    //Gets the status_id of a site from the sites  table\
    function getSite(id) {
        var URL = 'http://tangerine.local/fetchSite/' + id;
        $.ajax({
            method: 'GET',
            url: URL,
            success: function (data) {
                var k = JSON.parse(data);
                //Passes the status id to the Get Status name function
                getStatusName(k.status_id);
            }
        });
    }

    //Gets the status name from the Status Table
    //Returns the status name to the check status function.
    function getStatusName(id) {
        var URL = 'http://tangerine.local/fetchStatus/' + id;
        $.ajax({
            method: 'GET',
            url: URL,
            success: function (data) {
                var k = JSON.parse(data);
                // Initiates the checkstatus function that checks to see if a site is open/closed or Booked
                checkStatus(k.status);
            }
        });

    }

    //Checks the expiry of a site.
    function getExpiryDate(id) {
        var url = 'http://tangerine.local/fetchExpiry/' + id;
        $.ajax({
            method: 'GET',
            url: URL,
            success: function (data) {
                var k = JSON.parse(data);
                console.log(k.expiry_date);
            }
        });
    }
});


//Creating a site and validation
//
$('#btn-create-site').on('click', function () {

    if ($.trim($('#landmark').val()) === "") {
        generate('error', landmarkrequired);
    }
    else if ($.trim($('#latitude').val()) == "") {
        generate('error', latituderequired);
    }
    else if ($.trim($('#longitude').val()) == "") {
        generate('error', longituderequired);
    }

    else if ($.trim($('#size').val()) == "") {
        generate('error', sizerequired);
    }
    else if ($.trim($('#status').val()) == "") {
        generate('error', statusrequired);
    }
    else {
        $.ajax({
            method: 'POST',
            url: urlCreateSite,
            data: {
                landmark: $.trim($('#landmark').val()),
                longitude: $.trim($('#longitude').val()),
                latitude: $.trim($('#latitude').val()),
                size: $.trim($('#size').val()),
                status: $.trim($('#status').val()),
                _token: token
            }

        }).done(function (msg) {
            console.log(JSON.stringify(msg));
            generate('success', notification_html[5]);
            $('#form-addsite').trigger("reset");
            /*location.reload();*/
        });
    }

});

// Validation and Sign In

$('#btn-signIn').on('click', function () {

    if ($.trim($('#email').val()) === "") {
        generate('error', emailrequired);
    }
    else if ($.trim($('#password').val()) == "") {
        generate('error', passwordrequired);
    }
    else {
        $.ajax({
            method: 'POST',
            url: urlSignin,
            data: {
                email: $.trim($('#email').val()),
                password: $.trim($('#password').val()),
                _token: token
            },
            success: function (msg) {

                window.location.href = "http://tangerine.local/dashboard";
                /* generate('information', notification_html[2]);

                 setTimeout(function () {
                 window.location.href = "http://tangerine.local/dashboard";
                 }, 1000);
                 */
            },


        });
    }

});
// Create a Client
$('#btn-addclient').on('click', function () {
    if ($.trim($('#client_name').val()) === "") {
        generate('error', namerequired);
    }
    else if ($.trim($('#client_contact').val()) == "") {
        generate('error', contactrequired);
    }
    else if ($.trim($('#client_email').val()) == "") {
        generate('error', emailrequired);
    }
    else {
        $.ajax({
            method: 'POST',
            url: urlCreateClient,
            data: {
                client_name: $.trim($('#client_name').val()).toLowerCase(),
                client_contact: $.trim($('#client_contact').val()),
                client_email: $.trim($('#client_email').val()),
                _token: token
            },
            success: function (msg) {
                generate('success', entrysuccessful);
                window.location.href = "http://tangerine.local/clientdashboard";

                /*

                 setTimeout(function () {
                 window.location.href = "http://tangerine.local/dashboard";
                 }, 1000);
                 */
            },
        });
    }
});

//Append Status values on the Select field on the Transaction Modal
$('#event').empty();
$.ajax({
    type: "GET",
    url: "http://tangerine.local/getStatus",
    data: {'status': status},
    success: function (data) {
        // Parse the returned json data
        var opts = $.parseJSON(data);
        // console.log(data);
        // Use jQuery's each to iterate over the opts value
        $.each(opts, function (i, d) {
            // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data
            $('#event').append('<option value="' + d.id + '">' + d.status + '</option>');
        });
    }
});

//Append Status values for Creating a site


$('#status').empty();
$.ajax({
    type: "GET",
    url: "http://tangerine.local/getStatus",
    data: {'status': status},
    success: function (data) {
        // Parse the returned json data
        var opts = $.parseJSON(data);
        // console.log(data);
        // Use jQuery's each to iterate over the opts value
        $.each(opts, function (i, d) {
            // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data
            $('#status').append('<option value="' + d.id + '">' + d.status + '</option>');
        });
    }
});













