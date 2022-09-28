// let obj = JSON.parse(sessionStorage.getItem("UserProfile"));

// document.getElementById("password").value = obj.name;
// document.getElementById("email").value = obj.email;
// document.getElementById("phone").value = obj.gender;
// document.getElementById("gender").value = obj.mobileNo;
// document.getElementById("dob").value = obj.dob;




function changePassword() {

        password = document.getElementById("password").value,
        npassword = document.getElementById("nPassword").value,
        cpassword = document.getElementById("cPassword").value



    let getData = JSON.parse(localStorage.getItem('user'));

    for (let i = 0; i < getData.length; i++) {
        if (password === getData[i].password) {
            console.log("password Success");
            if (npassword == cpassword) {
                getData[i].password = cpassword;
                console.log(getData[i].password)
            }

            localStorage.setItem('user', JSON.stringify(getData))
            sessionStorage.setItem("UserProfile", JSON.stringify(getData[i]));
            break;
        }
    }

}