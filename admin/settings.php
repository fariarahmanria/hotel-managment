<?php 
        require('inc/essentials.php');
        adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
      <?php require('inc/links.php'); ?>

</head>
<body class="bg-light">
    
 <?php require('inc/header.php'); ?>
    
 <div class="container-fluid" id="main-content">
   <div class="row">
     <div class="col-lg-10 ms-auto p-4 overflow-hidden">
      <h3 class="mb-4">SETTINGS</h3>
         
         
       <!-- General setting section-->   
            
       <div class="card border-0 shadow-sm mb-4">
         <div class="card-body">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="card-title m-0">General Setting</h5>
           <!-- Button trigger modal -->

           <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
            <i class="bi bi-pencil-square"></i> Edit
           </button>
          </div>
          <h6 class="card-subtitle mb-1 fw-bold"> Site Title</h6>
           <p class="card-text" id="site_title"></p>
          <h6 class="card-subtitle mb-1 fw-bold"> About us</h6>
             <p class="card-text" id="site_about"></p>
        </div>
         </div>
             
         <!-- Modal -->
        <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
       <div class="modal-dialog">
        <form>
       <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title">General Setting</h5>
        </div>
       <div class="modal-body">
        <div class="mb-3">
         <label class="form-label">Site Title</label>
          <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none">
         </div>
           <div class="mb-3">
         <label class="form-label">About us</label>
         <textarea  name="site_about" id="site_about_inp" class="form-control"  rows="6"></textarea>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button"  onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
        <button type="button" onclick="upd_general(site_title.value,site_about.value)" class="btn custom-bg text-white shadow-none">Save</button>
               </div>
              </div>
            </form>
           </div>
          </div>

            <!-- Shutdown section--> 

               <div class="card border-0 shadow-sm mb-4">
           <div class="card-body">
           <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="card-title m-0">Shutdown Website</h5>
           <!-- Button trigger modal -->
            <div class="form-check form-switch">
             <form>
              <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
           
             </form>
              </div>
             </div>
           <p class="card-text">
          No customer will be allowed to book rooms, when shutdown mode is on!
         </p>
        </div>
         </div>


          <!-- Management team section-->   
            
           <div class="card border-0 shadow-sm mb-4">
           <div class="card-body">
           <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="card-title m-0">Management Team</h5>
           <!-- Button trigger modal -->

           <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
            <i class="bi bi-plus-square"></i> Add
           </button>
           </div>

           <div class="row" id="team-data">

           </div>
           </div>
           </div>

                     <!-- Modal -->
              <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
             <div class="modal-dialog">
            <form id="team_s_form">
          <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add Team Member</h5>
          </div>
          <div class="modal-body">
          <div class="mb-3">
         <label class="form-label">Name</label>
          <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none">
         </div>
           <div class="mb-3">
         <label class="form-label">Picture</label>
         <input type="file" name="member_picture" id="member_picture_inp"  accept=".jpg, .png, .webp, .jpeg" class="form-control shadow-none">
        </div>
         </div>
         <div class="modal-footer">
         <button type="button"  onclick=""  class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
         <button type="button" onclick="upd_general(site_title.value,site_about.value)" class="btn custom-bg text-white shadow-none">Save</button>
               </div>
              </div>
            </form>
           </div>
          </div>

              </div>
          </div>
        </div>
  
    
        <?php require('inc/script.php'); ?>

      <script>
        let general_data;


          let team_s_form = document.getElementById('team_s_form');
          let member_name_inp = document.getElementById9('member_name_inp');
          let member_picture_inp = document.getElementById9('member_picture_inp');

        function get_general()
          {
             let site_title = document.getElementById('site_title');
             let site_about = document.getElementById('site_about');

              let shutdown_toggle = document.getElementById('shutdown-toggle');


           let xhr = new XMLHttpRequest();
           xhr.open("POST","ajax/settings_crud.php",true);
           xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          
           xhr.onload =function(){
             general_data = JSON.parse(this.responseText);
           

             site_title.innerText = general_data.site_title;
              site_about.innerText = general_data.site_about;
             
             site_title_inp.value = general_data.site_title;
              site_about_inp.value = general_data.site_about;
             

              if(general_data.shutdown == 0){
                shutdown_toggle.checked = false;
                shutdown_toggle.value = 0;
              }
              else{
               shutdown_toggle.checked = true;
                shutdown_toggle.value = 1;
              }

            }

         xhr.send('get_general');
        }
         
        
        function upd_general(site_title_val,site_about_val) {

        
           let xhr = new XMLHttpRequest();
           xhr.open("POST","ajax/settings_crud.php",true);
           xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          
           xhr.onload =function(){

            var myModal = document.getElementById('general-s')
           var modal = bootstrap.Modal.getInstance(myModal) // Returns a Bootstrap modal instance
           modal.hide();

           if(this.responseText == 1)
           {
             alert('success','Changes saved!');
              get_general();
           }
           else
            {
                alert('error',' No Changes made!');
           }

            }

         xhr.send('site_title='+ site_title_val+'&site_about='+site_about_val+'&upd_general=1');

        }


         function upd_shutdown(val){
             let xhr = new XMLHttpRequest();
           xhr.open("POST","ajax/settings_crud.php",true);
           xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          
           xhr.onload =function(){

           if(this.responseText == 1)
           {
             alert('success','Site has been shutdown!');
              
           }
           else
            {
                alert('success',' Shutdown mode is off!');
           }
           get_general();
            }

         xhr.send('upd_shutdown='+val);

         }
         

         team_s_form.addEventListener('submit',function (e){
          e.preventDefault();
         add_member();
         });

          


         

         function add_member()
         {
           let data = new FormData();
           data.append('name',member_name_inp.value);
           data.append('picture',member_picture_inp.files[0]);
           data.append('add_member','');
      }

       window.onload = function(){
         get_general();
        }


      </script>

</body>
</html>
