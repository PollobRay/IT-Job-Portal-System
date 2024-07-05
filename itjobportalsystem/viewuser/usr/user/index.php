<?php
    session_start();

     //check authentication
    if(!isset($_SESSION['email'])) //if login not successfully
    {
       header('location:http://localhost/itjobportalsystem/viewuser/');
    }
    else if($_SESSION['login']=='users') //if user
    {
            //header('location:http://localhost/itjobportalsystem/viewuser/usr');
    }
   else //if comapny or admin
   {
           header('location:http://localhost/itjobportalsystem/viewuser/');
   } 
?>
<?php

    $email="";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = $_POST["jpass"];
    }

    // for table users
    $table = "users";
   

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

    $q="select * from $table where email= '$email';";

    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);

    $fname="";
    $lname="";
    $date="";
    $pass="";
    $number="";
    $gender="";
    $male="";
    $female="";

    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        $fname=$row["fname"];
        $lname=$row["lname"];
        $date=$row["bdate"];
        $pass=$row["password"];
        $number=$row["cnt_no"];
        $gender=$row["gender"];
    }
    
    //end user


    //for people
    $table = "people";
   

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

    $q="select * from $table where email= '$email';";

    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);

    $fatname="";
    $matname="";
    $address="";
    $ssc_school="";
    $ssc_group="";
    $ssc_year="";
    $ssc_board="";
    $ssc_gpa="";
    $hsc_college="";
    $hsc_group="";
    $hsc_year="";
    $hsc_board="";
    $hsc_gpa="";
    $ug_degree="";
    $ug_dept="";
    $ug_cgpa="";
    $ug_uni="";
    $pg_degree="";
    $pg_dept="";
    $pg_cgpa="";
    $pg_uni="";
    $expert="";

    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        $fatname=$row["fatname"];
        $matname=$row["matname"];
        $address=$row["address"];
        $ssc_school=$row["ssc_school"];
        $ssc_group=$row["ssc_group"];
        $ssc_year=$row["ssc_year"];
        $ssc_board=$row["ssc_board"];
        $ssc_gpa=$row["ssc_gpa"];
        $hsc_college=$row["hsc_college"];
        $hsc_group=$row["hsc_group"];
        $hsc_year=$row["hsc_year"];
        $hsc_board=$row["hsc_board"];
        $hsc_gpa=$row["hsc_gpa"];
        $ug_degree=$row["ug_degree"];
        $ug_dept=$row["ug_dept"];
        $ug_cgpa=$row["ug_cgpa"];
        $ug_uni=$row["ug_uni"];
        $pg_degree=$row["pg_degree"];
        $pg_dept=$row["pg_dept"];
        $pg_cgpa=$row["pg_cgpa"];
        $pg_uni=$row["pg_uni"];
        $expert=$row["expert"];
    }

?>



<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script> 
    function setGender(str)
    {
        if(str=='male')
        {
            document.getElementById('male').checked = true;
        }
        else
        {
           document.getElementById('female').checked = true;
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

</head>
<body>

<div claas="main">
    <div class="menu_bar">
        <a href="../../../" class="logo">IT<span>JobPortal</span>System</a>
        <nav class="navbar">
        <ul>
           <li><a href="../../../viewcompany">Company</a></li>
           <li><a href="../../../viewuser">People</a></li>
           <li><a href="../../../viewjobs">Jobs</a></li>
           <li><a href="../../../editprofile/com" style="color: red"><?php echo $_SESSION['name'];  ?></a></li>
           <li><a href="../../../logout">Logout</a></li>
        </ul>
        </nav>
     </div><br><br>

    <div class="secondDiv"><br><br>
        <div class="title"><h2 style="text-align: center;"><?php echo $fname." ".$lname; ?></h2></div>
            <br><br><br>
        <div class="title"><b>Personal Information</b></div>
        <hr>
        <fonm action="#" method="get">
        <div class="user-details">
            <div class="input-box">
                <span class="details" >First Name</span>
                <input type="text" name="fname" placeholder="Enter first name.." value="<?php echo $fname; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Last Name</span>
                <input type="text" name="lname" placeholder="Enter last name.." value="<?php echo $lname; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" value="<?php echo $email; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Phone</span>
                <input type="text" name="phone" placeholder="Enter your number.." value="<?php echo $number; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Fathers Name</span>
                <input type="text" name="fatname" placeholder="Enter fathers name.." value="<?php echo $fatname; ?>" readonly >
            </div>
            <div class="input-box">
                <span class="details">Mothers Name</span>
                <input type="text" name="matname" placeholder="Enter mothers name.." value="<?php echo $matname; ?>" readonly>
            </div>
            
            <div class="input-box"> 
                <span class="details">Permanent Address</span>
                <input type="text" name="address" placeholder="Address" value="<?php echo $address; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Date of Birth</span>
                <input type="date" name="bdate" value='<?php echo $date; ?>' readonly>
            </div>

        </div>
        <label>Gender:</label>  <br>  
                <input type="radio" id="male" name="gender" value="male" disabled> 
                <label for="male" >Male</label> 
                <input type="radio" id="female" name="gender" value="female" disabled>
                <label for="female">Female</label>
                <script>setGender('<?php echo $gender; ?>');</script>
                <br><br><br>
        <div class="title"><b>Educational Qualification</b></div>
        <hr>
        <div class="title">S.S.C</div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">School</span>
                <input type="text" placeholder="School Name" name="ssc_school" value="<?php echo $ssc_school; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Group</span>
                <input type="text" placeholder="S.S.C Group" name="ssc_group" value="<?php echo $ssc_group; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Passing Year</span>
                <input type="text" placeholder="S.S.C Passing Year" name="ssc_year" value="<?php echo $ssc_year; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Education Board</span>
                <input type="text" placeholder="Education Broad" name="ssc_board" value="<?php echo $ssc_board; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">G.P.A</span>
                <input type="text" placeholder="S.S.C GPA" name="ssc_gpa" value="<?php echo $ssc_gpa; ?>" readonly>
            </div>
        </div>

        <div class="title">H.S.C/Diploma</div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">College</span>
                <input type="text" placeholder="College Name" name="hsc_college" value="<?php echo $hsc_college; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Group/Techonology</span>
                <input type="text" placeholder="H.S.C Group" name="hsc_group" value="<?php echo $hsc_group; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Passing Year</span>
                <input type="text" placeholder="H.S.C Passing Year" name="hsc_year" value="<?php echo $hsc_year; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Education Board</span>
                <input type="text" placeholder="Education Broad" name="hsc_board" value="<?php echo $hsc_board; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">G.P.A/C.G.P.A</span>
                <input type="text" placeholder="S.S.C GPA" name="hsc_gpa" value="<?php echo $hsc_gpa; ?>" readonly>
            </div>
        </div>

        <div class="title">Under Graduation</div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">Degree</span>
                <input type="text" placeholder="Graduation Degree" name="ug_degree" value="<?php echo $ug_degree; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Department</span>
                <input type="text" placeholder="Graduation Department"  name="ug_dept" value="<?php echo $ug_dept; ?>" readonly >
            </div>
            <div class="input-box">
                <span class="details">CGPA</span>
                <input type="text" placeholder="Graduation CGPA" name="ug_cgpa" value="<?php echo $ug_cgpa; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">University</span>
                <input type="text" placeholder="University" name="ug_uni" value="<?php echo $ug_uni; ?>" readonly>
            </div>
        </div>
        <div class="title">Post Graduation</div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">Degree</span>
                <input type="text" placeholder="Post Graduation Degree" name="pg_degree" value="<?php echo $pg_degree; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Department</span>
                <input type="text" placeholder="Post Graduation Department"  name="pg_dept" value="<?php echo $pg_dept; ?>" readonly >
            </div>
            <div class="input-box">
                <span class="details">CGPA</span>
                <input type="text" placeholder="Post Graduation CGPA" name="pg_cgpa" value="<?php echo $pg_cgpa; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">University</span>
                <input type="text" placeholder="University" name="pg_uni" value="<?php echo $pg_uni; ?>" readonly>
            </div>
        </div>
        <div class="title">Expert In</div>             
        <br>
        <div class="expert">
            <input type="checkbox" id="p1" name="c" value="c" style="margin-left:120px;" disabled>
            <label for="p1" style="margin-right:35px;">C</label>
            <input type="checkbox" id="p2" name="cpp" value="cpp" disabled>
            <label for="p2" style="margin-right:55px;">C++</label> 
            <input type="checkbox" id="p3" name="java" value="java" disabled>
            <label for="p3" style="margin-right:22px;">Java</label>
            <input type="checkbox" id="p4" name="python" value="python" disabled>
            <label for="p4" style="margin-right:38px;">Python</label>
            <input type="checkbox" id="p5" name="kt" value="kt" disabled>
            <label for="p5" style="margin-right:20px;">Kotlin</label>
            <br>
            <input type="checkbox" id="p6" name="php" value="php" style="margin-left:120px;" disabled>
            <label for="p6" style="margin-right:20px;">Php</label>
            <input type="checkbox" id="p7" name="js" value="js" disabled>
            <label for="p7" style="margin-right:20px;">Javascript</label>
            <input type="checkbox" id="p8" name="sql" value="sql" disabled>
            <label for="p8" style="margin-right:20px;">SQL</label>
            <input type="checkbox" id="p9" name="fe" value="fe" disabled>
            <label for="p9" style="margin-right:20px;">Front End</label>
            <input type="checkbox" id="p10" name="be" value="be" disabled>
            <label for="p10" style="margin-right:20px;">Back End</label>

            <script>setExpert('<?php echo $expert; ?>')</script>
        </div>          
       <br><br>             
        
    </form>
    </div>
</div>
</body>
</html>

