<?php
$insert=false;
if(isset($_POST['name'])){
//set connection vriable
    $server="localhost";
    $username="root";
    $password="";
//create a connetion
    $con=mysqli_connect($server,$username,$password);
    // check for connection success
    if(!$con){
        die("connection to this database is failed due to".mysqli_connect_error());
    }
   
//collect post variables
$srno= $POST_['srno'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $desc = $_POST['desc'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];

    $sql="INSERT INTO `trip`.`trip` ( `srno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$srno','$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    echo $sql;

    if($con->query($sql)==true){
        //  echo"succesfully inserted";
        // flag for succesful insertion
        $insert=true;
    }
    else{
        echo"ERROR:$sql <br> $con->error";
    }
//close database connection
    $con->close();
}
    ?>




<!-- html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tavel form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bree+Serif&family=Poppins:wght@100&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bree+Serif&family=Poppins:wght@100&family=Roboto:wght@300&family=Sriracha&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="bg12.jpg" alt="iit">
    <div class="container">
        <h1>Welcome to tavel form </h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <?php  
        if($insert==true){
    echo " <p class='submsg'>Thanks for submittimg your form. We are happy to see you for  joing us to us trip.</p>";
}

    ?>
        <form action="" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter any other information here"></textarea>
            <button class="btn">submit</button>

        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>