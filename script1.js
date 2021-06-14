

function validateEmail(email) {
    const regex = /^[^\s@]+@gmail.com+$/;
    return regex.test(email);
}

function validatePassword(password) {
    const regex = /^(?=.*[A-Z])(?=.*[!@#$%^&*])[\w!@#$%^&*]{8,}$/;
    return regex.test(password);
}

function signUp() {
    var email = document.getElementById('InputEmail1').value;
    var password1 = document.getElementById('InputPassword1').value;
    var password2 = document.getElementById('InputPassword2').value;
    if (validateEmail(email)) {
        console.log('OK');
    }
      else {
            document.getElementById('InputEmail1').value = email + '@gmail.com';
        }

    if (validatePassword(password1)) {
        if (password1 == password2) {
                   alert("Validation successful");
               }
               else {
                   alert('Passwords don\'t match');
               }
           }
           else {
               alert("Password should contain at least one Capital letter, one Special symbol and contain a minimum of 8 characters in length");
           }
}

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}

