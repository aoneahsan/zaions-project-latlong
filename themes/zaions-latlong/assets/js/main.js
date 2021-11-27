// Site JS

// var latlon = position.coords.latitude + "," + position.coords.longitude;
console.log("ready!");








$(document).ready(function () {
   $("#search_location").on('click', () => {
      let searching_address = $("#search_input").val()
      $.get(`https://maps.googleapis.com/maps/api/geocode/json?address=${searching_address}&key=your_api_key`, function (data, status) {
         let resutl = data.results[0].geometry.location
         console.log(data);
         console.log(resutl);
         let p_result = `lat:${resutl.lat} ,lng:${resutl.lng}`
         $("#result").text(p_result); 
         let frame = `
          <iframe width="100%" height="250"
                     src="https://maps.google.com/maps?q=${resutl.lat},${resutl.lng}&hl=es&z=14&amp;output=embed">
                  </iframe>
         `
         $("#result_container").html(frame)
         // var img_url = https://maps.googleapis.com/maps/api/staticmap?center=
         // "+latlon+" & zoom=14 & size=400x300 & sensor=false & key=YOUR_KEY";

         // document.getElementById("google_map").innerHTML = "<img src='" + img_url + "'>";
      });

   })
});




