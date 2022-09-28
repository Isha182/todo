var arr = [];
var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var phoneno = /^\d{10}$/;
var pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

function formValidation() {

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var mobileNo = document.getElementById("phone").value;
    var gender = document.getElementById("gender").value;
    var password = document.getElementById("password").value;
    var dob = document.getElementById("dob").value;


    if (name == null || name == "") {
        alert("Name must be required");
    }
    else if (!email.match(emailformat)) {
        alert("You have entered an invalid email address!");
    }
    else if (!mobileNo.match(phoneno)) {
        alert("You have entered an invalid phone number!")
    }
    else if (gender == "") {
        alert("You must select male or female");
    }
    else if (dob == "") {
        alert("Dob must be required")
    }
    else if (!password.match(pass)) {
        alert('Input Password and Submit [8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character')
    }
    else {
        const person = {

            'name': document.getElementById("name").value,
            'email': document.getElementById("email").value,
            'mobileNo': document.getElementById("phone").value,
            'gender': document.getElementById("gender").value,
            'password': document.getElementById("password").value,
            'dob': document.getElementById("dob").value

        }
        //    localStorage.setItem("user", JSON.stringify(person));

        let getData = JSON.parse(localStorage.getItem('user'));
        if (getData === null) {
            arr.push(person);
            localStorage.setItem("user", JSON.stringify(arr));
        }
        else {
            getData.push(person)
            localStorage.setItem("user", JSON.stringify(getData));
        }
    }
}

