<?php
session_start();

?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap.css">
    <title>Login</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }

    body{
     
    }
</style>

<body style="background-image: url('img1.jpg'); background repeat:no-repeat; width: 100%;height: 100% ">
   
<div style="background-color:black;padding: 30px;opacity: 0.6 ;">
<h1 style="color: white;font-size: 60px;"><b><center>Student Login Form</center> </b></h1>

       
            <div class="col-md-4 col-md-offset-4 login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="email" type="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>


                    <button class="btn btn-lg btn-success btn-block" type="submit"  name="stlogin" style="background-color: blue;border-color: black">SignIn</button>

                
                    
                   <!-- <button href="sclass="btn btn-lg btn-success btn-block" onclick="document.getElementById('id01').style.display='block'" type="submit"  name="reg" style="background-color: green;border-color: black">SignUp</button>
                   <button onclick="location.signup.php.style.display='block'" style="width:auto;">Sign Up</button>-->

                            <button class="btn btn-lg btn-success btn-block" type="submit" onclick="window.location.href='/signup.php'" name="reg" style="background-color: blue;border-color: black">SignUp</button>

                            </fieldset>
                    </form>
                </div>
            </div>
            
       
   
</body>

</html>

<?php

include("db.php");

if(isset($_POST['reg']))
{
header ("location:signup.php");
}
/*elseif(isset($_POST['adlogin']) )
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE email='$user_email'AND password='$user_pass'";

    $run=mysql_query($check_user)or die("111");

    if(!mysql_num_rows($run))
        {
                if($user_email=="admin@gmail.com")
                {                
                                $_SESSION['email']=$user_email;
        
                                header("location:view.php");

                }
                else
                {
                      echo "<script>alert('Email or password is incorrect!')</script>";
                      header("location:index.php");
                }
                
    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}*/
elseif(isset($_POST['stlogin']) )
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE email='$user_email'AND password='$user_pass'";

    $run=mysql_query($check_user)or die("111");

    if(mysql_num_rows($run))
        {
                if($user_email=="admin@gmail.com")
                {                
                          echo "<script>alert('Email or password is incorrect!')</script>";
                          header("location:index.php");
                }
                else
                {
                                $_SESSION['email']=$user_email;
                                header("location:employee.php");

                }
    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}

?>