<?php
require './conection.php';
if (isset($_POST['LoginButton'])) {
   $level=$_POST['level'];
   $password=$_POST['password'];
   if (!empty($_POST['level'])&&!empty($_POST['password'])) {
    $login=simpleCrud::login($level, $password);
   }else {
    echo "Please, all the fileds are required!";
   }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login form</title>
</head>
<style>
    .form form{
        width: 230px;
        height: 240px;
    }
    </style>
<body>
    <div class="main">
        <div class="content">
            <div class="form">
                <form action="" method="post">
                <div class= signup>
                        SIGN IN
                    </div>
                   <div class="inputBox">
                   <select name="level" id="">
                            <option value="1">2021/csc/001</option>
                            <option value="2">2021/csc/002</option>
                            <option value="3">2021/csc/003</option>
                            <option value="4">2021/csc/004</option>
                            <option value="5">2021/csc/005</option>
                            <option value="6">2021/csc/006</option>
                            <option value="7">2021/csc/007</option>
                            <option value="8">2021/csc/008</option>
                            <option value="9">2021/csc/009</option>
                            <option value="10">2021/csc/0010</option>
                            <option value="11">2021/csc/0011</option>
                            <option value="12">2021/csc/0012</option>
                            <option value="13">2021/csc/0013</option>
                            <option value="14">2021/csc/0014</option>

                        </select>
                   <input type="password" name="password" id="" placeholder="Enter yor password">
                   </div>
                  

                   <div class="login">
                    <a href="./index.php">Don't have any account? Sign up</a>
                   </div>
               <div class="submitButton">
               <input type="submit" value="Login" name="LoginButton">
               </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>