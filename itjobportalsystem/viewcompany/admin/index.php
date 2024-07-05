<?php
    session_start();

    
    //check authentication
    if(!isset($_SESSION['email'])) //if login not successfully
    {
        header('location:http://localhost/itjobportalsystem/viewcompany/');
    }
    else if($_SESSION['login']=='users') //if user
         header('location:http://localhost/itjobportalsystem/viewcompany/usr');
    else if($_SESSION['login']=='company')
         header('location:http://localhost/itjobportalsystem/viewcompany/cm');
    else if($_SESSION['login']=='admin')
    {

    }


    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

    $q="select * from company";

    $result=mysqli_query($con,$q);

    $cname=array();
    $email=array();
   
    $len=0;
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        $cname[]=$row["com_name"];
        $email[]=$row["email"];
        $len ++;
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
    function myFunction(cname,email)
    {
        document.getElementById('uname').innerHTML = cname;
        document.getElementById('email').innerHTML = email;
        document.getElementById('jopen').style.visibility='visible';
        document.getElementById("jpass").value = email; 
        
        //window.location="http://localhost/jobsite/viewjobs/job/";
    }
</script>

<div claas="main">
   <div class="menu_bar">
        <a href="../../" class="logo">IT<span>JobPortal</span>System</a>
      <nav class="navbar">
      <ul>
         <li><a href="../../viewcompany">Company</a></li>
         <li><a href="../../viewuser">People</a></li>
         <li><a href="../../viewjobs">Jobs</a></li>
         <li><a href="../../editprofile" style="color: red"><?php echo $_SESSION['name'];  ?></a></li>
         <li><a href="../../logout">Logout</a></li>
      </ul>
      </nav>
   </div>


   <br><br><br><br>
   <div class="secondDiv" style="height:100%;">
         <div class="inner-box" style="width:60%;  margin: right 10px; padding: right 20px;">
            <br><br>
            <h1 style="color:red; text-align:center;">Company List</h1>
            <hr>
            <br><br>
            <div class="card-front" style="overflow-y:scroll;  overflow-x:scroll;  buttom 100px;">
            
                <?php 
                    $i = 0;
                   while($i<$len):
                        
                ?>
                <h2 style="cursor:pointer;"  onclick="myFunction('<?php echo $cname[$i]; ?>','<?php echo $email[$i]; ?>')"><?php echo $cname[$i]; ?></h2>
    
                <br>
               
                <?php $i ++; endwhile; ?> 
                
            </div> 
            <br><br>  
         </div>
         <div class="sidepanel" style="width:40%; overflow-x:scroll;  padding: right 20px;">
                <form action="com/index.php" method="post">
                    <h2 id="uname" style="text-aligh:left;"></h2>
                    <h3 id="email" style="color:red;" ></h3>
                    
                    <input id="jpass" name="jpass" type="text" style="visibility: hidden;" >
                    <input id="jopen" type="submit" value="view" style="visibility: hidden;">
                </form>
        </div>
   </div>

   <footer>
      <div class="main-content">
         <div class="left box">
          <h2>About Us</h2>
          <div class="content">
             <p>&copy;Job site<br><br>Developers<br>.................<br>...............<br>.........<br>...............</p> 
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

