<?php
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $number = $_POST['number']; 
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $address1 = $_POST['address1'];
    $city= $_POST['city'];
    $region = $_POST['region'];
    $postelcode= $_POST['postelcode'];
    $percent= $_POST['percent'];
    $percent1 = $_POST['percent1'];
     
     //database connection
     $conn = new mysqli('localhost','root','','test');
     is($conn->connect_error){
        die('Connetion Failed:'.$conn->connect_error);
     }else{
        stmt=conn->prepare("insert into registration(fullName,email,number,birthdate,gender,address,address1,city,region,postelcode,percent,percent1) 
        values(?,?,?,?,?,?)");
        $stmt->blind_param("ssiisssssiii",$fullName,$email,$number,$birthdate,$gender,$address,$address1,$city,$region,$postelcode,$percent,$percent1);
        $stmt->execute();
        echo"registration successfully...";
        $stmt->close();
        $stmt->close();

     }

