// Site JS

// var latlon = position.coords.latitude + "," + position.coords.longitude;
console.log("ready!");


var searchInput = 'search_input';

$(document).ready(function () {
   var autocomplete;
   autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
      types: ['geocode'],
   });

   google.maps.event.addListener(autocomplete, 'place_changed', function () {
      var near_place = autocomplete.getPlace();
      $('#loc_lat').text(near_place.geometry.location.lat());
      $('#loc_long').text(near_place.geometry.location.lng());
      console.log("data", near_place);
      document.getElementById('formated_address').innerHTML = near_place.formatted_address
      let frame = `
           <iframe width="100%" height="250"
                      src="https://maps.google.com/maps?q=${near_place.geometry.location.lat()},${near_place.geometry.location.lng()}&hl=es&z=14&amp;output=embed">
                   </iframe>
      `
      $("#result_container").html(frame)

   });
});

$(document).on('change', '#' + searchInput, function () {
   document.getElementById('latitude_input').value = '';
   document.getElementById('longitude_input').value = '';

   document.getElementById('latitude_view').innerHTML = '';
   document.getElementById('longitude_view').innerHTML = '';
});






