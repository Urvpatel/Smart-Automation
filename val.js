function validate()
{
    var Name=document.getElementById("nme").value;
    var password=document.getElementById("pas").value;
    if(Name=="admin" && password=="admin")
    {
        alert("Login Succesfull");
        return false;
    }
    else{
        var Name=document.getElementById("nme").disabled=true;
        var password=document.getElementById("pas").disabled=true;
        var password=document.getElementById("sub").disabled=true;
        alert("Incorrect USername or Password");
        window.location="index.html";
        return false;
    }
}