<?php
     session_start();
     if(!empty($_SESSION['id'])){
         if($_SESSION['tingkat']==0){
             header('location:mainpage_admin.php');
         }else{
             header('location:mainpage_user.php');
         }
     }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="no-margin bgcl-lblue">
        <div class="container">
            <h1 class="al-center cl-white ff-arial">Login</h1>
            <fieldset>
                <table>
                    <form action="login_proses.php" method="POST">
                        <ul>
                            <li class="cl-white ff-arial">Username :</li>
                            <li><input type="text" name="user" id="user"></li>
                        </ul>
                        <ul>
                            <li class="cl-white ff-arial">Password :</li>
                            <li><input type="password" name="pass" id="pass"></li>
                        </ul>
                        <ul>
                            <li colspan="2"><input type="submit" name="login" value="Login"></li>
                        </ul>
                    </form>
                </table>
            </fieldset>
        </div>
    </body>
</html>