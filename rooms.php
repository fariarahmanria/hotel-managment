<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tj Hotel - ROOMS</title>
      <?php require('inc/links.php'); ?>
   
</head>
<body class="bg-light">

       <?php require('inc/header.php') ?>

      
             <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
            <div class="h-line bg-dark"></div>
           </div>

           <div class="container-fluid">
             <div class="row">

                 <div class="col-lg-3 col-md-12  mb-lg-0 mb-4 ps-4">
                     <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                     <div class="container-fluid flex-lg-column align-items-stretch">
                      <h4 class="mt-2">FILTERS</h4>
                     <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="filterDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                       <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                       <div class="border bg-light p-3 rounded mb-3">
                          <h5 class="mb-3" style="font-size: 18px">CHECK AVAILABILITY</h5> 
                              <label class="form-label">Check-in</label>
                               <input type="date" class="form-control shadow-none mb-3">
                             <label class="form-label">Check-out</label>
                              <input type="date" class="form-control shadow-none">
                        </div>
                         <div class="border bg-light p-3 rounded mb-3">
                          <h5 class="mb-3" style="font-size: 18px">FACILITIES</h5> 
                            <div class="mb-2">
                            <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                            <label class="form-check-label" for="f1">Facility one</label>                                       
                            </div>
                            <div class="mb-2">
                            <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                            <label class="form-check-label" for="f2">Facility two</label>                                       
                            </div>
                            <div class="mb-2">
                            <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                            <label class="form-check-label" for="f3">Facility three</label>                                       
                            </div>
                           </div>
                               <div class="border bg-light p-3 rounded mb-3">
                          <h5 class="mb-3" style="font-size: 18px">GUESTS</h5>
                         <div class="d-flex">
                              <div class="me-3">
                            <label class="form-label">Adults</label>
                              <input type="number" class="form-control shadow-none">
                          </div>
                           <div>
                            <label class="form-label">Children</label>
                              <input type="number" class="form-control shadow-none">
                          </div>
                         </div>
                           </div>
                         </div>
                 </div>
              </nav>  
               </div>




               <div class="col-lg-9 col-md-12 px-4">
               <div class="card mb-4 border-0 shadow" >
                <div class="row g-0 p-3 align-items-center">
                  <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                 <img src="rooms/1.jpg" class="img-fluid rounded">
                  </div>
                  <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple Room </h5>
               <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                    Rooms 
                 </span>
                 <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                   Washroom
                </span>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                 Balcony
                </span>
                </div>
                  <div class="facilities mb-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                   Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                  Tv
                 </span>
                 <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                  Ac
                 </span>
                 <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                 Room heater
                </span>
                </div>
                <div class="guest">
                 <h6 class="mb-1">Guests</h6>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                2 Adults
               </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               1 children
               </span>
              </div>
                  </div>
                   <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                 <h6 class="mb-4"> ৳ 2000 per night</h6>
                 <a href="#" class="btn btn-sm  w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                  <!-- Change: -->
                 <button type="button" class="btn btn-sm w-100 btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#room1Modal">More details </button>


                     </div>
                   </div>
                  </div>

                   
              <!-- Inside rooms.php -->
          <div class="card mb-0 border-0 shadow" id="room1"> <!-- Add id="room1" here -->
        <div class="row g-0 p-3 align-items-center">
         <!-- ... rest of your room card code ... -->
     </div>
       </div>


           <!-- Modal for Room 1 Details -->
                <div class="modal fade" id="room1Modal" tabindex="-1" aria-labelledby="room1ModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg modal-dialog-centered">
               <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="room1ModalLabel">Simple Room - Full Details</h5>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
            <div class="modal-body">
             <div class="container-fluid">
             <div class="row">
            <!-- Large image in modal -->
            <div class="col-md-12 mb-3">
               <img src="rooms/simple-1.jpg" class="img-fluid rounded w-100 mb-3">
            </div>
            
             <!-- Extra info section -->
             <div class="col-md-6">
              <h6>Features</h6>
              <p class="text-secondary">This room is 450 sq. ft. and features a king-sized bed and soundproof windows for a quiet stay.</p>
             </div>
            
               <div class="col-md-6">
              <h6>Full Facilities List</h6>
              <ul>
                <li>High-speed 5G Wifi</li>
                <li>Individual Climate Control (AC/Heater)</li>
                <li>24/7 Room Service</li>
               </ul>
                </div>
                </div>
                 <hr>
                 <div class="row">
                 <div class="col-12">
                  <h6>Description</h6>
                <p>Our Simple Room provides a blend of comfort and style. It is perfect for families and friends, offering a dedicated workspace and a beautiful view of the city skyline.</p>
             </div>
          </div>
          </div>
         </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn text-white custom-bg shadow-none">Book Now</button>
                  </div>
            </div>
             </div>

          </div> 


                  <div class="card mb-4 border-0 shadow" >
             <div class="row g-0 p-3 align-items-center">
             <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
             <img src="rooms/1.jpg" class="img-fluid rounded">
              </div>
               <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Deluxe Room </h5>
               <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                    Rooms 
                 </span>
                 <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                   Washroom
                </span>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                 Balcony
                </span>
                </div>
                  <div class="facilities mb-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                   Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                  Tv
                 </span>
                 <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                  Ac
                 </span>
                 <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                 Room heater
                </span>
                </div>
                <div class="guest">
                 <h6 class="mb-1">Guests</h6>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                2 Adults
               </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               2 children
               </span>
              </div>
                 </div>
             <div class="col-md-2 text-center">
                 <h6 class="mb-4"> ৳ 5000 per night</h6>
                 <a href="#" class="btn btn-sm  w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                  <button type="button" class="btn btn-sm w-100 btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#room2Modal">More details </button>
  
                     </div>
                   </div>
                 </div>

                  <!-- Inside rooms.php -->
          <div class="card mb-0 border-0 shadow" id="room2"> <!-- Add id="room2" here -->
        <div class="row g-0 p-3 align-items-center">
         <!-- ... rest of your room card code ... -->
     </div>
       </div> 
                   <!-- Modal for Room 1 Details -->
                <div class="modal fade" id="room2Modal" tabindex="-1" aria-labelledby="room2ModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg modal-dialog-centered">
               <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="room2ModalLabel">Deluxe Room - Full Details</h5>
              <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
            <div class="modal-body">
             <div class="container-fluid">
             <div class="row">
              <!-- Large image in modal -->
            <div class="col-md-12 mb-3">
               <img src="rooms/delux-2.jpg" class="img-fluid rounded w-100 mb-3">
            </div>
            
             <!-- Extra info section -->
             <div class="col-md-6">
              <h6>Features</h6>
              <p class="text-secondary">This room features a king-sized bed one study table and soundproof windows for a quiet stay.</p>
             </div>
            
               <div class="col-md-6">
              <h6>Full Facilities List</h6>
              <ul>
                <li>High-speed 5G Wifi</li>
                <li>Smart TV </li>
                <li>Individual Climate Control (AC/Heater)</li>
                <li>Mini fridge</li>
                <li>24/7 Room Service</li>
               </ul>
                </div>
                </div>
                 <hr>
                 <div class="row">
                 <div class="col-12">
                  <h6>Description</h6>
                <p>Our Deluxe Room provides a blend of comfort and style. It is perfect for larger families or groups, offering a dedicated workspace and a beautiful view of the city skyline.</p>
             </div>
              </div>
               </div>
                    </div>
             <div class="modal-footer">
            <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn text-white custom-bg shadow-none">Book Now</button>
                  </div>
            </div>
            </div>
            </div> 


            
                  <div class="card mb-4 border-0 shadow" >
             <div class="row g-0 p-3 align-items-center">
             <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
             <img src="rooms/1.jpg" class="img-fluid rounded">
              </div>
               <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Royal Room </h5>
               <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                    Rooms 
                 </span>
                 <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                   Washroom
                </span>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                 Balcony
                </span>
                </div>
                  <div class="facilities mb-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                   Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                  Tv
                 </span>
                 <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                  Ac
                 </span>
                 <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                 Room heater
                </span>
                </div>
                <div class="guest">
                 <h6 class="mb-1">Guests</h6>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                3 Adults
               </span>
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
               2 children
               </span>
              </div>
                 </div>
             <div class="col-md-2 text-center">
                 <h6 class="mb-4"> ৳ 20000 per night</h6>
                 <a href="#" class="btn btn-sm  w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <button type="button" class="btn btn-sm w-100 btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#room3Modal">More details </button>
  
  
                     </div>
                   </div>
                 </div>

                  <!-- Inside rooms.php -->
          <div class="card mb-0 border-0 shadow " id="room3"> <!-- Add id="room3" here -->
        <div class="row align-items-center">
         <!-- ... rest of your room card code ... -->
     </div>
       </div>
                   
           <!-- Modal for Room 1 Details -->
                <div class="modal fade" id="room3Modal" tabindex="-1" aria-labelledby="room3ModalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg modal-dialog-centered">
               <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="room3ModalLabel">Royal Room - Full Details</h5>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
            <div class="modal-body">
             <div class="container-fluid">
             <div class="row">
            <!-- Large image in modal -->
            <div class="col-md-12 mb-3">
               <img src="rooms/royal-3.jpg" class="img-fluid rounded w-100 mb-3">
            </div>
            
             <!-- Extra info section -->
             <div class="col-md-6">
              <h6>Features</h6>
              <p class="text-secondary">This room features a king-sized bed, a study table,two side lamps one side table,one center table and soundproof windows for a quiet stay.</p>
             </div>
            
               <div class="col-md-6">
              <h6>Full Facilities List</h6>
              <ul>
                <li>High-speed 5G Wifi</li>
                <li>Smart TV </li>
                <li>Individual Climate Control (AC/Heater)</li>
                 <li>One couch</li>
                <li>24/7 Room Service</li>
               </ul>
                </div>
                </div>
                 <hr>
                 <div class="row">
                 <div class="col-12">
                  <h6>Description</h6>
                <p>Our Royal Room provides a blend of comfort and style. It is perfect for families and friends, offering a dedicated workspace and a beautiful view of the city skyline.</p>
             </div>
          </div>
          </div>
         </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn text-white custom-bg shadow-none">Book Now</button>
                  </div>
            </div>
             </div>

          </div> 

               </div>

         </div>
      </div>
    

  <?php require('inc/footer.php') ?>
        



  </body>
</html>