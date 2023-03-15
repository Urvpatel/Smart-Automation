


function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload proper image file');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}


var phoneError = document.getElementById('phone-error');
function validatePhone(){
    var phone = document.getElementById('contact-phone').value;
    var phoneError = document.getElementById('phone-error');
    if (phone.length == 0)
    {
        alert('Phone no.required');
    phoneError.innerHTML = 'Phone no. is required';
     return false;
    }
    
    if (phone.length !== 10)
    {
    phoneError .innerHTML = 'Phone no should be 10 digits';
    return false;
    }
   if(!isNaN(phone)){
    phoneError.innerHTML = '<i class="fas fa-check-circle"></i>';
    return true;
    }
    else return false;
}


    