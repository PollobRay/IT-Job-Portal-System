<?php
    session_start();

     ///check authentication
    if(!isset($_SESSION['email'])) //if login not successfully
    {
        header('location:http://localhost/itjobportalsystem/viewjobs');
    }
    else if($_SESSION['login']!='company') //if user
         header('location:http://localhost/itjobportalsystem/viewjobs/');
   else //if comapny
    {
          //header('location:http://localhost/jobsite/viewjobs/cm');
    }

    $canApply="no";


    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

    $serial=0;

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $serial =(int) $_POST["jpass"];
    }
    $q="select * from jobs where job_serial=$serial;";

    $result=mysqli_query($con,$q);

    $comemail="";
    $company="";

    $title = "";
    $description = "";
    $experience  = "";
        
    $degree="";
    $vacancy="";
    $salary="";
    $ddate="";

    $expert="";

    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {

      $comemail=$row["com_email"];
      $company=$row["company"];
  
      $title = $row["title"];
      $description = $row["description"];
      $experience  = $row["experience"];
          
      $degree=$row["degree"];
      $vacancy=$row["vacancy"];
      $salary=$row["salary"];
      $ddate=$row["ddate"];
  
      $expert=$row["expert"];
    }
    
    $degreeS="";
    if($degree==1)
      $degreeS="PhD";
   else if($degree==2)
      $degreeS="M.Sc in eng.";
   else if($degree==3)
      $degreeS="B.Sc in eng.";
   else if($degree==4)
      $degreeS="Diploma in eng.";

    //for apply button
    if(isset($_SESSION['email']) && $_SESSION['login']=='users') //if login not successfully
    {
        $canApply="yes";

        $_SESSION['canApply']='yes';
        $_SESSION['job_serial_no']=$serial;
        $_SESSION['company_email']=$comemail;
    }

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
<script>
function canApplyAlert()
{
        if("<?php echo $canApply; ?>"=="no")
        {
            alert("To apply a job must login as a user");
        }
        
        else if("<?php echo $canApply; ?>"=="yes")
        {
            //alert("You can apply");
            window.location="http://localhost/itjobportalsystem/viewjobs/job/action.php";
        }
        
}
 function setExpert(str)
    {
        //c
        if(str.charAt(0)=='1') //for checked
        {
            document.getElementById('p1').checked = true;
        }
        else
        {
            document.getElementById('p1').checked = false;
        }

        //c++
        if(str.charAt(1)=='1') //for checked
        {
            document.getElementById('p2').checked = true;
        }
        else
        {
            document.getElementById('p2').checked = false;
        }

         //java
        if(str.charAt(2)=='1') //for checked
        {
            document.getElementById('p3').checked = true;
        }
        else
        {
            document.getElementById('p3').checked = false;
        }

        //python
        if(str.charAt(3)=='1') //for checked
        {
            document.getElementById('p4').checked = true;
        }
        else
        {
            document.getElementById('p4').checked = false;
        }

        //kotlin
        if(str.charAt(4)=='1') //for checked
        {
            document.getElementById('p5').checked = true;
        }
        else
        {
            document.getElementById('p5').checked = false;
        }

        //php
        if(str.charAt(5)=='1') //for checked
        {
            document.getElementById('p6').checked = true;
        }
        else
        {
            document.getElementById('p6').checked = false;
        }

        //javascript
        if(str.charAt(6)=='1') //for checked
        {
            document.getElementById('p7').checked = true;
        }
        else
        {
            document.getElementById('p7').checked = false;
        }

        //sql
        if(str.charAt(7)=='1') //for checked
        {
            document.getElementById('p8').checked = true;
        }
        else
        {
            document.getElementById('p8').checked = false;
        }

        //front end
        if(str.charAt(8)=='1') //for checked
        {
            document.getElementById('p9').checked = true;
        }
        else
        {
            document.getElementById('p9').checked = false;
        }

        //Back end
        if(str.charAt(9)=='1') //for checked
        {
            document.getElementById('p10').checked = true;
        }
        else
        {
            document.getElementById('p10').checked = false;
        }
    }
</script>

<div claas="main">
   <div class="menu_bar">
        <a href="../../" class="logo">IT<span>JobPortal</span>System</a>
      <nav class="navbar">
      <ul>
         <li><a href="../../../viewcompany">Company</a></li>
         <li><a href="../../../viewuser">People</a></li>
         <li><a href="../../../viewjobs">Jobs</a></li>
         <li><a href="../../../editprofile/com" style="color: red"><?php echo $_SESSION['name'];  ?></a></li>
         <li><a href="../../../logout">Logout</a></li>
      </ul>
      </nav>
   </div>


   <br><br><br><br>
   <div class="secondDiv">
         <div class="inner-box">
            <div class="card-front">
               <h2>Job Details</h2><br><br>
               

                     <div class="row">
                           <div class="col-25">
                              <label for="jtitle">Job Title</label>
                           </div>
                           <div class="col-75">
                              <input type="text" id="jtitle" value="<?php echo $title; ?>" name="jtitle" placeholder="Job title.." readonly>
                           </div>
                     </div>

                     <div class="row">
                        <div class="col-25">
                           <label for="fname">Description</label>
                        </div>
                        <div class="col-75">
                           <textarea id="text" name="des" rows="3" cols="29"   placeholder="add description.." readonly><?php echo $description; ?></textarea>
                        </div>
                  </div>

                  
                  <div class="row">
                        <div class="col-25">
                           <label for="exp">Experience (in Years)</label>
                        </div>
                        <div class="col-75">
                           <input type="text" id="exp" name="experience" value="<?php echo $experience; ?>" placeholder="experence.." oninput="this.value=this.value.replace(/[^0-9]/g,'');" readonly>
                        </div>
                  </div>

                  <div class="row">
                     <div class="col-25">
                        <label for="exp">Expert In</label>
                     </div>
                     <div class="Exoption" style="display:grid; grid-template-columns: repeat(4,1fr); margin-top:10px;">
                        <input type="checkbox" id="p1" name="c" value="c" disabled>
                        <label for="p1" >C</label>
                        <input type="checkbox" id="p2" name="cpp" value="cpp" disabled>
                        <label for="p2" >C++</label>
                        <input type="checkbox" id="p3" name="java" value="java" disabled>
                        <label for="p3">Java</label>
                        <input type="checkbox" id="p4" name="python" value="python" disabled>
                        <label for="p4" >Python</label>
                        <input type="checkbox" id="p5" name="kt" value="kt" disabled>
                        <label for="p5" >Kotlin</label>
                        <input type="checkbox" id="p6" name="php" value="php" disabled>
                        <label for="p6" >Php</label>
                        <input type="checkbox" id="p7" name="js" value="js" disabled>
                        <label for="p7" >Javascript</label>
                        <input type="checkbox" id="p8" name="sql" value="sql" disabled>
                        <label for="p8" >SQL</label>
                        <input type="checkbox" id="p9" name="fe" value="fe" disabled>
                        <label for="p9" >Front End</label>
                        <input type="checkbox" id="p10" name="be" value="be" disabled>
                        <label for="p10" >Back End</label>

                     </div>
                     
                     <script>setExpert('<?php echo $expert; ?>')</script>
                  </div>

                  <div class="row">
                        <div class="col-25">
                           <label for="deree">Degree Requirement</label>
                        </div>
                        <div class="col-75">
                        <input type="text" id="degree" name="degree" value="<?php echo $degreeS; ?>" readonly>
                        </div>
                  </div>
                  <div class="row">
                     <div class="col-25">
                        <label for="vacancy">Vacancy</label>
                     </div>
                     <div class="col-75">
                        <input type="text" id="vacancy" value="<?php echo $vacancy; ?>" name="vacancy" placeholder="add vacancy.." oninput="this.value=this.value.replace(/[^0-9]/g,'');" readonly>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-25">
                        <label for="vacancy">Application Deadline</label>
                     </div>
                     <div class="col-75">
                        <input type="date" id="vacancy" name="ddate" value='<?php echo $ddate; ?>' placeholder="add deadline.." readonly>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-25">
                        <label for="vacancy">Salary (in Thousands)</label>
                     </div>
                     <div class="col-75">
                        <input type="text" id="sal" name="salary" value="<?php echo $salary; ?>" placeholder="add salary.." oninput="this.value=this.value.replace(/[^0-9]/g,'');" readonly>
                     </div>
                  </div>
               
                  <div class="row">
                     <input type="submit" value="Apply" onclick="canApplyAlert()">
                  </div><br><br>
               </div>
               

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

