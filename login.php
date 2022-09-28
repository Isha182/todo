<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style>
    body {
        background: #00bf8f;
        background: linear-gradient(to right, #74c69d, #2d6a4f);
        color: white;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .form {
        max-width: 800px;
        width: 100%;
        margin: 20px auto;
        padding: 30px;
    }


    .title {
        font-size: 24px;
        font-weight: 600;
        margin: 30px 0 20px 0;
        text-transform: uppercase;
        text-align: center;
    }

    .form .form1 {
        width: 100%;

    }

    .form .form1 .inputfield {
        margin: 0 0 20px 0;
        display: flex;
        align-items: center;
    }

    .form .form1 .inputfield label {
        width: 200px;
        margin-right: 10px;
        font-size: 16px;
    }

    .form .form1 .inputfield .input,
    .form .form1 .inputfield .textarea {
        width: 100%;
        outline: none;
        border: 1px solid #a0aba7;
        font-size: 15px;
        padding: 8px 10px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .form .form1 .inputfield .textarea {
        width: 100%;
        height: 125px;
        resize: none;
    }

    .form .form1 .inputfield .custom_select {
        position: relative;
        width: 100%;
        height: 37px;
    }

    .form .form1 .inputfield .custom_select:before {
        content: "";
        position: absolute;
        top: 12px;
        right: 10px;
        border: 8px solid;
        border-color: #747976 transparent transparent transparent;
        pointer-events: none;
    }

    .form .form1 .inputfield .custom_select select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        outline: none;
        width: 100%;
        height: 100%;
        border: 0px;
        padding: 8px 10px;
        font-size: 15px;
        border: 1px solid #d5dbd9;
        border-radius: 3px;
    }


    .form .form1 .inputfield .input:focus,
    .form .form1 .inputfield .textarea:focus,
    .form .form1 .inputfield .custom_select select:focus {
        border: 1px solid #000000;
    }

    .wrapper .form .inputfield p {
        font-size: 14px;
        color: #757575;
    }

    .form .form1 .inputfield .check {
        width: 15px;
        height: 15px;
        position: relative;
        display: block;
        cursor: pointer;
    }

    .form .form1 .inputfield .btn {
        width: 100%;
        padding: 8px 10px;
        font-size: 15px;
        border: 0px;
        background: #2d6a4f;
        color: #fff;
        cursor: pointer;
        border-radius: 3px;
        outline: none;
    }

    .form .form1 .inputfield .btn:hover {
        background: #163e29;
    }

    .form .form1 .inputfield:last-child {
        margin-bottom: 0;
    }
    a{
        color: white;
        text-decoration: none;
        font-size: 20px;
       margin-left: 640px;
    }
</style>

</head>

<body>
    <div class="title">
        Login
    </div>

    <div class="form">

        <div class="form1">

          

            <div class="inputfield">
                <label>Email Address</label>
                <input type="email" class="input" id="userEmail" value="isha@gmail.com">
            </div>

            <div class="inputfield">
                <label>Password</label>
                <input type="password" class="input" id="userPw" value="Isha@12344">
            </div>

            <div class="inputfield">
                <input type="submit" value="Login" class="btn" onclick="check()">
            </div>
        </div>
    </div>
    <a href="index.php">Registration</a>
    <script src="./Login/login.js"></script>

</body>

</html>