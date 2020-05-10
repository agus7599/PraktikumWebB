<?php
    include('koneksi.php');
    if(isset($_POST['login'])){
        session_start();
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $sql = mysqli_query($koneksi,"SELECT * FROM `user` WHERE `username`='$user' AND`pass`='$pass'");
        if(mysqli_num_rows($sql) > 0){
            $data = mysqli_fetch_array($sql);
            $_SESSION['id'] = $data['id'];
            $_SESSION['tingkat'] = $data['tingkat'];
            if($data['tingkat'] == 0){
                header('location:mainpage_admin.php');
            }else{
                header('location:mainpage_user.php');
            }
        }
    }
?>