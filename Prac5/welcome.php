<?php

$name =$_POST["yourname"];

$email =$_POST["email"];
$regno =$_POST["regno"];  
$gender=$_POST["gender"];

if(empty($name) || empty($email) || empty($regno) || empty($gender)) {
    echo "Please fill in all fields.";
} else {
    echo "<html>
    <body>
    <h1>Welcome to the Alumni Association</h1>
    <p>Your name is: $name</p>
    <p>Your e-mail: $email</p>
    <p>Your Registration No: $regno</p>
    <p>Your Gender: $gender</p>
    </body>
    </html>";
}
?>