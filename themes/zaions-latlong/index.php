<?php get_header( ) ?>

<!-- Index.php Content Starts -->
<div class="container">
   <div class="row">


      <!-- Display latitude and longitude -->


      <div class="col-6 offset-3 ">
         <div class="d-flex justify-content-center mainContainer">
            <div class="p-2 card w-100 ">
               <div class="form-group">
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