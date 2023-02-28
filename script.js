var usernameError = document.getElementById('username-error');
function validateUserName()
{
    var username = document.getElementById('contact-name').value;
    if (username.length == 0) {
        usernameError.innerHTML = '*Name is required';
        return false;
    }
    usernameError.innerHTML = 'Valid';
    return true;
}

var phoneError = document.getElementById('phone-error');
function validatePhone(){
    var phone = document.getElementById('contact-phone').value;
    
    if (phone.length == 0)
    {
    phoneError.innerHTML = 'Phone no is required';
     return false;
    }
    
    if (phone.length !== 10)
    {
    phoneError .innerHTML = 'Phone no should be 10 digits';
    return false;
    }
    
    phoneError.innerHTML = '<i class="fas fa-check-circle"></i>';
    return true;
    }


    
    var emailError =  document.getElementById('email-error');
function validateEmail(){
    var email = document.getElementById("contact-email"). value;
    
    if(email.length == 0)
    {
    emailError.innerHTML= 'Email is required';
    return false;
    }
    if(!email.match(/^[A-Za-z]\_\-[0-9][@][A-Za-z][\.][a-z]{2,4}$/))
    {
    emailError.innerHTML ='Email Invalid';
    return false;
    }
    emailError.innerHTML = '‹i class="fas fa-check-circle"›</i>';
    return true;
    }
    