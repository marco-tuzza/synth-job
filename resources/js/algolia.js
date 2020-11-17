(function() {
    var placesAutocomplete = places({
        appId: 'plT92Q60ZYBJ',
        apiKey: 'b2d1f81e1e0aa1ead87da414255dda36',
        container: document.querySelector('#form-address'),
        templates: {
            value: function(suggestion) {
                return suggestion.name;
            }
        }
    }).configure({
    });
    placesAutocomplete.on('change', function resultSelected(e) {
        if (document.querySelector('#form-address2')) {
            document.querySelector('#form-address2').value = e.suggestion.county || '';
            document.querySelector('#form-city').value = e.suggestion.city || '';
        }
        $('#latitude').val(e.suggestion.latlng.lat);
        $('#longitude').val(e.suggestion.latlng.lng);
    });
})();