<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./change_password/changepassword.css">
</head>

<body>

    <nav>
        <lable class="logo">Profile</lable>
        <ul>
            <li><a href="profile.php">View Profile</a></li>
            <li><a href="edit.php">Edit Profile</a></li>
            <li><a href="#">Change Password</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>

        <lable id="icon">
            <i class="fas fa-bars"></i>
        </lable>
    </nav>



    <div id="maindiv">

        <div id="div1">
            <p> Current Password</p>
            <p>New password</p>
            <p>confirm Password</p>
        </div>
        <div id="div2">
            <input type="password" id="password">
            <input type="password" id="nPassword">
            <input type="password" id="cPassword">
        </div>
    </div>
    <button type="submit" onclick="changePassword()">Submit</button>
    <script src="./change_password/changepassword.js"></script>

</body>

</html>