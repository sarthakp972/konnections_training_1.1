<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = isset($_POST["input1"]) ? $_POST["input1"] : "";

    $lastname = isset($_POST["input2"]) ? $_POST["input2"] : "";

    $email = isset($_POST["input3"]) ? $_POST["input3"] : "";

    $phone_number = isset($_POST["input4"]) ? $_POST["input4"] : "";

    $dob =isset($_POST["input5"]) ? $_POST["input5"] : "";

    $gender = isset($_POST["input6"]) ? $_POST["input6"] : "";

    $username = isset($_POST["input7"]) ? $_POST["input7"] : "";

    $password = isset($_POST["input8"]) ? $_POST["input8"] : "";


    $conn=mysqli_connect("localhost","root","","signup_form") or  die("connection failed");
    $sql = "INSERT INTO student(first_name,last_name,email_address,phone_number,date,gender,username,password) VALUES ('$firstname','$lastname','$email','$phone_number','$dob','$gender',' $username','$password')";
    $result=mysqli_query($conn,$sql) or die("query unsuccsesfull");

    // Perform any necessary processing with the received data
    // For demonstration purposes, we'll simply return a response
    $response = "Data saved successfully:\nInput 1:  $firstname\nInput 2:  $lastname";

    echo $response;

} else {
    echo "Invalid request method";
}
?>
