<?php
/* The functions in this file will handle login for users who already have accounts created for them 
   in the database. */
   
require_once('connectDB.php'); 
  
function login() {
    $dbh = connectDB();
    
    $username = mysqli_real_escape_string($dbh, $_POST['customerID']);
    $password = mysqli_real_escape_string($dbh, $_POST['password']);
    
    $sql = "select customerID, firstname, lastname, city, phone, password from newUser where customerID = '$customerID' and password = '$password';";
    $result = mysqli_query($dbh,$sql); 
    if (!$result)
    {
        die('Error: '.mysqli_error($dbh).'<br>');
    }
    else
    {
        echo "Successful login".'<br>';
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        printf("%s (%s) %s %s %s %s \n",$row['username'],$row['firstname'],$row['lastname'],$row['city'],$row['zip'],$row['password']);
        $sql = "select * from newUser;";
        $result = mysqli_query($dbh,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        printf("%s %s %s %s %s %s ",$row['username'],$row['firstname'],$row['lastname'],$row['city'],$row['zip'],$row['password']);
                
    
    }
}

if(isset($_POST['submit']))
{
    echo "Login _POST'submit' is set".'<br>';
    login();
}


?>
