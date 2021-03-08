<?php    
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "new";


     $conn = new mysqli($servername,$username,$password,$dbname);

     if ($conn->connect_error){
      die("Connection failed: " . $conn->connect_error);
     }
     else{
      echo "Connected Succesfully!";
     }

     $sql = "INSERT INTO regr ( username, password, gender, email, phonecode, phone ) VALUES ('$_POST[username]','$_POST[password]','$_POST[gender]','$_POST[email]','$_POST[phonecode]','$_POST[phone]')";

     $result = mysqli_query($conn,$sql);

     if ($result === false) {
      echo "Data already exist!";
     }
     else{
      echo "Message sent successfully!";
     }

    // header("refresh:2; url=connection.php");
?>