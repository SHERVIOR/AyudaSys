<?php
    include_once 'db.inc.php';
    $username = mysqli_real_escape_string($conn, $_POST['un']);
    $password  = mysqli_real_escape_string($conn, $_POST['ps']);
    $sql = "SELECT * FROM admin WHERE username='$username';";
    $result = mysqli_query($conn, $sql);
    $RC = mysqli_num_rows($result);
    if ($RC > 0 ){
      while($row = mysqli_fetch_assoc($result)){
        if($row['password'] == $password){
            header("Location: ../adminpage.html");
            die();
        }
      }
    }
    else{
        $sql = "SELECT * FROM barangay_officials WHERE username='$username';";
        $result = mysqli_query($conn, $sql);
        $RC = mysqli_num_rows($result);
        if ($RC > 0 ){
            while($row = mysqli_fetch_assoc($result)){
                if($row['password'] == $password){
                    header("Location: ../barangay.html");
                    die();
                }
                
                else{
                    echo '<script>alert("Incorrect username or password.")</script>';
                    //sleep(3);
                    //header("Location: ../signin.html?login=failed");
                    exit();
                }

            }
        }
        else{echo '<script>alert("Incorrect username or password.")</script>';
            //sleep(3);
            //header("Location: ../signin.html?login=failed");
            exit();
        }
    }

?>