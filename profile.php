<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./Profile/profile.css">
</head>
<body>
   
    
    <nav>
        <lable class="logo">Profile</lable>
        <ul>
            <li><a  href="profile.php">View Profile</a></li>
            <li><a  href="edit.php">Edit Profile</a></li>
            <li><a  href="chamgepassword.php">Change Password</a></li>
            <li><a href="logout.php">Log Out</a></li>            
        </ul>

        <lable id="icon">
            <i class="fas fa-bars"></i>
        </lable>
    </nav>



    <div id="maindiv">

        <div id="div1">
            <p>Name</p>
            <p>Email</p>
            <p>Phone No</p>
            <p>Gender</p>
            <p>Dob</p>
        </div>
        <div id="div2">
            <p id="name"></p>
            <p id="email"><p>
            <p id="phone"></p>
            <p id="gender"></p>
            <p id="dob"></p>        
        </div>
<script src="./Profile/profile.js"></script>

</body>
</html>