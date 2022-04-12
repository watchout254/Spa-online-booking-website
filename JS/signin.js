document.getElementById("signin").addEventListener("SIGN IN", function(e) { 
    e.preventDefault();

    const password = document.getElementById("password").value ;

    const confirmpassword = document.getElementById("confirmPassword").value ;

    if(password!=confirmPassword) {
        document.getElementById("password-error").innerHTML = "password doesn't match";
        return false;
    } 

    else {
        document.getElementById("password-error").innerHTML = "";
        document.getElementById("form-success").innerHTML = "successful sign in ";
        //return true;
    }
});