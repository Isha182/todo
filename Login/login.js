function check() { 

    Boolean = false;
    var userEmail = document.getElementById('userEmail').value;
    var userPw = document.getElementById('userPw').value;

    var user = JSON.parse(localStorage.getItem('user'));

    for (var i = 0; i < user.length; i++) {

        if (userEmail == user[i].email && userPw == user[i].password) {
            alert('You are loged in.');
            Boolean = true;
            sessionStorage.setItem("UserProfile",JSON.stringify(user[i]));
            window.location.href = './dashboard.php'
            break;
        }
    }

    if (Boolean == false) {
        alert("plese enter valid email and password")
    }
}


