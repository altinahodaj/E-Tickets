function validate(){
    var username = document.getElementById("username").value;

    var regex = /[A-Z]{1}[a-z]{6}\d{3}/;
    var password = document.getElementById("password").value;
    var validimi = regex.test(password);

    if(!username.includes("@")){
        alert ("Please enter a valid email!");
        return false;
    }
    else if(validimi == false){
        alert ("Please enter a valid password!");
        return false;
    }
    else{
        alert ("Successful!");
        return true;
    }
        
}
