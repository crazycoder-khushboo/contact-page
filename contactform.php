<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="style.css">
    <title>Contactform</title>
</head>
<body>
<div class="container">
<div class="container">
<h3 style=text-align:center;font-size:30px;color:white;>Contact Us</h3>
    <div class="contact-form">
<div>
    <div class="contact-us">
        <form action="save.php" method="post">
        <label for="fname">First name</label><br>
        <input type="text"  name="fname" placeholder="Enter First Name"><br>
        <label for="lname">Last name</label><br>
        <input type="text"  name="lname" placeholder="Enter Last Name"><br>
        <label for="email">Email</label><br>
        <input type="email"  name="email" placeholder="Enter Email "><br>
        <label for="Mobile">Mobile</label><br>
        <input type="text"  name="mobile" placeholder="Enter Mobile Number"><br>
        <input type="submit" value="submit">
</form>
</div>
</body>
</html>