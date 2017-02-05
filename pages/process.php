<?php
    
     $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
     mysql_connect("localhost","root","SrGAygSiO7J-");
    mysql_select_db("login");

    $result = mysql_query("select * from users where username = '$username' and password = '$password'")
                or die("Failed to query database".mysql_error());
    $row = mysql_fetch_array($result);
    $num_rows = mysql_num_rows($result);
    if($row['username'] == $username && $row['password'] == $password){
        echo "Login successfull!!! Welcome".$row['username'];
    }else{
        echo "Failed to login!";
    }
    if ($num_rows > 0) {

        session_start();
        $_SESSION['login'] = "1";
        header ("Location: DutyEntry.html");

    }
    else {

        $errorMessage = "Invalid Login";
        session_start();
        $_SESSION['login'] = '';
}
?>