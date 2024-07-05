<?php
    session_start();

?>
<script>
    function alreadyApplied()
    {
        alert("You have already applied for the job");
        window.location="http://localhost/itjobportalsystem/viewjobs";
    }
    function applicationSubmit()
    {
        alert('Your application for the job is submitted');
        window.location="http://localhost/itjobportalsystem/viewjobs";
    }
    function notEligible()
    {
        alert('You are not eligible for the job');
        window.location="http://localhost/itjobportalsystem/viewjobs";
    }
    function deadlineOver()
    {
        alert('Job Deadline is over');
        window.location="http://localhost/itjobportalsystem/viewjobs";
    }
    function accountNotApprovedAlert()
    {
        alert("Can't Apply the job because the Account is not Approved");
        window.location.href = "http://localhost/itjobportalsystem/viewjobs";
    }

</script>
<?php    

    $user_email=$_SESSION['email'];

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

        //checking the account is Approved or not
    $q="select * from users where email='$user_email' && status='approved';";
        
    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);

    if($num==0)
    {
        echo "<script>accountNotApprovedAlert()</script>";
    }
    else if($_SESSION['canApply']=='yes')
    {
        $user_email=$_SESSION['email'];
        $job_serial_no=$_SESSION['job_serial_no'];
        $company_email=$_SESSION['company_email'];

        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'itjobportalsystem');

        $q="select * from applyjob where job_serial_no= $job_serial_no && user_email= '$user_email';";

        $result=mysqli_query($con,$q);
        $num=mysqli_num_rows($result);

        if($num==0)
        {
            //check eligiblity
            $q="select * from jobs where job_serial=$job_serial_no;";
            $result=mysqli_query($con,$q);
            $degreeS="";
            $degree=0;
            $experience="";
            $expert="";

            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                $degree=$row['degree'];
                $experience=(int)$row['experience'];
                $expert=$row['expert'];
            }
            
            if($degree==1) //PhD
                $degreeS="pg_cgpa";
            else if($degree==2)
                $degreeS="pg_cgpa";
            else if($degree==3)
                $degreeS="ug_cgpa";
            else if($degree==4)
                $degreeS="hsc_gpa";

            //getting user data
            $q="select * from people where email='$user_email' && experience >= $experience;";
            $userResult=mysqli_query($con,$q);
            $userExpert="";
            $userGPA="";
            $isEligble="yes";

            if(mysqli_num_rows($userResult))
            {
                while($row1=mysqli_fetch_array($userResult,MYSQLI_ASSOC))
                {
                    $userExpert=$row1['expert'];
                    $userGPA=$row1[$degreeS];
                }
                if($userGPA=='0.00')
                {
                    //not eligible
                    $isEligble="no";
                }
                else
                {
                    for($i=0; $i<strlen($expert); $i++) 
                    {
                        if($expert[$i]=='1')// when job required
                        {
                            //checks user is expert or not
                            if($userExpert[$i]=='0')
                            {
                                //not eligble
                                $isEligble="no";
                                break;
                            }
                        }
                    }
                }
            }
            else
            {
                $isEligble="no";
                //not eligble
            }

            //checks deadline for the job application
            $dq="select * from jobs where job_serial=$job_serial_no && ddate>=CURRENT_DATE();";
            $dresult=mysqli_query($con,$dq);
            if(mysqli_num_rows($dresult))
            {

            }
            else
            {
                //deadline is over
                $isEligble="no";
                echo "<script>deadlineOver()</script>";
            }
            
            //if eligible
            if($isEligble=="yes")
            {
                $q="insert into applyjob (job_serial_no,company_email,user_email,status) values ($job_serial_no,'$company_email','$user_email','pending');";

                $result=mysqli_query($con,$q);

                echo "<script>applicationSubmit()</script>";
            }
            else
            {
                //not eligble
                echo "<script>notEligible()</script>";
            }
        }
        else
        {
            echo "<script>alreadyApplied()</script>";
        }


    }

   
?>