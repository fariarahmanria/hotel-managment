<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tj Hotel - HOME</title>
   <?php require('inc/links.php'); ?>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
     <style>
        *{
            font-family: 'Poppins', sans-serif;
        }
        .h-font{
            font-family:'Merienda',cursive;
         }
        /* Chrome, Safari, Edge, Opera */
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
      -webkit-appearance: none;
     margin: 0;
   }

     /* Firefox */
       input[type=number] {
     -moz-appearance: textfield;

    
       }
       

     .custom-bg{
     background-color: #2ec1ac
     }
     .custom-bg:hover{
     background-color: #279e8c
     }
     .availability-form{
      margin-top: -50px;
      z-index: 2;
      position: relative;
     }

   @media screen and (max-width: 575px)
   {

  .availability-form{
      margin-top: 25px;
        padding: 0 35px;
   }
    }
     </style>


</head>
<body class="bg-light">

       <?php require('inc/header.php') ?>

        <!--carousel -->

        <div class="container-fluid px-lg-4 mt-4">
     <!-- Swiper -->
      <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/img1.jpg"  class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/img2.jpg"  class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/img3.jpg"  class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/img5.jpg" class="w-100 d-block"   />
      </div>
      <div class="swiper-slide">
        <img src="images/img5.jpg"  class="w-100 d-block"  />
      </div>
      <div class="swiper-slide">
        <img src="images/img6.jpg"  class="w-100 d-block" />
      </div>
    </div>
    </div>

     <!--check availability-->

   <div class="container availability-form">
      <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-in</label>
         <input type="date" class="form-control shadow-none">
            </div>
              <div class="col-lg-3  mb-3">
              <label class="form-label" style="font-weight: 500;">Check-out</label>
          <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-log-3  mb-3">
            <label class="form-label" style="font-weight: 500;">Adult</label>
           <select class="form-select shadow-none">
         <option selected>Open this select menu</option>
         <option value="1">One</option>
         <option value="2">Two</option>
         <option value="3">Three</option>
   </select>
          </div>
                      <div class="col-lg-2  mb-3">
            <label class="form-label" style="font-weight: 500;">Children</label>
           <select class="form-select shadow-none">
         <option selected>Open this select menu</option>
         <option value="1">One</option>
         <option value="2">Two</option>
         <option value="3">Three</option>
         </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn tex-white shadow-none custom-bg">Submit</button>
          </div>
        </form>
      </div>
    </div>
   </div>


       <!--Our Rooms-->

       <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    
        <div class= "container">
         <div class="row">
       <div class="col-lg-4 col-md-6 my-3">
     
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="rooms/1.jpg" class="card-img-top">

   <div class="card-body">
   <h5> Simple Room </h5>
   <h6 class="mb-4"> ৳ 2000 per night</h6>
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
      
       
      <div class="guest mb-4">
         <h6 class="mb-1">Guests</h6>
     <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Adults
      </span>
     <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 children
      </span>
      </div>

      <div class="rating mb-4">
     <h6 class="mb-1">Rating</h6>
     <span class="badge round-pill bg-light">
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    </span>
      </div>
      <div class="d-flex justify-content-evenly mb-2">

   <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
   <a href="rooms.php#room1" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
  
         </div>
        </div>
       </div>
      </div>

       <div class="col-lg-4 col-md-6 my-3">
     
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
   <img src="rooms/1.jpg" class="card-img-top">

       <div class="card-body">
       <h5> Deluxe Room </h5>
       <h6 class="mb-4"> ৳ 2000 per night</h6>
       <div class="features mb-4">
       <h6 class="mb-1">Features</h6>
       <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
         2 Rooms 
       </span>
       <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Washroom
      </span>
      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Balcony
      </span>
      </div>
        

       <div class="guest mb-4">
         <h6 class="mb-1">Guests</h6>
     <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        5 Adults
      </span>
     <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        3 children
      </span>
      </div>

      <div class="rating mb-4">
     <h6 class="mb-1">Rating</h6>
     <span class="badge round-pill bg-light">
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-half text-warning"></i>
    </span>
      </div>
      <div class="d-flex justify-content-evenly mb-2">

   <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
   <a href="rooms.php#room2" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
  
   </div>
  </div>
   </div>
   </div>
     <div class="col-lg-4 col-md-6 my-3">
     
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
   <img src="rooms/1.jpg" class="card-img-top">

   <div class="card-body">
   <h5> Royal Room</h5>
   <h6 class="mb-4"> ৳ 2000 per night</h6>
   <div class="features mb-4">
    <h6 class="mb-1">Features</h6>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        2 Rooms 
      </span>
     <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Washroom
      </span>
      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        1 Balcony
      </span>
      </div>
      

       <div class="guest mb-4">
         <h6 class="mb-1">Guests</h6>
     <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        5 Adults
      </span>
     <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        3 children
      </span>
       
      
      </div>
      <div class="rating mb-4">
     <h6 class="mb-1">Rating</h6>
     <span class="badge round-pill bg-light">
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    <i class="bi bi-star-fill text-warning"></i>
    </span>
      </div>
      <div class="d-flex justify-content-evenly mb-2">

      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
      <a href="rooms.php#room3" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
  
      </div>
      </div>
      </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
      </div>
      </div>
      </div>
    
     <!--Our Facilities-->

      <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    
       <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
          <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="features/wifi_icon.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
          </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="features/wifi_icon.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
          </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="features/wifi_icon.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
          </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="features/wifi_icon.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
          </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="features/wifi_icon.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
          </div>
          <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
          </div>
        </div>
       </div>

        <!--Testimonials-->

       <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
      
       <div class="container mt-5">
       <div class="swiper swiper-testimonials">
         <div class="swiper-wrapper mb-5">
            

             <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
       <img src="features/star_icon.svg" width="30px">
       <h6 class="m-0 ms-2">Random user</h6>
       </div>
       <p>
       Lorem ipsum dolor sit amet, consectetur adipisicing elit.
       Optio eum assumenda aut eaque repudiandae placeat consequatur laboriosam ad dolor fuga!
        </p>
        <div class="rating">
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
             </div>
             </div>
            

             <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
       <img src="features/star_icon.svg" width="30px">
       <h6 class="m-0 ms-2">Random user</h6>
       </div>
       <p>
       Lorem ipsum dolor sit amet, consectetur adipisicing elit.
       Optio eum assumenda aut eaque repudiandae placeat consequatur laboriosam ad dolor fuga!
        </p>
        <div class="rating">
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
             </div>
             </div>
             

             <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
       <img src="features/star_icon.svg" width="30px">
       <h6 class="m-0 ms-2">Random user</h6>
       </div>
       <p>
       Lorem ipsum dolor sit amet, consectetur adipisicing elit.
       Optio eum assumenda aut eaque repudiandae placeat consequatur laboriosam ad dolor fuga!
        </p>
        <div class="rating">
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
             </div>
             </div>

         </div>
        <div class="swiper-pagination"></div>

        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Learn More>>></a>
          </div>
        </div>
      
         <!--Contact us-->

       

       <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">CONTACT US</h2>
    
       <h5>Call us</h5>
       <a href="tel : +8801234567891" class="d-inline-block mb-2 text-decoration-none text-dark">
         <i class="bi bi-telephone-fill"></i>  +8801234567891
        </a>
        <br>
        <a href="tel : +8801987654321" class="d-inline-block text-decoration-none text-dark">
         <i class="bi bi-telephone-fill"></i>  +8801987654321
         </a>

         <div class="bg-white p-4 rounded mb-4">
          <h5>Find us</h5>
         <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-twitter me-1"></i>  Twitter
          </span>
         </a>
         <br>
         <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-facebook me-1"></i>  Facebook
          </span>
         </a>
         <br>
         <a href="#" class="d-inline-block">
          <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-instagram me-1"></i>  Instagram
          </span>
         </a>
        </div>
          </div>
        </div>
       </div>
      </div>




  <?php require('inc/footer.php') ?>
        


          <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    



       <!-- Initialize Swiper -->
       <script>
              var swiper = new Swiper(".swiper-container", {
         spaceBetween: 30,
         effect: "fade",
         loop: true,
         autoplay: {
         delay: 3500,
         disableOnInteraction: false,
        }
            });

                       var swiper = new Swiper(".swiper-testimonials", {
                     effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: "auto",
                    slidesPerView: "3",
                      loop: true,
                    coverflowEffect: {
                  rotate: 50,
                stretch: 0,
                depth: 100,
               modifier: 1,
               slideShadows: false,
        },
        pagination: {
        el: ".swiper-pagination",
        },
         breakpoints:{
          320: {
            slidesPerView: 1,
          },
          640: {
            slidesPerView: 1,
          },
           768: {
            slidesPerView: 2,
          },
            1024: {
            slidesPerView: 3,
          },
         }

            });

     </script>


  </body>
</html>