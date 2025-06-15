<?php
$nameErr = $emailErr = $ageErr = "";
$name = $email = $age = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid = true;

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $valid = false;
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $valid = false;
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    if (empty($_POST["age"])) {
        $ageErr = "Age is required";
        $valid = false;
    } else {
        $age = htmlspecialchars($_POST["age"]);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
    <style>
        .error {color: red;}
    </style>
</head>
<body>

<form method="post" action="">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span><br><br>

    Email: <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error">* <?php echo $emailErr; ?></span><br><br>

    Age: <input type="number" name="age" value="<?php echo $age; ?>">
    <span class="error">* <?php echo $ageErr; ?></span><br><br>

    <input type="submit" name="submit" value="Submit">
</form>
