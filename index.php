<?php 
    session_start();
    include("config.php");
    if(isset($_SESSION['login_user']) )  
    { header("location:home.php");
    }
    if($_SERVER["REQUEST_METHOD"] =="POST")
    {
        $myusername = $_POST['username'];
        $mypassword = $_POST['password'];
        $password = md5 ($mypassword);

        $sql="SELECT adm_id FROM admin WHERE adm_contact='$myusername' AND adm_pass='$password'";
        $result=mysql_query( $sql );
        $row=mysql_fetch_array($result);

        $count=mysql_num_rows($result);
        if($count== 1)
            
        {   
            $_SESSION['login_user']=$myusername;
            header("location:home.php");
        }
        else
        {
            echo"Your login name or password is invalid!";

        }
    }
    ?>

    <html>
        <head>
        </head>
        <body>
            <center>
            <form action="" method="POST"> 
            <br>
        <br>
        <h2>Enter the details to Log In.</h2>
        <br>
        <br>
                <input type="text" id="username" name="username" value="" placeholder="Enter contact" ><br><br>

                <input type="text" id="password" name="password" value="" placeholder="Enter password" ><br><br>

               <input type="submit" value="Log In">
            </form>
           
        
       
           

            </center>
        </body>






    </html>