function validateForm()
{

let fname=document.querySelectorAll("form")[0][0];
let lname=document.querySelectorAll("form")[0][1];
let email=document.querySelectorAll("form")[0][2];
let pwd=document.querySelectorAll("form")[0][3];
let cpwd=document.querySelectorAll("form")[0][4];
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

if(fname=="")
    {

        alert("EMPTY NAME ENTERED PLEASE ENTER THE NAME CORRECTLY");
    }
   
if(!fname.includes("@"))
    {
alert("INVALID NAME ENETERED");

    }
     if(name.length<8)
    {
alert("NAME TOO SHORT");

    }

     if(pwd!=cpwd)
    {
        alert("ENTER BOTH PASSWORDS CORRECTLY");
    }
    
    if(pwd.length<5)
    {
        alert("PASSWORD TOO SHORT");
    }


        if (!filter.test(email)) {
            alert('ENTER VALID EMAIL');
        }




}