<?php
class simpleCrud
{
    public static function conection()
    {
        try {
            $con = new PDO("mysql:host=localhost;dbname=simplecrud", 'root', '');
            return $con;
        } catch (PDOException $error1) {
            echo $error1->getMessage();
        } catch (Exception $error2) {
            echo $error2->getMessage();
        }
    }
    public static function insert( $level, $password)
    {
        $insert = simpleCrud::conection()->prepare("INSERT INTO users(level,password) VALUES(:l,:p)");
        $insert->bindValue(':l', $level);
        $insert->bindValue(':p', $password);
        $insert->execute();
        if ($insert) {
            echo "<script>alert('Registered!');</script>";
        } else {
            echo "<script>alert('Not Registered!');</script>";
        }
    }
    public static function login($level, $password)
    {
        $login = simpleCrud::conection()->prepare("SELECT level FROM users WHERE level=:l and password=:p");
        $login->bindValue(':l', $level);
        $login->bindValue(':p', $password);
        $login->execute();
        if ($login->rowCount() > 0) {
            $fetch = $login->fetch(PDO::FETCH_ASSOC);
            session_start();
            if ($fetch) {
                switch ($fetch['level']) {
                    case '1':
                        $_SESSION['level'] = 1;
                       header('location:001.php');
                        break;

                    case '2':
                        $_SESSION['level'] = 2;
                        header('location:002.php');
                        break;

                    case '3':
                     $_SESSION['level'] = 3;
                    header('location:003.php');
                    break;

                    case '4':
                     $_SESSION['level'] = 4;
                    header('location:004.php');
                    break;

                    case '5':
                        $_SESSION['level'] = 5;
                       header('location:005.php');
                        break;

                    case '6':
                        $_SESSION['level'] = 6;
                        header('location:006.php');
                        break;

                    case '7':
                     $_SESSION['level'] = 7;
                    header('location:007.php');
                    break;

                    case '8':
                     $_SESSION['level'] = 8;
                    header('location:008.php');
                    break;

                    case '9':
                        $_SESSION['level'] = 9;
                       header('location:009.php');
                       break;
   
                       case '10':
                           $_SESSION['level'] = 10;
                          header('location:010.php');
                           break;
   
                       case '11':
                           $_SESSION['level'] = 11;
                           header('location:011.php');
                           break;
   
                       case '12':
                        $_SESSION['level'] = 12;
                       header('location:012.php');
                       break;
   
                       case '13':
                        $_SESSION['level'] = 13;
                       header('location:013.php');
                       break;

                       case '14':
                        $_SESSION['level'] = 14;
                       header('location:014.php');
                       break;
                }
            }
        }else {
            echo "<script>alert('User not registered!');</script>";
        }
    }
}
