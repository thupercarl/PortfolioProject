/*
Name: Jake Donaldson
Date: 2/8/21
File: Guestbook.js
 */
document.getElementById("guestbookform").onsubmit = validate;

function validate()
{
    console.log("Validate is working!");
    let firstName = document.getElementById("fname").value;
    let lastName = document.getElementById("lname").value;
    let email = document.getElementById("emailaddress").value;
    let mailingList = document.getElementById("emailme").checked;
    let linkedin = document.getElementById("linkedin").value;
    let howwemet = document.getElementById("meeting").value;

    console.log(firstName);
    console.log(lastName);
    console.log(email);
    console.log(mailingList);
    console.log(linkedin);
    console.log(howwemet);

    //flag variable
    let isValid = true;

    //clear all errors
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.display = "none";
    }

    //check firstname
    if (firstName == "") {
        let errFName = document.getElementById("err-fname");
        errFName.style.display = "inline";
        isValid = false;
    }
    if (lastName == "") {
        let errLName = document.getElementById("err-lname");
        errLName.style.display = "inline";
        isValid = false;
    }
    if (mailingList == true) {
        if (email == "" || (!email.includes('@') || !email.includes('.'))) {
            let errEmail = document.getElementById("err-emailaddress");
            errEmail.style.display = "inline";
            isValid = false;
        }
    }
    if (mailingList == false && email != "") {
        if(!email.includes('@') || !email.includes('.')) {
            let errEmail = document.getElementById("err-emailaddress");
            errEmail.style.display = "inline";
            isValid = false;
        }
    }

    if(linkedin != "") {
        if(!linkedin.includes("http") || !linkedin.includes(".com")) {
            let errLinkedin = document.getElementById("err-linkedin");
            errLinkedin.style.display = "inline";
            isValid = false;
        }
    }
    if(howwemet == "none") {
        let errHowwemet = document.getElementById("err-howwemet");
        errHowwemet.style.display = "inline";
        isValid = false;
    }
    return isValid;
}