<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="inner-box">
                <div class="card-front">
                    <h2>LOGIN</h2>
                    <form action="validation.php" method="post">

                        <input type="email" class="input-box" name="email" placeholder="Email" >
                        <input type="password" class="input-box" name="pass" placeholder="Password" style="margin-bottom: 20px">
                        <span style="margin-right: 20px">Login as</span><br>
                        <input type="radio" name="option" value="user" checked="checked" style="margin-left:40px"><span style="margin-right: 10px  ">User</span>
                        <input type="radio" name="option" value="company" ><span style="margin-right: 10px">Company</span>
                        <input type="radio" name="option" value="admin" ><span>Admin</span>
                        <br>
                        <input type="checkbox" style="margin-top: 20px"><span>Remember Me</span>
                        <button type="submit" class="submit-btn" value="login" >Login</button>

                    </form>
                    <a href="#">Forget Password ?</a>
                    <a href="../signup"><button type="button" class="btn">I'm New Here</button></a>

                </div>
            </div>
        </div>
    </div>
</body>

</html>