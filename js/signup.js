function validate(){
    var name = document.getElementById("name").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var creditcard = document.getElementById("creditcard").value;

    var regex = /[A-Z]{1}[a-z]{6}\d{3}/;
    var password = document.getElementById("password").value;
    var validimi = regex.test(password);

    if(name == ""){
        alert ("Please enter a name!");
        return false;
    }
    else if(lastname == ""){
        alert ("Please enter a last name!");
        return false;
    }
    else if(!email.includes("@")){
        alert ("Please enter a valid email!");
        return false;
    }
    else if(validimi == false){
        alert ("Please enter a valid password!");
        return false;
    }
    else if(creditcard == ""){
        alert ("Please enter a credit card!");
        return false;
    }
    else{
        alert ("Successful!");
        return true;
    }
        
}
