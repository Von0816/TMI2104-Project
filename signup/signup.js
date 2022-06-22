
window.addEventListener('load', () => {
    console.log("js loaded");
    const form = document.getElementById("form");
    const username = document.getElementById("username");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const cPassword = document.getElementById("cPassword");
    const pswVis = document.getElementById("pswVis");

    pswVis.addEventListener('click', () => {
        if(pswVis.innerText === 'Show'){
            pswVis.innerText = 'Hide';
            password.type = 'text';
        }
        else {
            pswVis.innerText = 'Show';
            password.type = 'password';
        }
    })

    username.addEventListener('input', (e) => {
        console.log("Validating username");
        const usernameVal = username.value;
        if(usernameVal.trim() === ''){
            setError(username, "Please enter username");
            e.preventDefault();
        }
        else {
            setValid(username);
        }
    })

    username.addEventListener('blur', (e) => {
        console.log("Validating username");
        const usernameVal = username.value;
        if(usernameVal.trim() === ''){
            setError(username, "Please enter username");
            e.preventDefault();
        }
        else if(!(/^[a-zA-Z]*$/.test(usernameVal))){
            setError(username, "Username must only contains letter");
            e.preventDefault();
        }
        else {
            setValid(username);
        }
    })

    function validate(){
        const usernameVal = username.value;
        const emailVal = email.value;
        const passwordVal = password.value;
        const cPasswordVal = cPassword.value;

        if(usernameVal.trim() === ''){
            setError(username, "Please enter username");
        }
    }

    function setError(input, errorMsg){
        console.log("Setting error");
        const formEl = input.parentElement;
        const small = formEl.getElementsByTagName("small");

        if(formEl.classList.contains("valid")){
            formEl.classList.remove("valid");
        }
        formEl.classList.add("error");

        for(let i in small){
            small[i].innerText = errorMsg;
        }
    }

    function setValid(input){
        const formEl = input.parentElement;
        if(formEl.classList.contains("error")){
            formEl.classList.remove("error");
        }
        formEl.classList.add("valid");
    }
})