<?php get_header( ) ?>

<!-- Index.php Content Starts -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container-fluid">
      <a class="navbar-brand" href="#">zaions</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="m-auto mb-2 navbar-nav mb-lg-0">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">About Us</a>
            </li>
          
         </ul>
       
      </div>
   </div>
</nav>
<div class="container">
   <div class="row">


      <!-- Display latitude and longitude -->


      <div class="col-6 offset-3 ">

         <div class="d-flex justify-content-center mainContainer">
            <div class="p-2 card w-100 ">
               <div class="form-group">
                  <div class="text-center find_my_locaiton">
                     <button class='mb-1 btn btn-primary' onclick="getLocation()">Find my location</button>
                     <h4>Or</h4>
                  </div>
                  <label>Location:</label>
                  <input type="text" class="form-control" id="search_input" placeholder="Type address..." />
                  <p>lat: <span id="loc_lat"></span></p>
                  <p>lng: <span id="loc_long"></span></p>
                  <p><b>place:</b> <span id="formated_address"></span></p>
               </div>
               <div id="result_container">



               </div>
            </div>
         </div>

      </div>
   </div>
</div>
<!-- Index.php Content Ends -->

<!-- Footer.php include -->
<?php get_footer() ?>