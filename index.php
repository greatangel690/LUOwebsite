<?php
require './conection.php';
if (isset($_POST['signButton'])) {
    $level = $_POST['level'];
    $password = $_POST['password'];
    if (!empty($_POST['level']) && !empty($_POST['password'])) {
        $insert = simpleCrud::insert($level, $password);
    } else {
        echo "<script>alert('Please, all fields are required!');</script>";
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
    <title>Sign up form</title>
</head>

<body>


    <div class="main">
        <div class="content">
            <div class="form">
                <form action="" method="post">
                    <div class= signup>
                        SIGN UP
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
                        <input type="password" name="password" placeholder="Enter your password">
                    </div>

                    <div class="login">
                        <a href="./login.php">Do you have any account? Sign in</a>
                    </div>
                    <div class="submitButton">
                        <input type="submit" value="Submit" name="signButton">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>