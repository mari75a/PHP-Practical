<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>
    <h1>Register Form</h1>

    <p>Alumni Association – Faculty of Science</p>
    <form action="welcome.php" method="POST">
        <p>Name: <input type="text" name="yourname" /><p id="error1"></p><br />
            E-mail: <input type="text" name="email" /><br />
            Registration No: <input type="text" name="regno" placeholder="SC/XXXXXX" /><br/>
            Gender : <input type="radio" name="gender" value="male" /> Male
            <input type="radio" name="gender" value="female" /> Female
            <input type="radio" name="gender" value="other" /> Other
        </p>
        <input type=submit value=Register>
    </form>
</body>

</html>