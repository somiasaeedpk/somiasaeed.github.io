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

     $sql = "INSERT INTO app ( firstname, lastname, Course, gender, countrycode, phoneno, emailaddress, password, pswrepeat ) VALUES ('$_POST[firstname]','$_POST[lastname]', '$_POST[Course]', '$_POST[gender]','$_POST[countrycode]','$_POST[phoneno]','$_POST[emailaddress]','$_POST[password]','$_POST[pswrepeat]')";

     $result = mysqli_query($conn,$sql);

     if ($result === false) {
      echo "Data already exist!";
     }
     else{
      echo "Message sent successfully!";
     }

    // header("refresh:2; url=connection.php");
?>