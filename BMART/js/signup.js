function resul()
{
if(document.signup_form.fname.value=" ")
{
alert("please enter name");
return false;
}
if else(document.signup_form.email.value=" ")
{
alert("please enter email");
return false;
}
else if(document.signup_form.pass1.value=" ")
{
alert("please enter Password");
return false;
}
else if(document.signup_form.pass2.value=" ")
{
alert("please enter Confirm Password");
return false;
}
else if(document.signup_form.gender.value=" ")
{
alert("please enter gender");
return false;
}
else if(document.signup_form.mobile.value=" ")
{
alert("please enter 10 digit mobile no");
return false;
}
else if(document.signup_form.add.value=" ")
{
alert("please enter Address");
return false;
}
else
{
return true;
}
}