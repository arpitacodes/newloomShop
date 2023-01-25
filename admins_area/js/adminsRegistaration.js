
    function SaveAdminDetails() {
    validateControls();
}
var gender;
var specialization = [];
function validateControls() {
    //FirstName
    var fname = document.getElementById("fname")
    if (fname.value == "") {
        window.alert("please enter your first name");
        fname.focus();
        return false;
    }
    //LastName
    var lname = document.getElementById("lname")
    if (lname.value == "") {
        window.alert("please enter your last name");
        lname.focus();
        return false;
    }
    //Email
    var email = document.getElementById("email")
    if (email.value == "") {
        window.alert("please enter your valid email Id");
        email.focus();
        return false;
    }
    //Mobile
    var mobile = document.getElementById("mobile")
    if (mobile.value == "") {
        window.alert("please enter your 10 digits mobile no.");
        mobile.focus();
        return false;
    }
    //Gender   
    gender = document.querySelector('input[name="gender"]:checked');
    if (gender === null) {
        window.alert("Gender required!");
        gender.focus();
        return false;
    }

    //Validation of Radio Button
/*gender = document.querySelector('input[name="gender"]:checked');
if (gender === null) {
window.alert("Gender required!");
gender.focus();
return false;
}*/
    //Dob
    var dob = document.getElementById("dob")
    if (dob.value == "") {
        window.alert("please enter your Date of Birth");
        dob.focus();
        return false;
    }
    //Address
    var address = document.getElementById("address")
    if (address.value == "") {
        window.alert("please enter your address details");
        address.focus();
        return false;
    }
    //City
    var city = document.getElementById("city")
    if (city.value == "") {
        window.alert("please enter your city name");
        city.focus();
        return false;
    }
    // Pin
    var pin = document.getElementById("pin")
    if (pin.value == "") {
        window.alert("please enter your 6 digits Area PIN");
        pin.focus();
        return false;
    }
    // State
    var state = document.getElementById("state")
    if (state.value == "") {
        window.alert("please enter your state name");
        state.focus();
        return false;
    }
    //category
    var category = document.getElementById("category")
    if (category.selectedIndex < 1) {
        window.alert("please choose your category");
        category.focus();
        return false;
    }
/*//Below code, we can use to validate a dropdown in HTML using JavaScript.
var category = document.getElementById("category")
if (category.selectedIndex < 1) {
window.alert("please choose your category");
category.focus();
return false;
}
*/
    
    if (specialization == "") {
        alert("Specialization required!");
        return false;
    }
/*
if (specialization == "") {
alert("Specialization required!");
return false;
}*/

    // Password
    var password = document.getElementById("password")
    if (password.value == "") {
        window.alert("please enter your password");
        password.focus();
        return false;
    }

    getControlValues();

}

//Validation Of Checkbox

var specializationArray = document.getElementsByClassName('specialization');
for (var i = 0; specializationArray[i]; ++i) {
if (specializationArray[i].checked) {
specialization.push(specializationArray[i].value);
}
}
// Specialization
   /* var specializationArray = document.getElementsByClassName('specialization');
    for (var i = 0; specializationArray[i]; ++i) {
        if (specializationArray[i].checked) {
            specialization.push(specializationArray[i].value);
        }
    }*/



//get HTML control values using JavaScript. 
function getControlValues() {
    alert("First Name= " + fname.value + "\n" + "Last Name= " + lname.value + "\n" + "Email= " + email.value + "\n" + "Mobile= " + mobile.value + "\n" + "Gender= " + gender.value + "\n" + "DateOfBirth= " + dob.value + "\n" + "Address= " + address.value + "\n" + "City= " + city.value + "\n" + "Pin= " + pin.value + "\n" + "State= " + state.value + "\n" + "Qualification= " + qualification.value + "\n" + "Specialization= " + specialization + "\n" + "Password= " + password.value)
}
