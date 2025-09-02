function validateLogin(){
    let u=document.forms[0]["username"].value;
    let p=document.forms[0]["password"].value;
    if(u=="" || p==""){ alert("Enter username & password!"); return false; }
    return true;
}
function validateTask(){
    let title=document.forms[0]["title"].value;
    if(title.trim()==""){ alert("Enter task title!"); return false; }
    return true;
}
