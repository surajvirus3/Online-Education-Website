<?php


$insert = false;
if(isset($_POST["name"])){


    
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
    {
        header("Location: index.html");

    }
    
    // Collect post variables
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $couses = $_POST["couses"];
    $gender = $_POST["gender"];
    $send = $_POST["send"];
   
  
    $sql = "INSERT INTO `trip` . `iit4` (`name`, `email`, `number`, `couses`, `gender`, `send`, `dt`) VALUES ('$name', '$email', '$number', '$couses', '$gender', '$send',  current_timestamp());";

   // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();

}
?>