function validate()
{
    var Name=document.getElementById("nme").value;
    var password=document.getElementById("pas").value;
    if(Name=="xyz" && password==123)
    {
        alert("Login Succesfull");
        return false;
    }
    else{
        var Name=document.getElementById("nme").disabled=true;
        var password=document.getElementById("pas").disabled=true;
        var password=document.getElementById("sub").disabled=true;
        alert("Incorrect USername or Password");
        window.location="demo2.html";
        return false;
    }
}