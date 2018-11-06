function val()
{
if(document.login_form.username.value=" ")
{
alert("please enter username");
return false;
}
else if(document.login_form.pass.value=" ")
{
alert("please enter Password");
return false;
}
else
{
return true;
}
}