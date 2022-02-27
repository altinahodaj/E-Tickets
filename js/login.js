function validate(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    var regex = /[A-Z]{1}[a-z]{6}\d{3}/;
    var validimi = regex.test(password);

    if(!username.length >=5){
        alert ("Please enter a valid username!");
        return false;
    }
    else if(password = null){
        alert ("Please enter a valid password!");
        return false;
    }
    else{
        alert ("Successful!");
        return true;
    }
        
}
