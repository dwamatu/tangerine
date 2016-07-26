/**
 * Created by black on 7/14/16.
 */


/*This pops up a modal that update the details of the site, if they need to be updated
 * Any user can only update sites they uploaded individually*/
var siteId=0;


$('.odd').find('.edit').on('click',function (event) {
    event.preventDefault();
    var siteLandmark = event.target.parentNode.parentNode.children[1].textContent;
    var siteLatitude = event.target.parentNode.parentNode.children[2].textContent;
    var siteLongitude = event.target.parentNode.parentNode.children[3].textContent;
    var siteSize = event.target.parentNode.parentNode.children[4].textContent;

    siteId =  event.target.parentNode.parentNode.childNodes[1].textContent;
    $('#site-landmark').val(siteLandmark);
    $('#site-latitude').val(siteLatitude);
    $('#site-longitude').val(siteLongitude);
    $('#site-size').val(siteSize);

    $('#edit-modal').modal();
});

$('#site-modal-save').on('click',function () {
   $.ajax({
       method: 'POST',
       url: urlEdit,
       data: {      landmark:$('#site-landmark').val(),
                    latitude:$('#site-latitude').val(),
                    longitude:$('#site-longitude').val(),
                    size: $('#site-size').val(),
                    siteId:siteId,
                    _token:token }
   }).done(function (msg) {
       console.log(JSON.stringify(msg));
        $('#edit-modal').modal('hide');
    }) ;
});

/*This pops up a modal that updates the data of a client. Client can be updated by any user. This though should be change*/

$('.even').find('.update').on('click', function (event) {
    event.preventDefault();
    var clientName = event.target.parentNode.parentNode.children[1].textContent;
    var clientContact = event.target.parentNode.parentNode.children[2].textContent;
    var clientEmail = event.target.parentNode.parentNode.children[3].textContent;
    $('#clientname').val(clientName);
    $('#clientcontact').val(clientContact);
    $('#clientemail').val(clientEmail)
    $('#client-modal').modal();


});