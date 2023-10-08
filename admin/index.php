<?php require('include/config.php');
     require_once('include/require.php');

    session_start();
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    if(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true){
    redirect('dashboard.php');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-login</title>
    <?php require('include/links.php');?>
    
    <style>
        div.login-form{
            position: absolute;
            top: 50%; 
            left: 50%; 
            transform: translate(-50%,-50%);
            width:400px;
        }
    </style>
</head>
<body class="bg-light ">

    <div class="login-form rounded shadow overflow-hidden text-center">
        <form action="" method="post">
            <h4 class="bg-dark text-white py-3">Admin Login</h4>
            <div class="p-4">
                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input name="admin_email" type="email" class="form-control shadow-none text-center required" placeholder="Enter your email" id="exampleInputEmail1" aria-describedby="emailHelp">      
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input name="admin_pass" type="password" class="form-control shadow-none text-center required" id="exampleInputEmail1" placeholder="Enter your password" aria-describedby="emailHelp">      
                </div>
                <button class="btn text-white custom-bg shadow " name="login">Submit</button>
            </div>
        </form>
    </div>


    <?php
        if(isset($_POST['login'])){
            

            $frm_data = filteration($_POST);
            $query="SELECT * FROM `admin_log` WHERE `admin_email`=? AND `admin_pass`=?";  //checking if it matches
            $values=[$frm_data['admin_email'],$frm_data['admin_pass']];
            

            $res=select($query,$values,"ss");
            if($res->num_rows==1){
             $row = mysqli_fetch_assoc($res);
             $_SESSION['adminLogin']=true;
             $_SESSION['adminId']=$row['sr_no'];
             redirect('dashboard.php');
            
              
            }else{
                alert('error','login-failed enter valid inputs');
            }
        }
    
    ?>
    <?php require('include/script.php');?>
</body>
</html>
