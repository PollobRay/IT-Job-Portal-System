<?php
    session_start(); //must be first line

    if(!isset($_SESSION['email'])) //if login not successfully
    {
        header('location:http://localhost/itjobportalsystem');
    }
    else if($_SESSION['login']!='users')
      header('location:http://localhost/itjobportalsystem/home/');

   $status=$_SESSION['status'];

?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>
<body>


<div claas="main">
   <div class="menu_bar">
   <a href="../../" class="logo">IT<span>JobPortal</span>System</a>
      <nav class="navbar">
      <ul>
         <li><a href="../../viewcompany">Company</a></li>
         <li><a href="../../viewuser">People</a></li>
         <li><a href="../../viewjobs">Jobs</a></li>
         <li><a href="../../viewappliedjob">View Applied Jobs</a></li>
         <li><a href="../../editprofile/usr"style="color: red"><?php echo $_SESSION['name'];  ?></a></li>
         <li><a href="../../logout">Log Out</a></li>
      </ul>
      </nav>
   </div>


    <br><br><br><br>
   <h2 style="text-align: center; background-color:#e9f437; "><?php echo "Your Account is ". $status; ?></h2>
   <div class="maindiv">
      <br>
      <div class="photo-gal">
         <div class="pic">
            <img src="res-2.png">
         </div>
         <div class="container">
            <h1>IT Job Portal System</h1>
            The <b>IT Job Portal System</b> application where Employer can find best candidate for the job and job seeker can get job with their qualification.
    
            
         </div>
         <div class="pic">
            <img src="res-3.png">
         </div>
      </div>

   </div>

   <!--Find job-->
   <br><br>
   <div class="secondDiv">
      
      <div class="sec2">
         <br><br>
         <h1>Search Yours Dream job from here </h1>
         <a href="../../viewjobs"><input type="submit" value="Search"></a>
      </div>
      <div class="secimg">
         <img src="job.png">    
      </div>
      
   </div>

   <div class="horspacing" style="height:50px;">
      <div>

      </div>
   </div>

    <!--Comapany-->
    <div class="companyDiv">
      
      <div class="cmpimg">
         <img src="company.png">
         
      </div>

      <div class="compdes">
         <br><br>
         <h1>View all Company</h1>
         <a href="../../viewcompany"><input type="submit" value="Company"></a>
      </div>
      
      
   </div>

   <div class="horspacing" style="height:50px;">
      <div>

      </div>
   </div>
   
   <!--People-->
   <br><br>
   <div class="secondDiv">
      
      <div class="sec2">
         <br><br>
         <h1>Finds People with their Qualification</h1>
         <a href="../../viewuser"><input type="submit" value="Finds"></a>
      </div>
      <div class="secimg">
         <img src="people.png">    
      </div>
      
   </div>

   


  
   <footer>
      <div class="main-content">
         <div class="left box">
          <h2>About Us</h2>
          <div class="content">
               <p>&copy;IT Job Portal System<br><br>Developers<br>.................<br>.....<br>.......<br>.......</p> 
              <div class="social">
                  <a href="#"><span class="fab fa-facebook-f"></span></span></a>
                  <a href="#"><span class="fab fa-twitter"></span></span></a>
                  <a href="#"><span class="fab fa-instagram"></span></span></a>
                  <a href="#"><span class="fab fa-youtube"></span></span></a>
                  
              </div>
          </div>
         </div> 
         <div class="center box">
          <h2>Address</h2>
          <div class="content">
              <div class="place">
                  <span class="fas fa-map-marker-alt"></span>
                  <span class="text">DUET,Gazipur</span>
              </div>
              <div class="phone">
                  <span class="fas fa-phone-alt"></span>
                  <span class="text">01700000008</span>
              </div>
              <div class="email">
                  <span class="fas fa-envelope"></span>
                  <span class="text">itjobportalsystem@gmail.com</span>
              </div>
          </div>
         </div> 

         <div class="right box">
          <h2>Contact Us</h2>
          <div class="content">
              <form action="#">
                  <div class="email">
                      <div class="text">Email *</div>
                      <input type="email" required>
                  </div>
                  <div class="msg">
                      <div class="text">Message *</div>
                      <textarea rows="2" cols="25" required></textarea>
                  </div>
                  <div class="btnn">
                      <button type="submit">Send</button>
                  </div>

              </form>
          </div>
         </div>
      </div>
  </footer>
  





  

</div>

</body>
</html>

