<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    
    <link rel="stylesheet" href="css/style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   
   <header>
      <div id="CustomHeader"class="container">
     
	 <div class="row">
	  
     <div id="CustomList"class="col-md-6">
      <ul type="none">
	  
	  <li><a href="admin.php">Admin</a></li>
	      
	  
	  </ul>
	  
	 </div> 
	 </div>
  </div>
</header>
   
   <section class="contact_section">
       <div class="container py-5 ">
           <div class="row">
               <div class="col-lg-6 mx-auto">
                   <div class="card ">
                       <div class="card-body body_section">
                           <div class="row">
                               <div class="col-lg-12">
                                   <div class="contact_title text-center text-white py-3">
                                       <h3>Contact Us</h3>
                                   </div>
                               </div>
                           </div>
                           
                          <form action="contact.php" method="POST">
                               <div class="form py-3">
                                   <div class="form-row my-5">
                                       <div class="col-lg-6 input_row">
                                           <input type="text" class="input_sec" name="fname" placeholder="First Name*">
                                           <span class="Focus-border"></span>
                                       </div>
                                       <div class="col-lg-6 input_row">
                                           <input type="text" class="input_sec" name="lname" placeholder="Last Name*">
                                           <span class="Focus-border"></span>
                                       </div>
                                   </div>
                                   
                                   <div class="form-row">
                                       <div class="col-lg-6 input_row">
                                           <input type="email" class="input_sec" name="email" placeholder="Email*">
                                           <span class="Focus-border"></span>
                                       </div>
                                       <div class="col-lg-6 input_row">
                                           <input type="number" class="input_sec" name="mobile" placeholder="Mobile Number*">
                                           <span class="Focus-border"></span>
                                       </div>
                                   </div>
                                   
                                   <div class="form-row">
                                       <div class="col-lg-12 input_row textarea_row">
                                           <textarea name="message"  cols="65" rows="5" placeholder="Your Message*"></textarea>
                                       </div>
                                   </div>
                                   
                                   <div class="form-row">
                                      <div class="col-lg-12 button_row">
                                          <input type="submit" class="submit_button" value="Sent Message">
                                           
                                      </div>
                                      
                                   </div>
                                   
                               </div>
                          </form>
                              
                           
                           
                       </div>
                       
                         <?php
    
    if(isset($_REQUEST['success'])){
        echo "<font color='green'>Message sent successfully.</font>";
    }
    
    ?>
                       
                   </div>
               </div>
           </div>
       </div>
   </section>
   
 
    

    
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>