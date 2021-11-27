<?php get_header( ) ?>

<!-- Index.php Content Starts -->
<div class="container">
   <div class="row">
      <div class="col-6 offset-3 ">
         <div class="d-flex justify-content-center mainContainer">
            <div class="card w-100 p-2 ">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Enter Location</label>
                  <input type="text" class="form-control" id="search_input" placeholder="Enter location">
               </div>
               <div class="mb-3">
                  <button class="btn btn-primary float-end" id='search_location'>Find</button>
               </div>
               <p id="result"></p>
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