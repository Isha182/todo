<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Edit_profile/edit.css">
</head>

<body>

    <nav>
        <lable class="logo">Profile</lable>
        <ul>
            <li><a href="profile.php">View Profile</a></li>
            <li><a href="#">Edit Profile</a></li>
            <li><a href="chamgepassword.php">Change Password</a></li>
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
            <input id="name" type="text" value="">
            <input id="email" type="text" value="">
            <input id="phone" type="text" value="">
            <input id="gender" type="text" value="">
            <input id="dob" type="text" value="">
        </div>
    </div>
    <button type="submit" onclick="editData()" >Submit</button>
    <script src="./Edit_profile/edit.js"></script>

</body>

</html>