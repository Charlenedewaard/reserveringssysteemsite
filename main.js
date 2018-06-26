let myInput = document.getElementById("psw");
let confirmpsw = document.getElementById("confirmpsw");
let match = document.getElementById("match");
let submit = document.getElementById("submit");
let letter = document.getElementById("letter");
let capital = document.getElementById("capital");
let number = document.getElementById("number");
let length = document.getElementById("length");
let username = document.getElementById("username");
let letterusername = document.getElementById("letterusername");
let email = document.getElementById("email");
let letteremail = document.getElementById("letteremail");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// when the user starts typing
myInput.onkeyup = function() {
        // Validate lowercase letters
        let lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        let upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        let numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if(myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }


confirmpsw.onfocus = function() {
    document.getElementById("message").style.display = "block";
}
confirmpsw.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// check if password match then able button
confirmpsw.onkeyup = function() {
    if (confirmpsw.value === myInput.value) {
        match.classList.remove("invalid");
        match.classList.add("valid");
    } else{
            match.classList.remove("invalid");
            match.classList.add("valid");
    }
    if(document.getElementsByClassName("valid").length === 7){
        submit.removeAttribute("disabled");
    }
}
// username requierment
username.onfocus = function() {
    document.getElementById("messageusername").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
username.onblur = function() {
    document.getElementById("messageusername").style.display = "none";
}
// check username valid
username.onkeyup = function(){
    if(username.value.length >= 5 ){
        letterusername.classList.remove("invalid");
        letterusername.classList.add("valid");
    } else{
        letterusername.classList.add("invalid");
    }
}
// show message email
email.onfocus = function() {
    document.getElementById("messageemail").style.display = "block";
}

// When the user clicks outside of the email field, hide the message box
email.onblur = function() {
    document.getElementById("messageemail").style.display = "none";
}


// check email for @ and .
email.onkeyup = function(){
    let re = /\S+@\S+\.\S+/;
    if(email.value.match(re)) {
        letteremail.classList.remove("invalid");
        letteremail.classList.add("valid");
    } else {
        letteremail.classList.remove("valid");
        letteremail.classList.add("invalid");
    }
}
