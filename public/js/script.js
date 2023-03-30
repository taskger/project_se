const form=document.getElementById('form');
const firstname=document.getElementById('fisrt-name');
const lastname=document.getElementById('Last-name');
const telephone=document.getElementById('tel');
const email=document.getElementById('email');
const password=document.getElementById('pwd');

form.addEventListener('submit',function(e){
    e.preventDefault();
    console.log("Submit");
    if(firstname.value=== ''){
        showerror(firstname)
    }else{
        showsucces(firstname)
    }
    if(lastname.value=== ''){
        showerror(lastname)
    }else{
        showsucces(lastname)
    }
    if(email.value=== ''){
        showerror(email)
    }else{
        showsucces(email)
    }
    if(tel.value=== ''){
        showerror(tel)
    }else{
        showsucces(tel)
    }
    if(password.value=== ''){
        showerror(password)
    }else{
        showsucces(password)
    }
    checkInputLength(tel,10,10)
});
function showerror(input){
    const formgroup = input.parentElement;
    formgroup.className = 'form-group error';
}

function showsucces(input){
    const formgroup = input.parentElement;
    formgroup.className = 'form-group success';
}

function checkInputLength(input,min,max){
    if(input.value.length < min){
        showerror(input)
    }else if(input.value.length > max){
        showerror(input)
    }else{
        showsucces(input)
    }
}
