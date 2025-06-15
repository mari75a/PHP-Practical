<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>
    <h1>Register Form</h1>

    <p>Alumni Association – Faculty of Science</p>
    <form action="formaction1.php" method="GET">
        <p>Name: <input type="text" name="yourname" /><br />
            E-mail: <input type="text" name="email" /><br />
            Registration No: <input type="text" name="regno" placeholder="SC/XXXXXX" /><br/>
            Gender : <input type="radio" name="gender" value="male" /> Male
            <input type="radio" name="gender" value="female" /> Female
            <input type="radio" name="gender" value="other" /> Other
        </p>
        <input type=submit value=submit>
    </form>
</body>

</html>