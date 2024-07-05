<?php
    session_start(); //must be first line

    if(!isset($_SESSION['email'])) //if login not successfully
    {
        header('location:http://localhost/itjobportalsystem');
    }
    else if($_SESSION['login']!='company') //if not company
          header('location:http://localhost/itjobportalsystem');
    
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css">
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
         <li><a href="../viewcompany">Company</a></li>
         <li><a href="../viewuser">People</a></li>
         <li><a href="../viewjobs">Jobs</a></li>
         <li><a href="../editprofile/com" style="color: red"><?php echo $_SESSION['name'];  ?></a></li>
         <li><a href="../logout">Logout</a></li>
      </ul>
      </nav>
   </div>

   <br><br><br><br>
   <h2 style="text-align: center; background-color:#e9f437; ">If the Account is not Approved, then Job won't post</h2>
   <div class="maindiv">
   
   <div class="secondDiv">
         <div class="inner-box">
            <div class="card-front">
               <h2>POST A JOB</h2><br><br>
               <form action="action.php" method="post">
                     <div class="row">
                           <div class="col-25">
                              <label for="jtitle">Job Title</label>
                           </div>
                           <div class="col-75">
                              <input type="text" id="jtitle" name="jtitle" placeholder="Job title..">
                           </div>
                     </div>

                     <div class="row">
                        <div class="col-25">
                           <label for="fname">Description</label>
                        </div>
                        <div class="col-75">
                           <textarea id="text" name="des" rows="3" cols="29" placeholder="add description.."></textarea>
                        </div>
                  </div>

                  
                  <div class="row">
                        <div class="col-25">
                           <label for="exp">Experience (in Years)</label>
                        </div>
                        <div class="col-75">
                           <input type="text" id="exp" name="experience" placeholder="experence.." oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                        </div>
                  </div>

                  <div class="row">
                     <div class="col-25">
                        <label for="exp">Expert In</label>
                     </div>
                     <div class="Exoption" style="display:grid; grid-template-columns: repeat(4,1fr); margin-top:10px;">
                        <input type="checkbox" id="p1" name="c" value="c">
                        <label for="p1" >C</label>
                        <input type="checkbox" id="p2" name="cpp" value="cpp">
                        <label for="p2" >C++</label>
                        <input type="checkbox" id="p3" name="java" value="java">
                        <label for="p3">Java</label>
                        <input type="checkbox" id="p4" name="python" value="python">
                        <label for="p4" >Python</label>
                        <input type="checkbox" id="p5" name="kt" value="kt">
                        <label for="p5" >Kotlin</label>
                        <input type="checkbox" id="p6" name="php" value="php" >
                        <label for="p6" >Php</label>
                        <input type="checkbox" id="p7" name="js" value="js">
                        <label for="p7" >Javascript</label>
                        <input type="checkbox" id="p8" name="sql" value="sql">
                        <label for="p8" >SQL</label>
                        <input type="checkbox" id="p9" name="fe" value="fe">
                        <label for="p9" >Front End</label>
                        <input type="checkbox" id="p10" name="be" value="be">
                        <label for="p10" >Back End</label>

                     </div>
                     
                     
                  </div>

                  <div class="row">
                        <div class="col-25">
                           <label for="deree">Degree Requirement</label>
                        </div>
                        <div class="col-75">
                           <select name="degree" id="lan">
                              <option value="1">PhD</option>
                              <option value="2">M.Sc in eng. </option>
                              <option value="3">B.Sc in eng. </option>
                              <option value="4">Diploma in eng.</option>
                           </select>
                        </div>
                  </div>
                  <div class="row">
                     <div class="col-25">
                        <label for="vacancy">Vacancy</label>
                     </div>
                     <div class="col-75">
                        <input type="text" id="vacancy" name="vacancy" placeholder="add vacancy.." oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-25">
                        <label for="vacancy">Application Deadline</label>
                     </div>
                     <div class="col-75">
                        <input type="date" id="vacancy" name="ddate" placeholder="add deadline.." required>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-25">
                        <label for="vacancy">Salary (in Thousands)</label>
                     </div>
                     <div class="col-75">
                        <input type="text" id="sal" name="salary" placeholder="add salary.." oninput="this.value=this.value.replace(/[^0-9]/g,'');" required>
                     </div>
                  </div>
               
                  <div class="row">
                     <input type="submit" value="Submit">
                  </div><br><br>
               </div>
               </form>
            </div>   
         </div>
   </div>

   <footer>
      <div class="main-content">
         <div class="left box">
          <h2>About Us</h2>
          <div class="content">
             <p>&copy;Job site<br><br>Developers<br>.................<br>.....<br>.......<br>....... </p> 
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
                  <span class="text">01700000000</span>
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

