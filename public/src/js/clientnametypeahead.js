var clientobj = new Bloodhound({
    datumTokenizer: function (datum) {
        return Bloodhound.tokenizers.whitespace(datum.value);
    },
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
        wildcard: '%QUERY',
        url: '/clientsearch/%QUERY',
    }
});
$('.typeahead').typeahead(null, {
    source: clientobj,
    name: 'schools',
    display: 'client_name',
    templates: {
        empty: [
            '<div class="empty-message">',
            'Unable to find any Client that matches the current entry.',
            '</div>'
        ].join('\n'),
        suggestion: Handlebars.compile('<div class="school-info">'
            + '<span>Name: <b>@{{client_name}}</b> - </span>'
            + '<span>Contact: <b>@{{client_contact}}</b> - </span>'
            + '</div>')
    }
});

