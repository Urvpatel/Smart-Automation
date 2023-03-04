function verify()
{
    var Name=document.getElementById("nme").value;
    var password=document.getElementById("pas").value;
    if(Name=="abc" && password==321)
    {
        alert("Login Succesfull");
        window.location="demo_a.php"
        return false;
    }
    else{
        var Name=document.getElementById("nme").disabled=true;
        var password=document.getElementById("pas").disabled=true;
        var password=document.getElementById("sub").disabled=true;
        alert("Incorrect USername or Password");
        window.location="panel.html";
        return false;
    }
}