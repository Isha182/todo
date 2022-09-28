let obj = JSON.parse(sessionStorage.getItem("UserProfile"));

document.getElementById("name").innerText = obj.name;
document.getElementById("email").innerText = obj.email;
document.getElementById("phone").innerText = obj.mobileNo;
document.getElementById("gender").innerText = obj.gender;
document.getElementById("dob").innerText = obj.dob;