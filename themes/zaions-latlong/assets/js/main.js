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


var x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
   console.log(position);
   $('#loc_lat').text(position.coords.latitude);
   $('#loc_long').text(position.coords.longitude);

   $.get(`https://maps.googleapis.com/maps/api/geocode/json?latlng=${position.coords.latitude},${position.coords.longitude}&key=YOUR_API_KEY`,function (data, status) {
      console.log(data);
      document.getElementById('formated_address').innerHTML = data.results[0].formatted_address
   })
   let frame = `
           <iframe width="100%" height="250"
                      src="https://maps.google.com/maps?q=${position.coords.latitude},${position.coords.longitude}&hl=es&z=14&amp;output=embed">
                   </iframe>
      `
   $("#result_container").html(frame)
}






