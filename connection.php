<?php    
     $servername = "localhost";
     $username = "root";
     $password = "password";
     $dbname = "new1";
     $port = 3307;


     $conn = new mysqli($servername,$username,$password,$dbname,$port);

     if ($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
     }
     else{
      echo "Connected Succesfully!";
     }

     $sql = "INSERT INTO regr ( username, password, gender, email, phonecode, phone ) VALUES ('$_POST[username]','$_POST[password]','$_POST[gender]','$_POST[email]','$_POST[phonecode]','$_POST[phone]')";
     echo $sql;

     $result = mysqli_query($conn,$sql);

     if ($result === false) {
        echo $result;
      echo "Data already exist!";
     }
     else{
      echo "Message sent successfully!";
     }

    // header("refresh:2; url=connection.php");
?>