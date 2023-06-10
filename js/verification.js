const inputs = document.querySelectorAll('.input');

function focusFunc(){
    let parent = this.parentNode.parentNode;
    parent.classList.add('focus');
}

function blurFunc(){
    let parent = this.parentNode.parentNode;
    if(this.value == ""){
        parent.classList.remove('focus');
    }
}


inputs.forEach(input =>{
    input.addEventListener('focus', focusFunc);
    input.addEventListener('blur', blurFunc);
});

function check(form)
{
    if(form.username.value == "admin123" && form.password.value == "admin123")
        {
            open('admin_login.php')
        }
    if(form.username.value == "doctor123" && form.password.value == "doctor123")
        {
            open('doctor_login.php')
        }
    if(form.username.value == "nurse123" && form.password.value == "nurse123")
        {
            open('nurse_login.php')
        }
    else
        {
            alert("Invalid Username or Password")
        }
}