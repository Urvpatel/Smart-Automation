
function myphn()
  {
var a = document.getElementById("phone").value;
if(a=="")
{
  document.getElementById("messages").innerHTML=" **Please Enter Mobile Number";
  return false;
}
if(isNaN(a)){
document.getElementById("messages").innerHTML=" **Digits only";
  return false;
        }
      if(a.length<10)
      {
        document.getElementById("messages").innerHTML=" **Mobile Number must be 10 Digits";
  return false;
      }
      if(a.length>10)
{
  document.getElementById("messages").innerHTML=" **Mobile Number must be 10 Digits";
return false;
}
if((a.charAt(0)!=9) && (a.charAt(0)!=8) && (a.charAt(0)!=7))
{
document.getElementById("messages").innerHTML=" **Mobile Number must start with 9,8 & 7 only";
return false;
}
  }